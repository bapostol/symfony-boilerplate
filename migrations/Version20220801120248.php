<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220801120248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Generate `Users` table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE user (
            id INT AUTO_INCREMENT NOT NULL, 
            email VARCHAR(180) NOT NULL, 
            roles JSON NOT NULL, 
            password VARCHAR(255) NOT NULL, 
            UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), 
            PRIMARY KEY(id)
        ) ENGINE = InnoDB');
        $this->addSql('INSERT INTO user 
            (`email`, `roles`, `password`) 
            VALUES 
            (\'bogdan@email.com\', \'["ROLE_SUPER_ADMIN"]\', \'$2y$13$4.XJLYlt3UGiO2kwCXkRvu93bfYvU1z2Sa.ttLjA43zhJDhEH8UIK\')');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE user');
    }
}
