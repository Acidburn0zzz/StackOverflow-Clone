<?php

class CommentsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('comments')->delete();

        $comments = array(
            array(
                'post_id'           => '1',
                'score'             => '2',
                'body'              => 'Using a for or foreach loop.',
                'creation_date'     => date('Y-m-d H:i:s'),
                'user_display_name' => 'JaneDoe01',
                'user_id'           => '2',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            ),
            array(
                'post_id'           => '2',
                'score'             => '4',
                'body'              => 'Like so; foreach($array as $element){}.',
                'creation_date'     => date('Y-m-d H:i:s'),
                'user_display_name' => 'JohnDoe01',
                'user_id'           => '1',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            )
        );

        // Uncomment the below to run the seeder
        DB::table('comments')->insert($comments);
    }

}