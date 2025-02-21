<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250219001543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning ADD start_date DATE DEFAULT NULL, ADD end_date DATE DEFAULT NULL, ADD daily_start_time TIME NOT NULL, ADD daily_end_time TIME NOT NULL, DROP date, DROP start_time, DROP end_time');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning ADD date DATE NOT NULL, ADD start_time TIME NOT NULL, ADD end_time TIME NOT NULL, DROP start_date, DROP end_date, DROP daily_start_time, DROP daily_end_time');
    }
}
