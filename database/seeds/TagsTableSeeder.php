<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'Strategy',
                'slug' => 'strategy',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Leadership',
                'slug' => 'leadership',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Customer Journey',
                'slug' => 'customer-journey',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Monetization',
                'slug' => 'monetization',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Prototyping',
                'slug' => 'prototyping',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Usability',
                'slug' => 'usability',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],[
                'name' => 'Storyboarding',
                'slug' => 'storyboarding',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Experience outcomes',
                'slug' => 'experience-outcomes',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Multidisciplinary Design',
                'slug' => 'multidisciplinary-design',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Visual Design',
                'slug' => 'visual-design',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Emotional Design',
                'slug' => 'emotional-design',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Personas',
                'slug' => 'personas',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('article_tag')->insert([
            [
                'article_id' => 1,
                'tag_id' => 1
            ],
            [
                'article_id' => 1,
                'tag_id' => 2
            ],
            [
                'article_id' => 1,
                'tag_id' => 3
            ],
            [
                'article_id' => 2,
                'tag_id' => 4
            ],
            [
                'article_id' => 2,
                'tag_id' => 1
            ],
            [
                'article_id' => 3,
                'tag_id' => 1
            ],
            [
                'article_id' => 4,
                'tag_id' => 2
            ],
            [
                'article_id' => 5,
                'tag_id' => 3
            ],
            [
                'article_id' => 4,
                'tag_id' => 6
            ],
            [
                'article_id' => 7,
                'tag_id' => 3
            ],
            [
                'article_id' => 5,
                'tag_id' => 1
            ],
            [
                'article_id' => 6,
                'tag_id' => 1
            ],
            [
                'article_id' => 7,
                'tag_id' => 2
            ],
            [
                'article_id' => 8,
                'tag_id' => 3
            ],
            [
                'article_id' => 9,
                'tag_id' => 4
            ],
            [
                'article_id' => 9,
                'tag_id' => 3
            ]


        ]);
    }
}
