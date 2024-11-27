<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241120210759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_4E977E5C77153098 ON salle');
        $this->addSql('ALTER TABLE salle ADD bloc VARCHAR(255) NOT NULL, ADD etage INT NOT NULL, CHANGE code code VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salle DROP bloc, DROP etage, CHANGE code code VARCHAR(10) NOT NULL, CHANGE type type VARCHAR(50) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4E977E5C77153098 ON salle (code)');
    }
}
