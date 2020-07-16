<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200716101840 extends AbstractMigration
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
        $this->addSql('ALTER TABLE candidate ADD gender VARCHAR(255) DEFAULT NULL, ADD first_name VARCHAR(255) DEFAULT NULL, ADD last_name VARCHAR(255) DEFAULT NULL, ADD address VARCHAR(255) DEFAULT NULL, ADD country VARCHAR(255) DEFAULT NULL, ADD nationality VARCHAR(255) DEFAULT NULL, ADD passport TINYINT(1) DEFAULT NULL, ADD passport_file VARCHAR(255) DEFAULT NULL, ADD cv_file VARCHAR(255) DEFAULT NULL, ADD profil_picture VARCHAR(255) DEFAULT NULL, ADD current_location VARCHAR(255) DEFAULT NULL, ADD date_birth DATE DEFAULT NULL, ADD place_birth VARCHAR(255) DEFAULT NULL, ADD availability TINYINT(1) DEFAULT NULL, ADD job_category VARCHAR(255) DEFAULT NULL, ADD experience VARCHAR(255) DEFAULT NULL, ADD short_description VARCHAR(255) DEFAULT NULL, ADD notes_candidate VARCHAR(255) DEFAULT NULL, ADD created_at DATETIME DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL, ADD deleted_at DATETIME DEFAULT NULL, ADD files VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate DROP gender, DROP first_name, DROP last_name, DROP address, DROP country, DROP nationality, DROP passport, DROP passport_file, DROP cv_file, DROP profil_picture, DROP current_location, DROP date_birth, DROP place_birth, DROP availability, DROP job_category, DROP experience, DROP short_description, DROP notes_candidate, DROP created_at, DROP updated_at, DROP deleted_at, DROP files, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE job_offer CHANGE type_job_id type_job_id INT DEFAULT NULL, CHANGE job_offer_id job_offer_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL, CHANGE is_activated is_activated TINYINT(1) DEFAULT \'NULL\', CHANGE notes_job notes_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE location_job location_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE closing_at closing_at DATETIME DEFAULT \'NULL\', CHANGE salary salary INT DEFAULT NULL');
    }
}
