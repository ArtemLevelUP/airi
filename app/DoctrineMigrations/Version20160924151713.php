<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20160924151713 extends AbstractMigration
{
    /**
     * @inheritdoc
     */
    public function up(Schema $schema)
    {
        $this->addSql("ALTER TABLE `Task` CHANGE `status` `status` ENUM('new','in_progress','done','approved','cancelled','clarification','paid') NOT NULL DEFAULT 'new';");
    }

    /**
     * @inheritdoc
     */
    public function down(Schema $schema)
    {
        $this->addSql("ALTER TABLE `Task` CHANGE `status` `status` ENUM('new','in_progress','done','approved','cancelled','clarification') NOT NULL DEFAULT 'new';");
    }
}
