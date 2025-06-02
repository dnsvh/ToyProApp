<?php

namespace App\Tests\Controller;

use App\Entity\Announcement;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class AnnouncementControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $announcementRepository;
    private string $path = '/announcement/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->announcementRepository = $this->manager->getRepository(Announcement::class);

        foreach ($this->announcementRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Announcement index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'announcement[title]' => 'Testing',
            'announcement[content]' => 'Testing',
            'announcement[imagePath]' => 'Testing',
            'announcement[infoboard]' => 'Testing',
            'announcement[commentsEnabled]' => 'Testing',
            'announcement[visible]' => 'Testing',
            'announcement[createdAt]' => 'Testing',
            'announcement[sender]' => 'Testing',
            'announcement[targetRoles]' => 'Testing',
            'announcement[targetTags]' => 'Testing',
            'announcement[targetUsers]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->announcementRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Announcement();
        $fixture->setTitle('My Title');
        $fixture->setContent('My Title');
        $fixture->setImagePath('My Title');
        $fixture->setInfoboard('My Title');
        $fixture->setCommentsEnabled('My Title');
        $fixture->setVisible('My Title');
        $fixture->setCreatedAt('My Title');
        $fixture->setSender('My Title');
        $fixture->setTargetRoles('My Title');
        $fixture->setTargetTags('My Title');
        $fixture->setTargetUsers('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Announcement');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Announcement();
        $fixture->setTitle('Value');
        $fixture->setContent('Value');
        $fixture->setImagePath('Value');
        $fixture->setInfoboard('Value');
        $fixture->setCommentsEnabled('Value');
        $fixture->setVisible('Value');
        $fixture->setCreatedAt('Value');
        $fixture->setSender('Value');
        $fixture->setTargetRoles('Value');
        $fixture->setTargetTags('Value');
        $fixture->setTargetUsers('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'announcement[title]' => 'Something New',
            'announcement[content]' => 'Something New',
            'announcement[imagePath]' => 'Something New',
            'announcement[infoboard]' => 'Something New',
            'announcement[commentsEnabled]' => 'Something New',
            'announcement[visible]' => 'Something New',
            'announcement[createdAt]' => 'Something New',
            'announcement[sender]' => 'Something New',
            'announcement[targetRoles]' => 'Something New',
            'announcement[targetTags]' => 'Something New',
            'announcement[targetUsers]' => 'Something New',
        ]);

        self::assertResponseRedirects('/announcement/');

        $fixture = $this->announcementRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitle());
        self::assertSame('Something New', $fixture[0]->getContent());
        self::assertSame('Something New', $fixture[0]->getImagePath());
        self::assertSame('Something New', $fixture[0]->getInfoboard());
        self::assertSame('Something New', $fixture[0]->getCommentsEnabled());
        self::assertSame('Something New', $fixture[0]->getVisible());
        self::assertSame('Something New', $fixture[0]->getCreatedAt());
        self::assertSame('Something New', $fixture[0]->getSender());
        self::assertSame('Something New', $fixture[0]->getTargetRoles());
        self::assertSame('Something New', $fixture[0]->getTargetTags());
        self::assertSame('Something New', $fixture[0]->getTargetUsers());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Announcement();
        $fixture->setTitle('Value');
        $fixture->setContent('Value');
        $fixture->setImagePath('Value');
        $fixture->setInfoboard('Value');
        $fixture->setCommentsEnabled('Value');
        $fixture->setVisible('Value');
        $fixture->setCreatedAt('Value');
        $fixture->setSender('Value');
        $fixture->setTargetRoles('Value');
        $fixture->setTargetTags('Value');
        $fixture->setTargetUsers('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/announcement/');
        self::assertSame(0, $this->announcementRepository->count([]));
    }
}
