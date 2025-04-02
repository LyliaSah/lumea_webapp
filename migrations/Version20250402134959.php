<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250402134959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE faq_thematique (faq_id INT NOT NULL, thematique_id INT NOT NULL, INDEX IDX_FB6CE72481BEC8C2 (faq_id), INDEX IDX_FB6CE724476556AF (thematique_id), PRIMARY KEY(faq_id, thematique_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE faq_thematique ADD CONSTRAINT FK_FB6CE72481BEC8C2 FOREIGN KEY (faq_id) REFERENCES faq (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE faq_thematique ADD CONSTRAINT FK_FB6CE724476556AF FOREIGN KEY (thematique_id) REFERENCES thematique (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE thematique DROP FOREIGN KEY FK_3A8ED5A881BEC8C2
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_3A8ED5A881BEC8C2 ON thematique
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE thematique DROP faq_id
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE faq_thematique DROP FOREIGN KEY FK_FB6CE72481BEC8C2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE faq_thematique DROP FOREIGN KEY FK_FB6CE724476556AF
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE faq_thematique
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE thematique ADD faq_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE thematique ADD CONSTRAINT FK_3A8ED5A881BEC8C2 FOREIGN KEY (faq_id) REFERENCES faq (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_3A8ED5A881BEC8C2 ON thematique (faq_id)
        SQL);
    }
}
