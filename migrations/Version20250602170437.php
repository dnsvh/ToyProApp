<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250602170437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE calendar_entry (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, date DATE NOT NULL, clock_in TIME DEFAULT NULL, clock_out TIME DEFAULT NULL, hours_worked DOUBLE PRECISION DEFAULT NULL, comment VARCHAR(255) DEFAULT NULL, INDEX IDX_47759E1EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE calendar_entry_calendar_tag (calendar_entry_id INT NOT NULL, calendar_tag_id INT NOT NULL, INDEX IDX_9FAFAE99BF54692A (calendar_entry_id), INDEX IDX_9FAFAE9910B47B4D (calendar_tag_id), PRIMARY KEY(calendar_entry_id, calendar_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE calendar_tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry ADD CONSTRAINT FK_47759E1EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag ADD CONSTRAINT FK_9FAFAE99BF54692A FOREIGN KEY (calendar_entry_id) REFERENCES calendar_entry (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag ADD CONSTRAINT FK_9FAFAE9910B47B4D FOREIGN KEY (calendar_tag_id) REFERENCES calendar_tag (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry DROP FOREIGN KEY FK_47759E1EA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag DROP FOREIGN KEY FK_9FAFAE99BF54692A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag DROP FOREIGN KEY FK_9FAFAE9910B47B4D
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE calendar_entry
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE calendar_entry_calendar_tag
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE calendar_tag
        SQL);
    }
}
