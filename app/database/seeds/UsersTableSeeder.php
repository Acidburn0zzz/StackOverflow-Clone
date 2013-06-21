<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('users')->delete();

        $users = array(
            array(
                'id'               => 1,
                'reputation'       => '50',
                'creation_date'    => date('Y-m-d H:i:s'),
                'display_name'     => 'John Doe',
                'last_access_date' => date('Y-m-d H:i:s'),
                'website_url'      => 'http://www.johndoe.com',
                'location'         => 'New Zealand',
                'about_me'         => 'Im a C++ programmer',
                'views'            => '122',
                'up_votes'         => '11',
                'down_votes'       => '1',
                'email'            => 'johndoe@email.com',
                'age'              => '44',
                'updated_at'       => date('Y-m-d H:i:s'),
                'created_at'       => date('Y-m-d H:i:s')
            ),
            array(
                'id'               => 2,
                'reputation'       => '35',
                'creation_date'    => date('Y-m-d H:i:s'),
                'display_name'     => 'Jane Doe',
                'last_access_date' => date('Y-m-d H:i:s'),
                'website_url'      => 'http://www.janedoe.com',
                'location'         => 'New Zealand',
                'about_me'         => 'Im a Python programmer',
                'views'            => '108',
                'up_votes'         => '19',
                'down_votes'       => '2',
                'email'            => 'janedoe@email.com',
                'age'              => '38',
                'updated_at'       => date('Y-m-d H:i:s'),
                'created_at'       => date('Y-m-d H:i:s')
            )
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}