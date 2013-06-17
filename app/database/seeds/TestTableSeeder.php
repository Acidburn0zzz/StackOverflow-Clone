<?php

class TestTableSeeder extends Seeder {

    public function run()
    {
        DB::table('VoteTypes')->delete();

        DB::table('VoteTypes')->insert(
            array('id' => 1, 'Name' => "TestName")
        );
    }

}