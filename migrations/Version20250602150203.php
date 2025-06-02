<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250602150203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, filename VARCHAR(255) NOT NULL, upload_date DATETIME NOT NULL, public TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE document_target_roles (document_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_A77094BAC33F7837 (document_id), INDEX IDX_A77094BAD60322AC (role_id), PRIMARY KEY(document_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE document_target_tags (document_id INT NOT NULL, user_tag_id INT NOT NULL, INDEX IDX_200DB5FDC33F7837 (document_id), INDEX IDX_200DB5FDDF80782C (user_tag_id), PRIMARY KEY(document_id, user_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE document_target_users (document_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5CD1F94C33F7837 (document_id), INDEX IDX_5CD1F94A76ED395 (user_id), PRIMARY KEY(document_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE document_log (id INT AUTO_INCREMENT NOT NULL, document_id INT NOT NULL, user_id INT NOT NULL, action VARCHAR(50) NOT NULL, timestamp DATETIME NOT NULL, INDEX IDX_5C959A21C33F7837 (document_id), INDEX IDX_5C959A21A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_roles ADD CONSTRAINT FK_A77094BAC33F7837 FOREIGN KEY (document_id) REFERENCES document (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_roles ADD CONSTRAINT FK_A77094BAD60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_tags ADD CONSTRAINT FK_200DB5FDC33F7837 FOREIGN KEY (document_id) REFERENCES document (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_tags ADD CONSTRAINT FK_200DB5FDDF80782C FOREIGN KEY (user_tag_id) REFERENCES user_tag (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_users ADD CONSTRAINT FK_5CD1F94C33F7837 FOREIGN KEY (document_id) REFERENCES document (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_users ADD CONSTRAINT FK_5CD1F94A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log ADD CONSTRAINT FK_5C959A21C33F7837 FOREIGN KEY (document_id) REFERENCES document (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log ADD CONSTRAINT FK_5C959A21A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_roles DROP FOREIGN KEY FK_A77094BAC33F7837
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_roles DROP FOREIGN KEY FK_A77094BAD60322AC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_tags DROP FOREIGN KEY FK_200DB5FDC33F7837
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_tags DROP FOREIGN KEY FK_200DB5FDDF80782C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_users DROP FOREIGN KEY FK_5CD1F94C33F7837
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_target_users DROP FOREIGN KEY FK_5CD1F94A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log DROP FOREIGN KEY FK_5C959A21C33F7837
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE document_log DROP FOREIGN KEY FK_5C959A21A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE document
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE document_target_roles
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE document_target_tags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE document_target_users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE document_log
        SQL);
    }
}
