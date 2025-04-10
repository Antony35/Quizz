<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250410134821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE choice (id SERIAL NOT NULL, question_id INT NOT NULL, content VARCHAR(255) NOT NULL, is_correct BOOLEAN NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C1AB5A921E27F6BF ON choice (question_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE question (id SERIAL NOT NULL, quiz_id INT NOT NULL, type VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B6F7494E853CD175 ON question (quiz_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE quiz (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE submission (id SERIAL NOT NULL, submitted_by_id INT NOT NULL, question_id INT DEFAULT NULL, selected_choice_id INT DEFAULT NULL, short_answer VARCHAR(255) DEFAULT NULL, is_correct BOOLEAN NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_DB055AF379F7D87D ON submission (submitted_by_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_DB055AF31E27F6BF ON submission (question_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_DB055AF3C1F9753A ON submission (selected_choice_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE choice ADD CONSTRAINT FK_C1AB5A921E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD CONSTRAINT FK_B6F7494E853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE submission ADD CONSTRAINT FK_DB055AF379F7D87D FOREIGN KEY (submitted_by_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE submission ADD CONSTRAINT FK_DB055AF31E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE submission ADD CONSTRAINT FK_DB055AF3C1F9753A FOREIGN KEY (selected_choice_id) REFERENCES choice (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE choice DROP CONSTRAINT FK_C1AB5A921E27F6BF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question DROP CONSTRAINT FK_B6F7494E853CD175
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE submission DROP CONSTRAINT FK_DB055AF379F7D87D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE submission DROP CONSTRAINT FK_DB055AF31E27F6BF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE submission DROP CONSTRAINT FK_DB055AF3C1F9753A
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE choice
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE question
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE quiz
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE submission
        SQL);
    }
}
