<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250602152929 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Make uploaded_by_id nullable and add FK with ON DELETE SET NULL';
    }

    public function up(Schema $schema): void
    {
        // 1) Add a new nullable column `uploaded_by_id`
        $this->addSql(<<<'SQL'
            ALTER TABLE `document`
            ADD `uploaded_by_id` INT DEFAULT NULL
        SQL);

        // 2) Create an index on that column
        $this->addSql(<<<'SQL'
            CREATE INDEX `IDX_D8698A76A2B28FE8` ON `document` (`uploaded_by_id`)
        SQL);

        // 3) Add the foreign-key constraint, allowing ON DELETE SET NULL
        $this->addSql(<<<'SQL'
            ALTER TABLE `document`
            ADD CONSTRAINT `FK_D8698A76A2B28FE8`
            FOREIGN KEY (`uploaded_by_id`) REFERENCES `user` (`id`)
            ON DELETE SET NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // 1) Drop the foreign‐key constraint
        $this->addSql(<<<'SQL'
            ALTER TABLE `document`
            DROP FOREIGN KEY `FK_D8698A76A2B28FE8`
        SQL);

        // 2) Drop the index
        $this->addSql(<<<'SQL'
            DROP INDEX `IDX_D8698A76A2B28FE8` ON `document`
        SQL);

        // 3) Drop the `uploaded_by_id` column
        $this->addSql(<<<'SQL'
            ALTER TABLE `document`
            DROP COLUMN `uploaded_by_id`
        SQL);
    }
}
