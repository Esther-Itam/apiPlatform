<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210708101353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ALTER name SET NOT NULL');
        $this->addSql('ALTER TABLE book ALTER author SET NOT NULL');
        $this->addSql('ALTER TABLE book ALTER date_published SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE book ALTER name DROP NOT NULL');
        $this->addSql('ALTER TABLE book ALTER author DROP NOT NULL');
        $this->addSql('ALTER TABLE book ALTER date_published DROP NOT NULL');
    }
}
