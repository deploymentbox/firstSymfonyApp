<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150614182045 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO Customers (name, email, phone, address) VALUES ("Juan Perez", "juan@perez.com", "+34 612 612 612", "C/. Alfa 12")');
        $this->addSql('INSERT INTO Customers (name, email, phone, address) VALUES ("John Doe", "john@doe.com", "+34 613 613 613", "C/. Alfa 13")');
        $this->addSql('INSERT INTO Customers (name, email, phone, address) VALUES ("Jean Dupont", "jean@dupont.com", "+34 614 614 614", "C/. Alfa 14")');
        $this->addSql('INSERT INTO Customers (name, email, phone, address) VALUES ("John Smith", "john@smith.com", "+34 615 615 615", "C/. Alfa 15")');
        $this->addSql('INSERT INTO Customers (name, email, phone, address) VALUES ("Hans Meier", "hans@meier.com", "+34 616 616 616", "C/. Alfa 16")');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
