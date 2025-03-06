<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250306151022 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, planning_id INT DEFAULT NULL, id_patient INT NOT NULL, id_doctor INT NOT NULL, nom_patient VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date DATE NOT NULL, heure VARCHAR(5) NOT NULL, type_consultation VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_FE38F8443D865311 (planning_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, post_id INT NOT NULL, parent_id INT DEFAULT NULL, comm_content LONGTEXT NOT NULL, comm_auteur VARCHAR(255) NOT NULL, comm_date DATETIME NOT NULL, INDEX IDX_67F068BC4B89032C (post_id), INDEX IDX_67F068BC727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, quantite INT NOT NULL, medicament_quantities JSON NOT NULL COMMENT \'(DC2Type:json)\', date_ajout DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_24CC0DF279F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier_medicament (panier_id INT NOT NULL, medicament_id INT NOT NULL, INDEX IDX_FE494BAFF77D927C (panier_id), INDEX IDX_FE494BAFAB0D61F7 (medicament_id), PRIMARY KEY(panier_id, medicament_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F8443D865311 FOREIGN KEY (planning_id) REFERENCES planning (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC4B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC727ACA70 FOREIGN KEY (parent_id) REFERENCES commentaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF279F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE panier_medicament ADD CONSTRAINT FK_FE494BAFF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier_medicament ADD CONSTRAINT FK_FE494BAFAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F8443D865311');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC4B89032C');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC727ACA70');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF279F37AE5');
        $this->addSql('ALTER TABLE panier_medicament DROP FOREIGN KEY FK_FE494BAFF77D927C');
        $this->addSql('ALTER TABLE panier_medicament DROP FOREIGN KEY FK_FE494BAFAB0D61F7');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE panier_medicament');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
