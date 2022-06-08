<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220316082058 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE devis (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, date_de_depart DATETIME NOT NULL, adresse_de_depart VARCHAR(255) NOT NULL, code_postal_de_depart VARCHAR(255) NOT NULL, ville_de_depart VARCHAR(255) NOT NULL, etage_de_depart INT NOT NULL, ascenseur_depart VARCHAR(255) NOT NULL, date_arrivee DATETIME NOT NULL, adresse_arrivee VARCHAR(255) NOT NULL, code_postal_arrivee INT NOT NULL, ville_arrivee VARCHAR(255) NOT NULL, etage_arrivee INT NOT NULL, ascenseur_arrivee VARCHAR(255) NOT NULL, volume DOUBLE PRECISION NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE devis');
    }
}
