<?php


use Phinx\Seed\AbstractSeed;

class ProjectSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        // Create Project Data
        $data = [
            'title' => 'A Child\'s Hope Foundation',
            'img_path' => '/img/projects/',
            'file_name' => 'achf.png',
            'link' => '/a-childs-hope-foundation'
        ];

        $projects = $this->table('project');
        $projects->insert($data)
                 ->save();
    }
}
