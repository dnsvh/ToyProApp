<?php
// src/Service/GoogleSlidesService.php

namespace App\Service;

use App\Entity\Announcement;
use Google_Client;
use Google_Service_Slides;
use Google_Service_Slides_Request;
use Google_Service_Slides_InsertTextRequest;
use Google_Service_Slides_CreateSlideRequest;
use Google_Service_Slides_CreateImageRequest;
use Google_Service_Slides_PageElementProperties;
use Google_Service_Slides_Size;
use Google_Service_Slides_Dimension;
use Google_Service_Slides_AffineTransform;

class GoogleSlidesService
{
    private Google_Service_Slides $slides;
    private string $presentationId;

    public function __construct(string $presentationId, string $credentialsPath)
    {
        // 1) Instantiate Google_Client using the service account JSON
        $client = new Google_Client();
        $client->setAuthConfig($credentialsPath);
        $client->addScope(Google_Service_Slides::PRESENTATIONS);

        // 2) Build the Slides service
        $this->slides = new Google_Service_Slides($client);

        // 3) Store the deck ID
        $this->presentationId = $presentationId;
    }

    /**
     * Appends a new blank slide and fills in title + content + optional image.
     *
     * This method is now named exactly as your controller expects:
     *   ->createSlideFromAnnouncement(Announcement $announcement)
     *
     * @param Announcement $announcement
     */
    public function createSlideFromAnnouncement(Announcement $announcement): void
    {
        // Extract title, content, and image path (if any) from the Announcement entity:
        $title     = $announcement->getTitle();
        $bodyText  = $announcement->getContent();
        $imagePath = $announcement->getImagePath(); // this is just the filename, not a full URL

        // If there's an imagePath, build a publicly‐accessible URL:
        // (Adjust the host/port if needed; this assumes your Symfony app is serving files from /uploads/announcements)
        $publicImageUrl = null;
        if ($imagePath !== null) {
            $host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
            $publicImageUrl = sprintf(
                'https://%s/uploads/announcements/%s',
                $host,
                $imagePath
            );
        }

        //
        // 1) First, create a brand-new blank slide at the end of the deck:
        //
        $createSlideReq = new Google_Service_Slides_CreateSlideRequest([
            // leave objectId blank → Google will auto-assign one
            'insertionIndex' => null, // null means “append at end”
            'slideLayoutReference' => [
                'predefinedLayout' => 'BLANK'
            ],
        ]);

        $batchReq = new Google_Service_Slides_Request([
            'createSlide' => $createSlideReq
        ]);

        // Execute the batchUpdate to actually create the slide:
        $batchUpdateRequest = new \Google_Service_Slides_BatchUpdatePresentationRequest([
            'requests' => [ $batchReq ]
        ]);

        $response = $this->slides
            ->presentations
            ->batchUpdate($this->presentationId, $batchUpdateRequest);

        // The slideId of the newly created slide is in the response:
        $replies    = $response->getReplies();
        $newSlideId = $replies[0]->getCreateSlide()->getObjectId();

        //
        // 2) Next, insert the title text box into that slide:
        //
        $titleShapeId = 'title_' . uniqid();
        $bodyShapeId  = 'body_'  . uniqid();

        $requests = [];

        // → Create a shape for the title
        $requests[] = new Google_Service_Slides_Request([
            'createShape' => [
                'objectId'    => $titleShapeId,
                'shapeType'   => 'TEXT_BOX',
                'elementProperties' => [
                    'pageObjectId' => $newSlideId,
                    'size' => [
                        'height' => ['magnitude' => 80.0, 'unit' => 'PT'],
                        'width'  => ['magnitude' => 720.0, 'unit' => 'PT'],
                    ],
                    'transform' => [
                        // position near top‐left
                        'scaleX'     => 1,
                        'scaleY'     => 1,
                        'translateX' => 50.0,
                        'translateY' => 30.0,
                        'unit'       => 'PT',
                    ]
                ]
            ]
        ]);

        // → Insert title text
        $requests[] = new Google_Service_Slides_Request([
            'insertText' => [
                'objectId'    => $titleShapeId,
                'insertionIndex' => 0,
                'text'        => $title,
            ]
        ]);

        //
        // 3) Insert the body text box (if non‐empty)
        //
        if ($bodyText !== null && trim($bodyText) !== '') {
            $requests[] = new Google_Service_Slides_Request([
                'createShape' => [
                    'objectId'    => $bodyShapeId,
                    'shapeType'   => 'TEXT_BOX',
                    'elementProperties' => [
                        'pageObjectId' => $newSlideId,
                        'size' => [
                            'height' => ['magnitude' => 300.0, 'unit' => 'PT'],
                            'width'  => ['magnitude' => 720.0, 'unit' => 'PT'],
                        ],
                        'transform' => [
                            // position a bit lower than title
                            'scaleX'     => 1,
                            'scaleY'     => 1,
                            'translateX' => 50.0,
                            'translateY' => 120.0,
                            'unit'       => 'PT',
                        ]
                    ]
                ]
            ]);

            // → Insert the body text
            $requests[] = new Google_Service_Slides_Request([
                'insertText' => [
                    'objectId'    => $bodyShapeId,
                    'insertionIndex' => 0,
                    'text'        => $bodyText,
                ]
            ]);
        }

        //
        // 4) Insert the image (if one exists)
        //
        if ($publicImageUrl !== null) {
            $imageObjectId = 'img_' . uniqid();
            $requests[] = new Google_Service_Slides_Request([
                'createImage' => [
                    'objectId'         => $imageObjectId,
                    'url'              => $publicImageUrl,
                    'elementProperties' => [
                        'pageObjectId' => $newSlideId,
                        'size' => [
                            'height' => ['magnitude' => 200.0, 'unit' => 'PT'],
                            'width'  => ['magnitude' => 200.0, 'unit' => 'PT'],
                        ],
                        'transform' => [
                            // position bottom‐right-ish
                            'scaleX'     => 1,
                            'scaleY'     => 1,
                            'translateX' => 450.0,
                            'translateY' => 300.0,
                            'unit'       => 'PT',
                        ]
                    ]
                ]
            ]);
        }

        //
        // 5) Finally, send the remaining batchUpdate (title/body/image)
        //
        if (!empty($requests)) {
            $batchUpdateRequest = new \Google_Service_Slides_BatchUpdatePresentationRequest([
                'requests' => $requests
            ]);

            $this->slides
                ->presentations
                ->batchUpdate($this->presentationId, $batchUpdateRequest);
        }
    }

    /**
     * If you ever need an “update” function, you can simply call
     * createSlideFromAnnouncement() again (it will append another slide).
     */
    public function updateSlideForAnnouncement(Announcement $announcement): void
    {
        $this->createSlideFromAnnouncement($announcement);
    }
}
