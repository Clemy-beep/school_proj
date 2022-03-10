<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309125743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE body (id INT AUTO_INCREMENT NOT NULL, weight INT NOT NULL, color VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bus (id INT AUTO_INCREMENT NOT NULL, body_id INT NOT NULL, plate_num INT NOT NULL, service_date DATE NOT NULL, weight INT NOT NULL, UNIQUE INDEX UNIQ_2F566B699B621D84 (body_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE child (id INT AUTO_INCREMENT NOT NULL, guardian_id INT NOT NULL, route_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(100) NOT NULL, lastname VARCHAR(100) NOT NULL, age INT NOT NULL, gender INT NOT NULL, UNIQUE INDEX UNIQ_22B35429E7927C74 (email), INDEX IDX_22B3542911CC8B0A (guardian_id), INDEX IDX_22B3542934ECB4E6 (route_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE driver (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(100) NOT NULL, lastname VARCHAR(100) NOT NULL, age INT NOT NULL, gender INT NOT NULL, driving_licence INT NOT NULL, UNIQUE INDEX UNIQ_11667CD9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE guardian (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(100) NOT NULL, lastname VARCHAR(100) NOT NULL, age INT NOT NULL, gender INT NOT NULL, phone INT NOT NULL, UNIQUE INDEX UNIQ_64486055E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE route (id INT AUTO_INCREMENT NOT NULL, bus_id INT NOT NULL, driver_id INT NOT NULL, route_date_time DATETIME NOT NULL, UNIQUE INDEX UNIQ_2C420792546731D (bus_id), UNIQUE INDEX UNIQ_2C42079C3423909 (driver_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seat (id INT AUTO_INCREMENT NOT NULL, bus_id INT NOT NULL, color VARCHAR(50) NOT NULL, INDEX IDX_3D5C36662546731D (bus_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wheel (id INT AUTO_INCREMENT NOT NULL, bus_id INT NOT NULL, pressure INT NOT NULL, diameter INT NOT NULL, INDEX IDX_61D0AF742546731D (bus_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `window` (id INT AUTO_INCREMENT NOT NULL, bus_id INT NOT NULL, weight INT NOT NULL, thickness INT NOT NULL, INDEX IDX_8BE4F9DD2546731D (bus_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bus ADD CONSTRAINT FK_2F566B699B621D84 FOREIGN KEY (body_id) REFERENCES body (id)');
        $this->addSql('ALTER TABLE child ADD CONSTRAINT FK_22B3542911CC8B0A FOREIGN KEY (guardian_id) REFERENCES guardian (id)');
        $this->addSql('ALTER TABLE child ADD CONSTRAINT FK_22B3542934ECB4E6 FOREIGN KEY (route_id) REFERENCES route (id)');
        $this->addSql('ALTER TABLE route ADD CONSTRAINT FK_2C420792546731D FOREIGN KEY (bus_id) REFERENCES bus (id)');
        $this->addSql('ALTER TABLE route ADD CONSTRAINT FK_2C42079C3423909 FOREIGN KEY (driver_id) REFERENCES driver (id)');
        $this->addSql('ALTER TABLE seat ADD CONSTRAINT FK_3D5C36662546731D FOREIGN KEY (bus_id) REFERENCES bus (id)');
        $this->addSql('ALTER TABLE wheel ADD CONSTRAINT FK_61D0AF742546731D FOREIGN KEY (bus_id) REFERENCES bus (id)');
        $this->addSql('ALTER TABLE `window` ADD CONSTRAINT FK_8BE4F9DD2546731D FOREIGN KEY (bus_id) REFERENCES bus (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bus DROP FOREIGN KEY FK_2F566B699B621D84');
        $this->addSql('ALTER TABLE route DROP FOREIGN KEY FK_2C420792546731D');
        $this->addSql('ALTER TABLE seat DROP FOREIGN KEY FK_3D5C36662546731D');
        $this->addSql('ALTER TABLE wheel DROP FOREIGN KEY FK_61D0AF742546731D');
        $this->addSql('ALTER TABLE `window` DROP FOREIGN KEY FK_8BE4F9DD2546731D');
        $this->addSql('ALTER TABLE route DROP FOREIGN KEY FK_2C42079C3423909');
        $this->addSql('ALTER TABLE child DROP FOREIGN KEY FK_22B3542911CC8B0A');
        $this->addSql('ALTER TABLE child DROP FOREIGN KEY FK_22B3542934ECB4E6');
        $this->addSql('DROP TABLE body');
        $this->addSql('DROP TABLE bus');
        $this->addSql('DROP TABLE child');
        $this->addSql('DROP TABLE driver');
        $this->addSql('DROP TABLE guardian');
        $this->addSql('DROP TABLE route');
        $this->addSql('DROP TABLE seat');
        $this->addSql('DROP TABLE wheel');
        $this->addSql('DROP TABLE `window`');
    }
}
