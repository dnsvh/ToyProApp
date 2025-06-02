<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250530130608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE user_user_tag (user_id INT NOT NULL, user_tag_id INT NOT NULL, INDEX IDX_8123208A76ED395 (user_id), INDEX IDX_8123208DF80782C (user_tag_id), PRIMARY KEY(user_id, user_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user_tag ADD CONSTRAINT FK_8123208A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user_tag ADD CONSTRAINT FK_8123208DF80782C FOREIGN KEY (user_tag_id) REFERENCES user_tag (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user_tag DROP FOREIGN KEY FK_8123208A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user_tag DROP FOREIGN KEY FK_8123208DF80782C
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_user_tag
        SQL);
    }
}
