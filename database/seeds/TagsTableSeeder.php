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
                'name' => 'Design',
                'slug' => 'design',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Conceptual model',
                'slug' => 'conceptual-model',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Interaction model',
                'slug' => 'intraction-model',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Interaction',
                'slug' => 'interaction',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'ux',
                'slug' => 'ux',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Design lab',
                'slug' => 'design-lab',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],[
                'name' => 'Rapid innovation',
                'slug' => 'rapid-innovation',
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
                'name' => 'Design firm',
                'slug' => 'design-firm',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Front-End development',
                'slug' => 'front-end-development',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Lean UX',
                'slug' => 'lean-ux',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Concept to Code',
                'slug' => 'concept-to-code',
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
                'name' => 'Consumer',
                'slug' => 'consumer',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Engagement',
                'slug' => 'engagement',
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
                'name' => 'Visual Design',
                'slug' => 'visual-design',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Visual Language',
                'slug' => 'visual-language',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Collaborative Design',
                'slug' => 'collaborative-design',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Strategy',
                'slug' => 'strategy',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Total Experience',
                'slug' => 'total-experience',
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
                'name' => 'Multidisciplinary',
                'slug' => 'multidisciplinary',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Innovation',
                'slug' => 'innovation',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Aligning Teams',
                'slug' => 'aligning-teams',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Persona',
                'slug' => 'persona',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Lean Ethnography',
                'slug' => 'lean-ethnography',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Emotion',
                'slug' => 'emotion',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Logic',
                'slug' => 'logic',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Mobile',
                'slug' => 'mobile',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Visualization',
                'slug' => 'visualization',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Wireframing',
                'slug' => 'wireframing',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
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
                'name' => 'Emotional Design',
                'slug' => 'emotional-design',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Usability',
                'slug' => 'usability',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('article_tag')->insert([
            [
                'article_id' => 1,
                'tag_id' => 20
            ],
            [
                'article_id' => 1,
                'tag_id' => 8
            ],
            [
                'article_id' => 1,
                'tag_id' => 22
            ],
            [
                'article_id' => 1,
                'tag_id' => 35
            ],
            [
                'article_id' => 1,
                'tag_id' => 16
            ],
            [
                'article_id' => 1,
                'tag_id' => 37
            ],
            [
                'article_id' => 2,
                'tag_id' => 14
            ],
            [
                'article_id' => 2,
                'tag_id' => 30
            ],
            [
                'article_id' => 2,
                'tag_id' => 24
            ],
            [
                'article_id' => 2,
                'tag_id' => 13
            ],
            [
                'article_id' => 2,
                'tag_id' => 36
            ],
            [
                'article_id' => 3,
                'tag_id' => 34
            ],
            [
                'article_id' => 3,
                'tag_id' => 31
            ],
            [
                'article_id' => 3,
                'tag_id' => 12
            ],
            [
                'article_id' => 3,
                'tag_id' => 13
            ],
            [
                'article_id' => 3,
                'tag_id' => 33
            ],
            [
                'article_id' => 3,
                'tag_id' => 14
            ],
            [
                'article_id' => 4,
                'tag_id' => 24
            ],
            [
                'article_id' => 4,
                'tag_id' => 31
            ],
            [
                'article_id' => 4,
                'tag_id' => 35
            ],
            [
                'article_id' => 4,
                'tag_id' => 34
            ],
            [
                'article_id' => 5,
                'tag_id' => 24
            ],
            [
                'article_id' => 5,
                'tag_id' => 35
            ],
            [
                'article_id' => 5,
                'tag_id' => 8
            ],
            [
                'article_id' => 5,
                'tag_id' => 20
            ],
            [
                'article_id' => 5,
                'tag_id' => 16
            ],
            [
                'article_id' => 5,
                'tag_id' => 37
            ],
            [
                'article_id' => 6,
                'tag_id' => 14
            ],
            [
                'article_id' => 6,
                'tag_id' => 15
            ],
            [
                'article_id' => 6,
                'tag_id' => 16
            ],
            [
                'article_id' => 6,
                'tag_id' => 17
            ],
            [
                'article_id' => 7,
                'tag_id' => 17
            ],
            [
                'article_id' => 7,
                'tag_id' => 36
            ],
            [
                'article_id' => 7,
                'tag_id' => 35
            ],
            [
                'article_id' => 7,
                'tag_id' => 30
            ],
            [
                'article_id' => 8,
                'tag_id' => 27
            ],
            [
                'article_id' => 8,
                'tag_id' => 36
            ],
            [
                'article_id' => 8,
                'tag_id' => 8
            ],
            [
                'article_id' => 8,
                'tag_id' => 13
            ],
            [
                'article_id' => 8,
                'tag_id' => 37
            ],
            [
                'article_id' => 9,
                'tag_id' => 26
            ],
            [
                'article_id' => 9,
                'tag_id' => 24
            ],
            [
                'article_id' => 9,
                'tag_id' => 8
            ],
            [
                'article_id' => 9,
                'tag_id' => 15
            ],
            [
                'article_id' => 9,
                'tag_id' => 36
            ],
            [
                'article_id' => 9,
                'tag_id' => 17
            ],
            [
                'article_id' => 10,
                'tag_id' => 32
            ],
            [
                'article_id' => 10,
                'tag_id' => 12
            ],
            [
                'article_id' => 10,
                'tag_id' => 34
            ],
            [
                'article_id' => 10,
                'tag_id' => 13
            ],
            [
                'article_id' => 10,
                'tag_id' => 37
            ],
            [
                'article_id' => 11,
                'tag_id' => 2
            ],
            [
                'article_id' => 11,
                'tag_id' => 3
            ],
            [
                'article_id' => 11,
                'tag_id' => 8
            ],
            [
                'article_id' => 11,
                'tag_id' => 20
            ],
            [
                'article_id' => 11,
                'tag_id' => 37
            ],
            [
                'article_id' => 11,
                'tag_id' => 32
            ],
            [
                'article_id' => 12,
                'tag_id' => 12
            ],
            [
                'article_id' => 12,
                'tag_id' => 13
            ],
            [
                'article_id' => 12,
                'tag_id' => 20
            ],
            [
                'article_id' => 12,
                'tag_id' => 27
            ],
            [
                'article_id' => 12,
                'tag_id' => 37
            ],
            [
                'article_id' => 12,
                'tag_id' => 30
            ],
            [
                'article_id' => 13,
                'tag_id' => 31
            ],
            [
                'article_id' => 13,
                'tag_id' => 32
            ],
            [
                'article_id' => 13,
                'tag_id' => 33
            ],
            [
                'article_id' => 13,
                'tag_id' => 2
            ],
            [
                'article_id' => 13,
                'tag_id' => 3
            ],
            [
                'article_id' => 14,
                'tag_id' => 8
            ],
            [
                'article_id' => 14,
                'tag_id' => 22
            ],
            [
                'article_id' => 14,
                'tag_id' => 20
            ],
            [
                'article_id' => 14,
                'tag_id' => 35
            ],
            [
                'article_id' => 14,
                'tag_id' => 34
            ],
            [
                'article_id' => 14,
                'tag_id' => 12
            ],
            [
                'article_id' => 14,
                'tag_id' => 15
            ],
            [
                'article_id' => 14,
                'tag_id' => 36
            ]


        ]);
    }
}
