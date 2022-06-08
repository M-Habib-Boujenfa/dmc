<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220412114410 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis CHANGE date_de_depart date_de_depart VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tarif CHANGE date date VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis CHANGE date_de_depart date_de_depart VARCHAR(255) DEFAULT \'00/00/0000\'');
        $this->addSql('ALTER TABLE tarif CHANGE date date DATE NOT NULL');
    }
}
