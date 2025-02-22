<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218194244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, dosage INT NOT NULL, categorie VARCHAR(255) NOT NULL, quantite INT NOT NULL, prix DOUBLE PRECISION NOT NULL, imageurl LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament_pharmacie (medicament_id INT NOT NULL, pharmacie_id INT NOT NULL, INDEX IDX_804E4447AB0D61F7 (medicament_id), INDEX IDX_804E4447BC6D351B (pharmacie_id), PRIMARY KEY(medicament_id, pharmacie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE objectif (id INT AUTO_INCREMENT NOT NULL, id_user VARCHAR(255) DEFAULT NULL, description VARCHAR(255) NOT NULL, datedebut DATE DEFAULT NULL, datefin DATE DEFAULT NULL, statut VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, recompense VARCHAR(255) DEFAULT NULL, nb_pts INT DEFAULT NULL, img VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pharmacie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, logo LONGBLOB NOT NULL, ville VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recompense (id INT AUTO_INCREMENT NOT NULL, id_objectif INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, cout INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, img VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1E9BC0DEB22384C4 (id_objectif), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE medicament_pharmacie ADD CONSTRAINT FK_804E4447AB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medicament_pharmacie ADD CONSTRAINT FK_804E4447BC6D351B FOREIGN KEY (pharmacie_id) REFERENCES pharmacie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recompense ADD CONSTRAINT FK_1E9BC0DEB22384C4 FOREIGN KEY (id_objectif) REFERENCES objectif (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medicament_pharmacie DROP FOREIGN KEY FK_804E4447AB0D61F7');
        $this->addSql('ALTER TABLE medicament_pharmacie DROP FOREIGN KEY FK_804E4447BC6D351B');
        $this->addSql('ALTER TABLE recompense DROP FOREIGN KEY FK_1E9BC0DEB22384C4');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE medicament_pharmacie');
        $this->addSql('DROP TABLE objectif');
        $this->addSql('DROP TABLE pharmacie');
        $this->addSql('DROP TABLE recompense');
    }
}
