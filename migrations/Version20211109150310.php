<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211109150310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artiest CHANGE omschrijving omschrijving VARCHAR(400) NOT NULL, CHANGE afbeelding_url afbeelding_url VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE poppodium CHANGE telefoonnummer telefoonnummer VARCHAR(14) NOT NULL, CHANGE email email VARCHAR(50) NOT NULL, CHANGE website website VARCHAR(120) NOT NULL, CHANGE logo_url logo_url VARCHAR(200) NOT NULL, CHANGE afbeelding_url afbeelding_url VARCHAR(200) NOT NULL');
        $this->addSql('ALTER TABLE user DROP file');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artiest CHANGE omschrijving omschrijving VARCHAR(400) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE afbeelding_url afbeelding_url VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE poppodium CHANGE telefoonnummer telefoonnummer VARCHAR(14) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE website website VARCHAR(120) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE logo_url logo_url VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE afbeelding_url afbeelding_url VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user ADD file VARCHAR(300) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
