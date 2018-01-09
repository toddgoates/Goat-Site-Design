<?php


use Phinx\Migration\AbstractMigration;

class CreateSkillsTable extends AbstractMigration
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
        $table = $this->table('skills');
        $table->addColumn('name', 'string', ['limit' => 35])
              ->addColumn('description', 'string', ['limit' => 100])
              ->addColumn('sort', 'integer')
              ->addColumn('deleted', 'integer', ['default' => 0])
              ->create();
    }
}
