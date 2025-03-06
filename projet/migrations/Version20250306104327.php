<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250306104327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF21A65C546');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2A76ED395');
        $this->addSql('DROP INDEX IDX_24CC0DF21A65C546 ON panier');
        $this->addSql('DROP INDEX IDX_24CC0DF2A76ED395 ON panier');
        $this->addSql('ALTER TABLE panier ADD quantite INT NOT NULL, ADD date_ajout DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP user_id, DROP no_id, CHANGE id_panier id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF279F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF279F37AE5 ON panier (id_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF279F37AE5');
        $this->addSql('DROP INDEX IDX_24CC0DF279F37AE5 ON panier');
        $this->addSql('ALTER TABLE panier ADD user_id INT DEFAULT NULL, ADD no_id INT DEFAULT NULL, ADD id_panier INT NOT NULL, DROP id_user_id, DROP quantite, DROP date_ajout');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF21A65C546 FOREIGN KEY (no_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF21A65C546 ON panier (no_id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF2A76ED395 ON panier (user_id)');
    }
}
