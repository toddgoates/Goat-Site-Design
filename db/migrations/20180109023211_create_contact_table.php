<?php


use Phinx\Migration\AbstractMigration;

class CreateContactTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // Create the table
        $table = $this->table('contact');
        $table->addColumn('ts_created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('fullname', 'string', ['limit' => 50])
              ->addColumn('email', 'string', ['limit' => 50])
              ->addColumn('phone', 'string', ['limit' => 15])
              ->addColumn('reason', 'string', ['limit' => 30])
              ->addColumn('message', 'text', ['null' => true, 'default' => null])
              ->addColumn('help', 'string', ['limit' => 25, 'null' => true, 'default' => null])
              ->addColumn('budget', 'string', ['limit' => 20, 'null' => true, 'default' => null])
              ->addColumn('timeline', 'string', ['limit' => 15, 'null' => true, 'default' => null])
              ->addColumn('details', 'text', ['null' => true, 'default' => null])
              ->create();
    }
}
