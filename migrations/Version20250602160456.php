<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250602160456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log DROP FOREIGN KEY FK_5C959A21A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_5C959A21A76ED395 ON document_log
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log CHANGE user_id performed_by_id INT NOT NULL, CHANGE timestamp logged_at DATETIME NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log ADD CONSTRAINT FK_5C959A212E65C292 FOREIGN KEY (performed_by_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5C959A212E65C292 ON document_log (performed_by_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log DROP FOREIGN KEY FK_5C959A212E65C292
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_5C959A212E65C292 ON document_log
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log CHANGE performed_by_id user_id INT NOT NULL, CHANGE logged_at timestamp DATETIME NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log ADD CONSTRAINT FK_5C959A21A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5C959A21A76ED395 ON document_log (user_id)
        SQL);
    }
}
