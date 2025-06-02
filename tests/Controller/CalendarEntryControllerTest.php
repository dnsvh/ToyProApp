<?php

namespace App\Tests\Controller;

use App\Entity\CalendarEntry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class CalendarEntryControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $calendarEntryRepository;
    private string $path = '/calendar/entry/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->calendarEntryRepository = $this->manager->getRepository(CalendarEntry::class);

        foreach ($this->calendarEntryRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('CalendarEntry index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'calendar_entry[date]' => 'Testing',
            'calendar_entry[clockIn]' => 'Testing',
            'calendar_entry[clockOut]' => 'Testing',
            'calendar_entry[hoursWorked]' => 'Testing',
            'calendar_entry[comment]' => 'Testing',
            'calendar_entry[user]' => 'Testing',
            'calendar_entry[tags]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->calendarEntryRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new CalendarEntry();
        $fixture->setDate('My Title');
        $fixture->setClockIn('My Title');
        $fixture->setClockOut('My Title');
        $fixture->setHoursWorked('My Title');
        $fixture->setComment('My Title');
        $fixture->setUser('My Title');
        $fixture->setTags('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('CalendarEntry');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new CalendarEntry();
        $fixture->setDate('Value');
        $fixture->setClockIn('Value');
        $fixture->setClockOut('Value');
        $fixture->setHoursWorked('Value');
        $fixture->setComment('Value');
        $fixture->setUser('Value');
        $fixture->setTags('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'calendar_entry[date]' => 'Something New',
            'calendar_entry[clockIn]' => 'Something New',
            'calendar_entry[clockOut]' => 'Something New',
            'calendar_entry[hoursWorked]' => 'Something New',
            'calendar_entry[comment]' => 'Something New',
            'calendar_entry[user]' => 'Something New',
            'calendar_entry[tags]' => 'Something New',
        ]);

        self::assertResponseRedirects('/calendar/entry/');

        $fixture = $this->calendarEntryRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getDate());
        self::assertSame('Something New', $fixture[0]->getClockIn());
        self::assertSame('Something New', $fixture[0]->getClockOut());
        self::assertSame('Something New', $fixture[0]->getHoursWorked());
        self::assertSame('Something New', $fixture[0]->getComment());
        self::assertSame('Something New', $fixture[0]->getUser());
        self::assertSame('Something New', $fixture[0]->getTags());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new CalendarEntry();
        $fixture->setDate('Value');
        $fixture->setClockIn('Value');
        $fixture->setClockOut('Value');
        $fixture->setHoursWorked('Value');
        $fixture->setComment('Value');
        $fixture->setUser('Value');
        $fixture->setTags('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/calendar/entry/');
        self::assertSame(0, $this->calendarEntryRepository->count([]));
    }
}
