<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200710133019 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE job_offer ADD type_job_id INT DEFAULT NULL, ADD job_offer_id INT DEFAULT NULL, ADD category_id INT DEFAULT NULL, CHANGE is_activated is_activated TINYINT(1) DEFAULT NULL, CHANGE notes_job notes_job VARCHAR(255) DEFAULT NULL, CHANGE location_job location_job VARCHAR(255) DEFAULT NULL, CHANGE closing_at closing_at DATETIME DEFAULT NULL, CHANGE salary salary INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E28372591 FOREIGN KEY (type_job_id) REFERENCES job_type (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E3481D195 FOREIGN KEY (job_offer_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E12469DE2 FOREIGN KEY (category_id) REFERENCES job_category (id)');
        $this->addSql('CREATE INDEX IDX_288A3A4E28372591 ON job_offer (type_job_id)');
        $this->addSql('CREATE INDEX IDX_288A3A4E3481D195 ON job_offer (job_offer_id)');
        $this->addSql('CREATE INDEX IDX_288A3A4E12469DE2 ON job_offer (category_id)');
        $this->addSql('ALTER TABLE candidate CHANGE job_category_id job_category_id INT DEFAULT NULL, CHANGE passport passport TINYINT(1) DEFAULT NULL, CHANGE passport_file passport_file VARCHAR(255) DEFAULT NULL, CHANGE cv_file cv_file VARCHAR(255) DEFAULT NULL, CHANGE picture picture VARCHAR(255) DEFAULT NULL, CHANGE current_location current_location VARCHAR(255) DEFAULT NULL, CHANGE date_birth date_birth VARCHAR(255) DEFAULT NULL, CHANGE place_birth place_birth VARCHAR(255) DEFAULT NULL, CHANGE availability availability TINYINT(1) DEFAULT NULL, CHANGE job_sector job_sector VARCHAR(255) DEFAULT NULL, CHANGE experience experience VARCHAR(255) DEFAULT NULL, CHANGE short_description short_description VARCHAR(255) DEFAULT NULL, CHANGE notes notes VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE deleted_at deleted_at DATETIME DEFAULT NULL, CHANGE files files VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate CHANGE job_category_id job_category_id INT DEFAULT NULL, CHANGE passport passport TINYINT(1) DEFAULT \'NULL\', CHANGE passport_file passport_file VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE cv_file cv_file VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE picture picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE current_location current_location VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_birth date_birth VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE place_birth place_birth VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE availability availability TINYINT(1) DEFAULT \'NULL\', CHANGE job_sector job_sector VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE experience experience VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE short_description short_description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE notes notes VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE deleted_at deleted_at DATETIME DEFAULT \'NULL\', CHANGE files files VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E28372591');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E3481D195');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E12469DE2');
        $this->addSql('DROP INDEX IDX_288A3A4E28372591 ON job_offer');
        $this->addSql('DROP INDEX IDX_288A3A4E3481D195 ON job_offer');
        $this->addSql('DROP INDEX IDX_288A3A4E12469DE2 ON job_offer');
        $this->addSql('ALTER TABLE job_offer DROP type_job_id, DROP job_offer_id, DROP category_id, CHANGE is_activated is_activated TINYINT(1) DEFAULT \'NULL\', CHANGE notes_job notes_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE location_job location_job VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE closing_at closing_at DATETIME DEFAULT \'NULL\', CHANGE salary salary INT DEFAULT NULL');
    }
}
