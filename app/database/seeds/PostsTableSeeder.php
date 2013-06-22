<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('posts')->delete();

        $posts = array(
            array(
                'id'                       => 1,
                'post_type_id'             => '1',
                'accepted_answer_id'       => '',
                'parent_id'                => '',
                'creation_date'            => date('Y-m-d H:i:s'),
                'score'                    => '2',
                'view_count'               => '5',
                'body'                     => 'How do you loop throught a PHP array?',
                'user_id'                  => 1,
                'owner_display_name'       => 'JohnDoe01',
                'last_editor_user_id'      => '',
                'last_editor_display_name' => '',
                'last_edit_date'           => date('Y-m-d H:i:s'),
                'last_activity_date'       => date('Y-m-d H:i:s'),
                'title'                    => 'PHP array looping?',
                'tags'                     => 'php, php-5',
                'answer_count'             => '0',
                'comment_count'            => '1',
                'favorite_count'           => '1',
                'closed_date'              => date('Y-m-d H:i:s'),
                'community_owned_date'     => date('Y-m-d H:i:s'),
                'updated_at'               => date('Y-m-d H:i:s'),
                'created_at'               => date('Y-m-d H:i:s')
            ),
            array(
                'id'                       => 2,
                'post_type_id'             => '1',
                'accepted_answer_id'       => '3',
                'parent_id'                => '',
                'creation_date'            => date('Y-m-d H:i:s'),
                'score'                    => '4',
                'view_count'               => '15',
                'body'                     => 'How do you use a foreach loop PHP?',
                'user_id'                  => 2,
                'owner_display_name'       => 'JaneDoe01',
                'last_editor_user_id'      => '',
                'last_editor_display_name' => '',
                'last_edit_date'           => date('Y-m-d H:i:s'),
                'last_activity_date'       => date('Y-m-d H:i:s'),
                'title'                    => 'PHP foreach looping?',
                'tags'                     => 'php, php-5',
                'answer_count'             => '2',
                'comment_count'            => '1',
                'favorite_count'           => '1',
                'closed_date'              => date('Y-m-d H:i:s'),
                'community_owned_date'     => date('Y-m-d H:i:s'),
                'updated_at'               => date('Y-m-d H:i:s'),
                'created_at'               => date('Y-m-d H:i:s')
            ),
            array(
                'id'                       => 3,
                'post_type_id'             => '2',
                'accepted_answer_id'       => '',
                'parent_id'                => '2',
                'creation_date'            => date('Y-m-d H:i:s'),
                'score'                    => '4',
                'view_count'               => '15',
                'body'                     => 'Like so; foreach($array as $element){}.',
                'user_id'                  => 1,
                'owner_display_name'       => 'JohnDoe01',
                'last_editor_user_id'      => '',
                'last_editor_display_name' => '',
                'last_edit_date'           => date('Y-m-d H:i:s'),
                'last_activity_date'       => date('Y-m-d H:i:s'),
                'title'                    => '',
                'tags'                     => '',
                'answer_count'             => '0',
                'comment_count'            => '0',
                'favorite_count'           => '0',
                'closed_date'              => date('Y-m-d H:i:s'),
                'community_owned_date'     => date('Y-m-d H:i:s'),
                'updated_at'               => date('Y-m-d H:i:s'),
                'created_at'               => date('Y-m-d H:i:s')
            ),
            array(
                'id'                       => 4,
                'post_type_id'             => '2',
                'accepted_answer_id'       => '',
                'parent_id'                => '2',
                'creation_date'            => date('Y-m-d H:i:s'),
                'score'                    => '1',
                'view_count'               => '5',
                'body'                     => 'Like so; for($i = 0; $1 < 5; $i++){}.',
                'user_id'                  => 1,
                'owner_display_name'       => 'JohnDoe01',
                'last_editor_user_id'      => '',
                'last_editor_display_name' => '',
                'last_edit_date'           => date('Y-m-d H:i:s'),
                'last_activity_date'       => date('Y-m-d H:i:s'),
                'title'                    => '',
                'tags'                     => '',
                'answer_count'             => '0',
                'comment_count'            => '0',
                'favorite_count'           => '0',
                'closed_date'              => date('Y-m-d H:i:s'),
                'community_owned_date'     => date('Y-m-d H:i:s'),
                'updated_at'               => date('Y-m-d H:i:s'),
                'created_at'               => date('Y-m-d H:i:s')
            )
        );  

        // Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }

}