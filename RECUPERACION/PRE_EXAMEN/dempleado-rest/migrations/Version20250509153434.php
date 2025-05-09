<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509153434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE empleado (id INT AUTO_INCREMENT NOT NULL, puesto_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, dni VARCHAR(9) NOT NULL, email VARCHAR(50) DEFAULT NULL, INDEX IDX_D9D9BF525035E9DA (puesto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE puesto (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, sueldo INT NOT NULL, observaciones VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE empleado ADD CONSTRAINT FK_D9D9BF525035E9DA FOREIGN KEY (puesto_id) REFERENCES puesto (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE empleado DROP FOREIGN KEY FK_D9D9BF525035E9DA
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE empleado
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE puesto
        SQL);
    }
}
