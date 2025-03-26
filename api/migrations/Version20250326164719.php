<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326164719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change nip number in company to bigint';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE company ALTER COLUMN nip SET DATA TYPE BIGINT ');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE company ALTER COLUMN nip SET DATA TYPE INT ');
    }
}
