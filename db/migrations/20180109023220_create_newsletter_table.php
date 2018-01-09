<?php


use Phinx\Migration\AbstractMigration;

class CreateNewsletterTable extends AbstractMigration
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
        $table = $this->table('newsletter');
        $table->addColumn('join_date', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('email', 'string', ['limit' => 50])
              ->addColumn('deleted', 'integer', ['default' => 0])
              ->addColumn('deleted_date', 'timestamp', ['null' => true, 'default' => null])
              ->create(); 
    }
}
