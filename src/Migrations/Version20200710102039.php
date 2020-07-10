<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200710102039 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE job_offer CHANGE is_activated is_activated TINYINT(1) DEFAULT NULL, CHANGE notes_job notes_job VARCHAR(255) DEFAULT NULL, CHANGE location_job location_job VARCHAR(255) DEFAULT NULL, CHANGE closing_at closing_at DATETIME DEFAULT NULL, CHANGE salary salary INT DEFAULT NULL');
        $this->addSql('ALTER TABLE candidate CHANGE passport passport TINYINT(1) DEFAULT NULL, CHANGE passport_file passport_file VARCHAR(255) DEFAULT NULL, CHANGE cv_file cv_file VARCHAR(255) DEFAULT NULL, CHANGE picture picture VARCHAR(255) DEFAULT NULL, CHANGE current_location current_location VARCHAR(255) DEFAULT NULL, CHANGE date_birth date_birth VARCHAR(255) DEFAULT NULL, CHANGE place_birth place_birth VARCHAR(255) DEFAULT NULL, CHANGE availability availability TINYINT(1) DEFAULT NULL, CHANGE job_sector job_sector VARCHAR(255) DEFAULT NULL, CHANGE experience experience VARCHAR(255) DEFAULT NULL, CHANGE short_description short_description VARCHAR(255) DEFAULT NULL, CHANGE notes notes VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE deleted_at deleted_at DATETIME DEFAULT NULL, CHANGE files files VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE job_category ADD candidate_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job_category ADD CONSTRAINT FK_610BBCBA91BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('CREATE INDEX IDX_610BBCBA91BD8781 ON job_category (candidate_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate CHANGE passport passport TINYINT(1) DEFAULT \'NULL\', CHANGE passport_file passport_file VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE cv_file cv_file VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE picture picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE current_location current_location VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_birth date_birth VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE place_birth place_birth VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE availability availability TINYINT(1) DEFAULT \'NULL\', CHANGE job_sector job_sector VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE experience experience VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE short_description short_description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE notes notes VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE deleted_at deleted_at DATETIME DEFAULT \'NULL\', CHANGE files files VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE job_category DROP FOREIGN KEY FK_610BBCBA91BD8781');
        $this->addSql('DROP INDEX IDX_610BBCBA91BD8781 ON job_category');
        $this->addSql('ALTER TABLE job_category DROP candidate_id');
        $this->addSql('ALTER TABLE job_offer CHANGE is_activated is_activated TINYINT(1) DEFAULT \'NULL\', CHANGE notes_job notes_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE location_job location_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE closing_at closing_at DATETIME DEFAULT \'NULL\', CHANGE salary salary INT DEFAULT NULL');
    }
}
