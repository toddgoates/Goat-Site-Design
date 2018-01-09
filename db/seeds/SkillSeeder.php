<?php


use Phinx\Seed\AbstractSeed;

class SkillSeeder extends AbstractSeed
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
        // Create Skill Data
        $data = [
            [
                'name' => 'HTML5',
                'description' => 'The semantic structure of your website.',
                'sort' => 10
            ],[
                'name' => 'CSS3',
                'description' => 'The style and appearance of your website.',
                'sort' => 20
            ],[
                'name' => 'SASS',
                'description' => 'A CSS preprocessor, a tool to write better and cleaner CSS.',
                'sort' => 30
            ],[
                'name' => 'JavaScript',
                'description' => 'What makes a website interactive on your browser.',
                'sort' => 40
            ],[
                'name' => 'jQuery',
                'description' => 'A JavaScript library to simplify writing code.',
                'sort' => 50
            ],[
                'name' => 'Angular',
                'description' => 'A powerful JavaScript framework for writing web applications.',
                'sort' => 60
            ],[
                'name' => 'PHP',
                'description' => 'A web development language that runs on a web server.',
                'sort' => 70
            ],[
                'name' => 'Laravel',
                'description' => 'A PHP framework for web applications following a Model-View-Controller pattern.',
                'sort' => 80
            ],[
                'name' => 'CakePHP',
                'description' => 'A PHP framework to rapidly build web applications.',
                'sort' => 90
            ],[
                'name' => 'MySQL',
                'description' => 'An open source database system for the web.',
                'sort' => 100
            ],[
                'name' => 'Server Administration',
                'description' => 'Build, maintain, and update a virtual private server.',
                'sort' => 110
            ],[
                'name' => 'AJAX',
                'description' => 'Loading content with JavaScript asynchronously.',
                'sort' => 120
            ],[
                'name' => 'E-Commerce',
                'description' => 'Processing commercial transactions on the web.',
                'sort' => 130
            ],[
                'name' => 'C#',
                'description' => 'A simple &amp; multi-purpose programming language.',
                'sort' => 140
            ],[
                'name' => 'Project Management',
                'description' => 'The process of planning &amp; organizing a project.',
                'sort' => 150
            ],[
                'name' => 'Responsive Design',
                'description' => 'Making websites optimized for a variety of devices.',
                'sort' => 160
            ],[
                'name' => 'UX Design',
                'description' => 'User Experience Design: Building to enhance user satisfaction and accessibility.',
                'sort' => 170
            ],[
                'name' => 'On-page SEO',
                'description' => 'Techniques to improve the search rank of a website.',
                'sort' => 180
            ],[
                'name' => 'Photoshop, Illustrator, InDesign',
                'description' => 'Powerful, industry-standard design software.',
                'sort' => 190
            ],[
                'name' => 'Drupal',
                'description' => 'A powerful CMS for online content &amp; user profiles.',
                'sort' => 200
            ],[
                'name' => 'WordPress',
                'description' => 'One of the most popular blogging platforms &amp; CMS.',
                'sort' => 210
            ],[
                'name' => 'Joomla',
                'description' => 'A popular &amp; flexible CMS for developing websites.',
                'sort' => 220
            ],[
                'name' => 'Adobe Business Catalyst',
                'description' => 'A business-centered &amp; marketing CMS.',
                'sort' => 230
            ],[
                'name' => 'Virtual Reality Tours',
                'description' => 'A 3D panorama that is manipulated in a browser.',
                'sort' => 240
            ],[
                'name' => 'Podcasts',
                'description' => 'Audio/video distributed on the internet to subscribers.',
                'sort' => 250
            ],[
                'name' => 'Audiobooks',
                'description' => 'An audio recording with rich metadata.',
                'sort' => 260
            ],[
                'name' => 'Mag+ &amp; iBooks',
                'description' => 'Different platforms for digital publication.',
                'sort' => 270
            ]

        ];

        $skills = $this->table('skills');
        $skills->insert($data)
                 ->save();
    }
}
