<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250602182340 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE calendar_entry_tags (calendar_entry_id INT NOT NULL, calendar_tag_id INT NOT NULL, INDEX IDX_5DD42830BF54692A (calendar_entry_id), INDEX IDX_5DD4283010B47B4D (calendar_tag_id), PRIMARY KEY(calendar_entry_id, calendar_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_tags ADD CONSTRAINT FK_5DD42830BF54692A FOREIGN KEY (calendar_entry_id) REFERENCES calendar_entry (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_tags ADD CONSTRAINT FK_5DD4283010B47B4D FOREIGN KEY (calendar_tag_id) REFERENCES calendar_tag (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag DROP FOREIGN KEY FK_9FAFAE9910B47B4D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag DROP FOREIGN KEY FK_9FAFAE99BF54692A
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE calendar_entry_calendar_tag
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry CHANGE comment comment LONGTEXT DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE calendar_entry_calendar_tag (calendar_entry_id INT NOT NULL, calendar_tag_id INT NOT NULL, INDEX IDX_9FAFAE99BF54692A (calendar_entry_id), INDEX IDX_9FAFAE9910B47B4D (calendar_tag_id), PRIMARY KEY(calendar_entry_id, calendar_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag ADD CONSTRAINT FK_9FAFAE9910B47B4D FOREIGN KEY (calendar_tag_id) REFERENCES calendar_tag (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_calendar_tag ADD CONSTRAINT FK_9FAFAE99BF54692A FOREIGN KEY (calendar_entry_id) REFERENCES calendar_entry (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_tags DROP FOREIGN KEY FK_5DD42830BF54692A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry_tags DROP FOREIGN KEY FK_5DD4283010B47B4D
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE calendar_entry_tags
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE calendar_entry CHANGE comment comment VARCHAR(255) DEFAULT NULL
        SQL);
    }
}
