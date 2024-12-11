<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230514082015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_filiere (user_id INT NOT NULL, filiere_id INT NOT NULL, INDEX IDX_76DD4394A76ED395 (user_id), INDEX IDX_76DD4394180AA129 (filiere_id), PRIMARY KEY(user_id, filiere_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_filiere ADD CONSTRAINT FK_76DD4394A76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_filiere ADD CONSTRAINT FK_76DD4394180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_filiere DROP FOREIGN KEY FK_76DD4394A76ED395');
        $this->addSql('ALTER TABLE user_filiere DROP FOREIGN KEY FK_76DD4394180AA129');
        $this->addSql('DROP TABLE user_filiere');
    }
}
