<?php

class Migrations_Migration720 extends Shopware\Components\Migrations\AbstractMigration
{
    /**
     * @param string $modus
     * @return void
     */
    public function up($modus)
    {
        require_once __DIR__ . '/common/MigrationHelper.php';
        $helper = new MigrationHelper($this->connection);
        $helper->migrateAttributes('s_order_billingaddress_attributes', 'billingID');
    }
}
