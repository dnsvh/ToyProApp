<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250530132330 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE announcement (id INT AUTO_INCREMENT NOT NULL, sender_id INT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, image_path VARCHAR(255) DEFAULT NULL, infoboard TINYINT(1) NOT NULL, comments_enabled TINYINT(1) NOT NULL, visible TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_4DB9D91CF624B39D (sender_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE announcement_role (announcement_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_7B588236913AEA17 (announcement_id), INDEX IDX_7B588236D60322AC (role_id), PRIMARY KEY(announcement_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE announcement_user_tag (announcement_id INT NOT NULL, user_tag_id INT NOT NULL, INDEX IDX_93D25CFB913AEA17 (announcement_id), INDEX IDX_93D25CFBDF80782C (user_tag_id), PRIMARY KEY(announcement_id, user_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE announcement_user (announcement_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_A1A2DE15913AEA17 (announcement_id), INDEX IDX_A1A2DE15A76ED395 (user_id), PRIMARY KEY(announcement_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement ADD CONSTRAINT FK_4DB9D91CF624B39D FOREIGN KEY (sender_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_role ADD CONSTRAINT FK_7B588236913AEA17 FOREIGN KEY (announcement_id) REFERENCES announcement (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_role ADD CONSTRAINT FK_7B588236D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user_tag ADD CONSTRAINT FK_93D25CFB913AEA17 FOREIGN KEY (announcement_id) REFERENCES announcement (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user_tag ADD CONSTRAINT FK_93D25CFBDF80782C FOREIGN KEY (user_tag_id) REFERENCES user_tag (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user ADD CONSTRAINT FK_A1A2DE15913AEA17 FOREIGN KEY (announcement_id) REFERENCES announcement (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user ADD CONSTRAINT FK_A1A2DE15A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement DROP FOREIGN KEY FK_4DB9D91CF624B39D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_role DROP FOREIGN KEY FK_7B588236913AEA17
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_role DROP FOREIGN KEY FK_7B588236D60322AC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user_tag DROP FOREIGN KEY FK_93D25CFB913AEA17
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user_tag DROP FOREIGN KEY FK_93D25CFBDF80782C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user DROP FOREIGN KEY FK_A1A2DE15913AEA17
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE announcement_user DROP FOREIGN KEY FK_A1A2DE15A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE announcement
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE announcement_role
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE announcement_user_tag
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE announcement_user
        SQL);
    }
}
