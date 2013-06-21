<?php

class TagsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tags')->delete();

        $tags = array(
            array(
                'id'              => 1,
                'name'            => 'Tag 1',
                'count'           => '1',
                'excerpt_post_id' => '',
                'wiki_post_id'    => '',
                'updated_at'      => date('Y-m-d H:i:s'),
                'created_at'      => date('Y-m-d H:i:s'),
            ),
            array(
                'id'              => 2,
                'name'            => 'Tag 2',
                'count'           => '1',
                'excerpt_post_id' => '',
                'wiki_post_id'    => '',
                'updated_at'      => date('Y-m-d H:i:s'),
                'created_at'      => date('Y-m-d H:i:s'),
            )
        );

        // Uncomment the below to run the seeder
        DB::table('tags')->insert($tags);
    }

}