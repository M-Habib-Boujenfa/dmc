<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220322103847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE assurance (id INT AUTO_INCREMENT NOT NULL, garantie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, date DATE NOT NULL, commentaire LONGTEXT DEFAULT NULL, acompte DOUBLE PRECISION NOT NULL, tarif_ht DOUBLE PRECISION NOT NULL, INDEX IDX_E7189C979F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tarif ADD CONSTRAINT FK_E7189C979F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE devis ADD id_assurance_id INT NOT NULL, ADD id_tarif_id INT NOT NULL, ADD id_prestation_id INT NOT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B9149B691 FOREIGN KEY (id_assurance_id) REFERENCES assurance (id)');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B65A7E6CC FOREIGN KEY (id_tarif_id) REFERENCES tarif (id)');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B206D1431 FOREIGN KEY (id_prestation_id) REFERENCES prestation (id)');
        $this->addSql('CREATE INDEX IDX_8B27C52B9149B691 ON devis (id_assurance_id)');
        $this->addSql('CREATE INDEX IDX_8B27C52B65A7E6CC ON devis (id_tarif_id)');
        $this->addSql('CREATE INDEX IDX_8B27C52B206D1431 ON devis (id_prestation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B9149B691');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B206D1431');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B65A7E6CC');
        $this->addSql('ALTER TABLE tarif DROP FOREIGN KEY FK_E7189C979F37AE5');
        $this->addSql('DROP TABLE assurance');
        $this->addSql('DROP TABLE prestation');
        $this->addSql('DROP TABLE tarif');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_8B27C52B9149B691 ON devis');
        $this->addSql('DROP INDEX IDX_8B27C52B65A7E6CC ON devis');
        $this->addSql('DROP INDEX IDX_8B27C52B206D1431 ON devis');
        $this->addSql('ALTER TABLE devis DROP id_assurance_id, DROP id_tarif_id, DROP id_prestation_id');
    }
}
