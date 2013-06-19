<?php

class PostTypesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('post_types')->delete();

        $posttypes = array(
            array(
                'name'       => 'Question',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'name'       => 'Answer',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            )
        );

        // Uncomment the below to run the seeder
        DB::table('post_types')->insert($posttypes);
    }

}