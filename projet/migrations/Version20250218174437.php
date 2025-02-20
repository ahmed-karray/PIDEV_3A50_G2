<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218174437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, planning_id INT DEFAULT NULL, id_patient INT NOT NULL, id_doctor INT NOT NULL, nom_patient VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date DATE NOT NULL, heure VARCHAR(5) NOT NULL, type_consultation VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_FE38F8443D865311 (planning_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, id_doctor INT NOT NULL, jour VARCHAR(255) NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, places_disponibles INT NOT NULL, rendezvous_pris INT NOT NULL, places_restantes INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F8443D865311 FOREIGN KEY (planning_id) REFERENCES planning (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F8443D865311');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE planning');
    }
}
