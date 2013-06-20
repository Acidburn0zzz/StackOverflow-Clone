<?php

use Illuminate\Database\Migrations\Migration;

class CreateSoTables extends Migration {

    /*
     * Users -> hasMany('Posts', 'Badges')
     * Posts -> belongsTo('Users'), hasMany('Comments', 'PostTags', 'Votes'), hasOne('PostTypes')
     * Comments -> belongsTo('Posts', 'Votes')
     * Badges -> belongsTo('User')
     * PostFeedback
     * PostHistory
     * PostHistoryTypes
     * PostTags
     * PostTypes
     * SuggestedEdits
     * SuggestedEditVotes
     * Tags
     * TagSynonyms
     * Votes -> hasOne('VoteTypes')
     * VoteTypes -> belongsTo('Votes')
     * Providers (Social accounts)
     */

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table) {
            $table->increments('id');
            $table->integer('post_type_id');
            $table->integer('accepted_answer_id');
            $table->integer('parent_id');
            $table->datetime('creation_date');
            $table->integer('score');
            $table->integer('view_count');
            $table->text('body');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('owner_display_name', 40);
            $table->integer('last_editor_user_id');
            $table->string('last_editor_display_name', 40);
            $table->datetime('last_edit_date');
            $table->datetime('last_activity_date');
            $table->string('title', 250);
            $table->string('tags', 150);
            $table->integer('answer_count');
            $table->integer('comment_count');
            $table->integer('favorite_count');
            $table->datetime('closed_date');
            $table->datetime('community_owned_date');
            $table->timestamps();
        });    
        
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->integer('reputation');
            $table->datetime('creation_date');
            $table->string('display_name', 40);
            $table->datetime('last_access_date');
            $table->string('website_url', 200);
            $table->string('location', 100);
            $table->text('about_me');
            $table->integer('views');
            $table->integer('up_votes');
            $table->integer('down_votes');
            $table->string('email', 160);
            $table->integer('age');
            $table->timestamps();
        });
        
        Schema::create('comments', function($table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('score');
            $table->text('body');
            $table->datetime('creation_date');
            $table->string('user_display_name', 30);
            $table->integer('user_id');
            $table->timestamps();
        });
        
        Schema::create('badges', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 50);
            $table->datetime('date');
            $table->timestamps();
        });
        
        Schema::create('post_feedback', function($table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->boolean('is_anonymous');
            $table->integer('vote_type_id');
            $table->datetime('creation_date');
            $table->timestamps();
        });
        
        Schema::create('post_history', function($table) {
            $table->increments('id');
            $table->integer('post_history_type_id');
            $table->integer('post_id');
            $table->integer('revision_GUID'); // uniqueidentifier
            $table->datetime('on_date');
            $table->integer('user_id');
            $table->string('user_display_name', 40);
            $table->text('comment');
            $table->text('body');
            $table->timestamps();
        });
            
        Schema::create('post_history_types', function($table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->timestamps();
        });
            
        Schema::create('post_tags', function($table) {
            $table->integer('post_id');  
            $table->integer('tag_id');
            $table->timestamps();
        });
            
        Schema::create('post_types', function($table) {        
            $table->increments('id');
            $table->string('name', 50);
            $table->timestamps();
        });

        Schema::create('suggested_edits', function($table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->datetime('creation_date');
            $table->datetime('approval_date');
            $table->datetime('rejection_date');
            $table->integer('owner_user_id');
            $table->text('comment');
            $table->text('body');
            $table->string('title', 250);
            $table->string('tags', 150);
            $table->integer('revision_GUID'); // uniqueidentifier
            $table->timestamps();
        });

        Schema::create('suggested_edit_votes', function($table) {
            $table->increments('id');
            $table->integer('suggested_edit_id');
            $table->integer('user_id');
            $table->integer('vote_type_id');
            $table->datetime('creation_date');
            $table->integer('target_user_id');
            $table->integer('target_rep_change');
            $table->timestamps();
        });

        Schema::create('tags', function($table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->integer('count');
            $table->integer('excerpt_post_id');
            $table->integer('wiki_post_id');
            $table->timestamps();
        });

        Schema::create('tag_synonyms', function($table) {
            $table->increments('id');
            $table->string('source_tag_name', 25);
            $table->string('target_tag_name', 25);
            $table->datetime('creation_date');
            $table->integer('user_id');
            $table->integer('auto_rename_count');
            $table->datetime('last_auto_rename');
            $table->integer('score');
            $table->integer('approved_by_user_id');
            $table->datetime('approval_date');
            $table->timestamps();
        });

        Schema::create('votes', function($table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('vote_type_id');
            $table->integer('user_id');
            $table->datetime('creation_date');
            $table->integer('bounty_amount');
            $table->timestamps();
        });

        Schema::create('vote_types', function($table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->timestamps();
        });

        Schema::create('providers', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('provider_name');
            $table->integer('provider_uid');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
        Schema::drop('posts');
        Schema::drop('comments');
        Schema::drop('badges');
        Schema::drop('post_feedback');
        Schema::drop('post_history');
        Schema::drop('post_history_types');
        Schema::drop('post_tags');
        Schema::drop('post_types');
        Schema::drop('suggested_edits');
        Schema::drop('suggested_edit_votes');
        Schema::drop('tags');
        Schema::drop('tag_synonyms');
        Schema::drop('votes');
        Schema::drop('vote_types');
        Schema::drop('providers');
	}

}