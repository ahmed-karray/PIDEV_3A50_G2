<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216104956 extends AbstractMigration
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
        $this->addSql('CREATE TABLE pharmacie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, logo LONGBLOB NOT NULL, ville VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE medicament_pharmacie ADD CONSTRAINT FK_804E4447AB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medicament_pharmacie ADD CONSTRAINT FK_804E4447BC6D351B FOREIGN KEY (pharmacie_id) REFERENCES pharmacie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medicament_pharmacie DROP FOREIGN KEY FK_804E4447AB0D61F7');
        $this->addSql('ALTER TABLE medicament_pharmacie DROP FOREIGN KEY FK_804E4447BC6D351B');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE medicament_pharmacie');
        $this->addSql('DROP TABLE pharmacie');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
