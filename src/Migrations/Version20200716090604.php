<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200716090604 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE job_offer CHANGE type_job_id type_job_id INT DEFAULT NULL, CHANGE job_offer_id job_offer_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL, CHANGE is_activated is_activated TINYINT(1) DEFAULT NULL, CHANGE notes_job notes_job VARCHAR(255) DEFAULT NULL, CHANGE location_job location_job VARCHAR(255) DEFAULT NULL, CHANGE closing_at closing_at DATETIME DEFAULT NULL, CHANGE salary salary INT DEFAULT NULL');
        $this->addSql('ALTER TABLE candidate DROP is_verified, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate ADD is_verified TINYINT(1) NOT NULL, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE job_offer CHANGE type_job_id type_job_id INT DEFAULT NULL, CHANGE job_offer_id job_offer_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL, CHANGE is_activated is_activated TINYINT(1) DEFAULT \'NULL\', CHANGE notes_job notes_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE location_job location_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE closing_at closing_at DATETIME DEFAULT \'NULL\', CHANGE salary salary INT DEFAULT NULL');
    }
}
