<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20160918003949 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE User (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, activeStatus TINYINT(1) NOT NULL DEFAULT "1", created DATETIME NOT NULL, UNIQUE INDEX UNIQ_2DA1797792FC23A8 (username_canonical), UNIQUE INDEX UNIQ_2DA17977A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_2DA17977C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Task (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, estimation INT NOT NULL, deadline DATETIME NOT NULL, status ENUM("new", "in_progress", "done", "approved", "cancelled", "clarification") NOT NULL DEFAULT "new", created DATETIME NOT NULL, creatorId INT DEFAULT NULL, performerId INT DEFAULT NULL, INDEX IDX_F24C741B24B2CCF6 (creatorId), INDEX IDX_F24C741BE5A77C (performerId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Comment (id INT AUTO_INCREMENT NOT NULL, text LONGTEXT NOT NULL, created DATETIME NOT NULL, creatorId INT DEFAULT NULL, taskId INT DEFAULT NULL, INDEX IDX_5BC96BF024B2CCF6 (creatorId), INDEX IDX_5BC96BF0D34FCA37 (taskId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE File (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, filename VARCHAR(255) NOT NULL, uploaded DATETIME NOT NULL, creatorId INT DEFAULT NULL, taskId INT DEFAULT NULL, commentId INT DEFAULT NULL, UNIQUE INDEX UNIQ_2CAD992E2B36786B (title), UNIQUE INDEX UNIQ_2CAD992E3C0BE965 (filename), INDEX IDX_2CAD992E24B2CCF6 (creatorId), INDEX IDX_2CAD992ED34FCA37 (taskId), INDEX IDX_2CAD992E6690C3F5 (commentId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Payment (id INT AUTO_INCREMENT NOT NULL, sum NUMERIC(10, 2) NOT NULL, description LONGTEXT NOT NULL, status ENUM("created", "sent", "received") NOT NULL DEFAULT "created", payerId INT DEFAULT NULL, recipientId INT DEFAULT NULL, payForm VARCHAR(255) NOT NULL, INDEX IDX_A295BD917687BB16 (payerId), INDEX IDX_A295BD912169F42E (recipientId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Task ADD CONSTRAINT FK_F24C741B24B2CCF6 FOREIGN KEY (creatorId) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Task ADD CONSTRAINT FK_F24C741BE5A77C FOREIGN KEY (performerId) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Comment ADD CONSTRAINT FK_5BC96BF024B2CCF6 FOREIGN KEY (creatorId) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Comment ADD CONSTRAINT FK_5BC96BF0D34FCA37 FOREIGN KEY (taskId) REFERENCES Task (id)');
        $this->addSql('ALTER TABLE File ADD CONSTRAINT FK_2CAD992E24B2CCF6 FOREIGN KEY (creatorId) REFERENCES User (id)');
        $this->addSql('ALTER TABLE File ADD CONSTRAINT FK_2CAD992ED34FCA37 FOREIGN KEY (taskId) REFERENCES Task (id)');
        $this->addSql('ALTER TABLE File ADD CONSTRAINT FK_2CAD992E6690C3F5 FOREIGN KEY (commentId) REFERENCES Comment (id)');
        $this->addSql('ALTER TABLE Payment ADD CONSTRAINT FK_A295BD917687BB16 FOREIGN KEY (payerId) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Payment ADD CONSTRAINT FK_A295BD912169F42E FOREIGN KEY (recipientId) REFERENCES User (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Task DROP FOREIGN KEY FK_F24C741B24B2CCF6');
        $this->addSql('ALTER TABLE Task DROP FOREIGN KEY FK_F24C741BE5A77C');
        $this->addSql('ALTER TABLE Comment DROP FOREIGN KEY FK_5BC96BF024B2CCF6');
        $this->addSql('ALTER TABLE File DROP FOREIGN KEY FK_2CAD992E24B2CCF6');
        $this->addSql('ALTER TABLE Payment DROP FOREIGN KEY FK_A295BD917687BB16');
        $this->addSql('ALTER TABLE Payment DROP FOREIGN KEY FK_A295BD912169F42E');
        $this->addSql('ALTER TABLE Comment DROP FOREIGN KEY FK_5BC96BF0D34FCA37');
        $this->addSql('ALTER TABLE File DROP FOREIGN KEY FK_2CAD992ED34FCA37');
        $this->addSql('ALTER TABLE File DROP FOREIGN KEY FK_2CAD992E6690C3F5');
        $this->addSql('DROP TABLE User');
        $this->addSql('DROP TABLE Task');
        $this->addSql('DROP TABLE Comment');
        $this->addSql('DROP TABLE File');
        $this->addSql('DROP TABLE Payment');
    }
}
