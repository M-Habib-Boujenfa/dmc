<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420143549 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gestion_contenu ADD accueil_titre_main VARCHAR(255) DEFAULT NULL, ADD accueil_texte_main LONGTEXT DEFAULT NULL, ADD accueil_titre_footer VARCHAR(255) DEFAULT NULL, ADD accueil_texte_footer LONGTEXT DEFAULT NULL, ADD devis_main LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gestion_contenu DROP accueil_titre_main, DROP accueil_texte_main, DROP accueil_titre_footer, DROP accueil_texte_footer, DROP devis_main');
    }
}
