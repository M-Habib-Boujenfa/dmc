<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420121004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gestion_contenu (id INT AUTO_INCREMENT NOT NULL, dem_particuliers LONGTEXT DEFAULT NULL, dem_transfert_bureaux LONGTEXT DEFAULT NULL, dem_monte_meubles LONGTEXT DEFAULT NULL, dem_garde_meubles LONGTEXT DEFAULT NULL, dem_jour_demenagement LONGTEXT DEFAULT NULL, dem_preparer_demenagement LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE gestion_contenu');
    }
}
