<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218232836 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment ADD start_at DATETIME NOT NULL, DROP id_patient, DROP id_doctor, DROP nom_patient, DROP email, DROP date, DROP heure, DROP type_consultation, DROP statut, CHANGE planning_id planning_id INT NOT NULL');
        $this->addSql('ALTER TABLE planning ADD doctor_id INT NOT NULL, ADD date DATE NOT NULL, ADD start_time TIME NOT NULL, ADD end_time TIME NOT NULL, DROP id_doctor, DROP jour, DROP heure_debut, DROP heure_fin, DROP places_disponibles, DROP rendezvous_pris, DROP places_restantes');
        $this->addSql('ALTER TABLE planning ADD CONSTRAINT FK_D499BFF687F4FB17 FOREIGN KEY (doctor_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D499BFF687F4FB17 ON planning (doctor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment ADD id_patient INT NOT NULL, ADD id_doctor INT NOT NULL, ADD nom_patient VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD date DATE NOT NULL, ADD heure VARCHAR(5) NOT NULL, ADD type_consultation VARCHAR(255) NOT NULL, ADD statut VARCHAR(255) NOT NULL, DROP start_at, CHANGE planning_id planning_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE planning DROP FOREIGN KEY FK_D499BFF687F4FB17');
        $this->addSql('DROP INDEX IDX_D499BFF687F4FB17 ON planning');
        $this->addSql('ALTER TABLE planning ADD jour VARCHAR(255) NOT NULL, ADD heure_debut TIME NOT NULL, ADD heure_fin TIME NOT NULL, ADD places_disponibles INT NOT NULL, ADD rendezvous_pris INT NOT NULL, ADD places_restantes INT NOT NULL, DROP date, DROP start_time, DROP end_time, CHANGE doctor_id id_doctor INT NOT NULL');
    }
}
