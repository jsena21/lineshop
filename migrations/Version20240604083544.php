<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240604083544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE task');
        $this->addSql('ALTER TABLE article CHANGE categorie_id categorie_id INT DEFAULT NULL, CHANGE prix prix NUMERIC(5, 2) NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE date date DATETIME NOT NULL, CHANGE montant montant NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE ligne_commande CHANGE quantite quantite INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE task (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, due_date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article CHANGE categorie_id categorie_id INT NOT NULL, CHANGE prix prix NUMERIC(10, 0) DEFAULT NULL');
        $this->addSql('ALTER TABLE commande CHANGE date date DATE NOT NULL, CHANGE montant montant NUMERIC(10, 0) DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_commande CHANGE quantite quantite INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user DROP is_verified');
    }
}
