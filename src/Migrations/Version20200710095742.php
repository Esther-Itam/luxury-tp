<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200710095742 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE job_offer (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(255) NOT NULL, client VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, is_activated TINYINT(1) DEFAULT NULL, notes_job VARCHAR(255) DEFAULT NULL, title_job VARCHAR(255) NOT NULL, job_type VARCHAR(255) NOT NULL, location_job VARCHAR(255) DEFAULT NULL, category_job VARCHAR(255) NOT NULL, closing_at DATETIME DEFAULT NULL, salary INT DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, gender VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, passport TINYINT(1) DEFAULT NULL, passport_file VARCHAR(255) DEFAULT NULL, cv_file VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, current_location VARCHAR(255) DEFAULT NULL, date_birth VARCHAR(255) DEFAULT NULL, place_birth VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, availability TINYINT(1) DEFAULT NULL, job_sector VARCHAR(255) DEFAULT NULL, experience VARCHAR(255) DEFAULT NULL, short_description VARCHAR(255) DEFAULT NULL, notes VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, files VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_type (id INT AUTO_INCREMENT NOT NULL, time_job VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_category (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name_society VARCHAR(255) NOT NULL, activity VARCHAR(255) NOT NULL, name_customer VARCHAR(255) NOT NULL, job_customer VARCHAR(255) NOT NULL, phone_customer INT NOT NULL, email_customer VARCHAR(255) NOT NULL, notes VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE job_offer');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE job_type');
        $this->addSql('DROP TABLE job_category');
        $this->addSql('DROP TABLE client');
    }
}
