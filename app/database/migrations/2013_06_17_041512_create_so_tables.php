<?php

use Illuminate\Database\Migrations\Migration;

class CreateSoTables extends Migration {

    /*
     * Users -> hasMany('Posts', 'Badges')
     * Posts -> belongsTo('Users'), hasMany('Comments', 'PostTags', 'Votes'), hasOne('PostTypes')
     * Comments -> belongsTo('Posts', 'Votes')
     * Badges
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
     */

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Posts', function($table) {
            $table->increments('Id');
            $table->integer('PostTypeId');
            $table->integer('AcceptedAnswerId');
            $table->integer('ParentId');
            $table->datetime('CreationDate');
            $table->integer('Score');
            $table->integer('ViewCount');
            $table->text('Body');
            $table->integer('OwnerUserId');
            $table->string('OwnerDisplayName', 40);
            $table->integer('LastEditorUserId');
            $table->string('LastEditorDisplayName', 40);
            $table->datetime('LastEditDate');
            $table->datetime('LastActivityDate');
            $table->string('Title', 250);
            $table->string('Tags', 150);
            $table->integer('AnswerCount');
            $table->integer('CommentCount');
            $table->integer('FavoriteCount');
            $table->datetime('ClosedDate');
            $table->datetime('CommunityOwnedDate');
        });    
        
        Schema::create('Users', function($table) {
            $table->increments('Id');
            $table->integer('Reputation');
            $table->datetime('CreationDate');
            $table->string('DisplayName', 40);
            $table->datetime('LastAccessDate');
            $table->string('WebsiteUrl', 200);
            $table->string('Location', 100);
            $table->text('AboutMe');
            $table->integer('Views');
            $table->integer('UpVotes');
            $table->integer('DownVotes');
            $table->string('EmailHash', 64);
            $table->integer('Age');
        });
        
        Schema::create('Comments', function($table) {
            $table->increments('Id');
            $table->integer('PostId');
            $table->integer('Score');
            $table->text('Text');
            $table->datetime('CreationDate');
            $table->string('UserDisplayName', 30);
            $table->integer('UserId');
        });
        
        Schema::create('Badges', function($table) {
            $table->increments('Id');
            $table->integer('UserId');
            $table->string('Name', 50);
            $table->datetime('Date');
        });
        
        Schema::create('PostFeedback', function($table) {
            $table->increments('Id');
            $table->integer('PostId');
            $table->boolean('IsAnonymous');
            $table->integer('VoteTypeId');
            $table->datetime('CreationDate');
        });
        
        Schema::create('PostHistory', function($table) {
            $table->increments('Id');
            $table->integer('PostHistoryTypeId');
            $table->integer('PostId');
            $table->integer('RevisionGUID'); // uniqueidentifier
            $table->datetime('onDate');
            $table->integer('UserId');
            $table->string('UserDisplayName', 40);
            $table->text('Comment');
            $table->text('Text');
        });
            
        Schema::create('PostHistoryTypes', function($table) {
            $table->increments('Id');
            $table->string('Name', 50);
        });
            
        Schema::create('PostTags', function($table) {
            $table->integer('PostId');  
            $table->integer('TagId');
        });
            
        Schema::create('PostTypes', function($table) {        
            $table->increments('Id');
            $table->string('Name', 50);
        });

        Schema::create('SuggestedEdits', function($table) {
            $table->increments('Id');
            $table->integer('PostId');
            $table->datetime('CreationDate');
            $table->datetime('ApprovalDate');
            $table->datetime('RejectionDate');
            $table->integer('OwnerUserId');
            $table->text('Comment');
            $table->text('Text');
            $table->string('Title', 250);
            $table->string('Tags', 150);
            $table->integer('RevisionGUID'); // uniqueidentifier
        });

        Schema::create('SuggestedEditVotes', function($table) {
            $table->increments('Id');
            $table->integer('SuggestedEditId');
            $table->integer('UserId');
            $table->integer('VoteTypeId');
            $table->datetime('CreationDate');
            $table->integer('TargetUserId');
            $table->integer('TargetRepChange');
        });

        Schema::create('Tags', function($table) {
            $table->increments('Id');
            $table->string('TagName', 25);
            $table->integer('Count');
            $table->integer('ExcerptPostId');
            $table->integer('WikiPostId');
        });

        Schema::create('TagSynonyms', function($table) {
            $table->increments('Id');
            $table->string('SourceTagName', 25);
            $table->string('TargetTagName', 25);
            $table->datetime('CreationDate');
            $table->integer('OwnerUserId');
            $table->integer('AutoRenameCount');
            $table->datetime('LastAutoRename');
            $table->integer('Score');
            $table->integer('ApprovedByUserId');
            $table->datetime('ApprovalDate');
        });

        Schema::create('Votes', function($table) {
            $table->increments('Id');
            $table->integer('PostId');
            $table->integer('VoteTypeId');
            $table->integer('UserId');
            $table->datetime('CreationDate');
            $table->integer('BountyAmount');
        });

        Schema::create('VoteTypes', function($table) {
            $table->increments('Id');
            $table->string('Name', 50);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Users');
        Schema::drop('Posts');
        Schema::drop('Comments');
        Schema::drop('Badges');
        Schema::drop('PostFeedback');
        Schema::drop('PostHistory');
        Schema::drop('PostHistoryTypes');
        Schema::drop('PostTags');
        Schema::drop('PostTypes');
        Schema::drop('SuggestedEdits');
        Schema::drop('SuggestedEditVotes');
        Schema::drop('Tags');
        Schema::drop('TagSynonyms');
        Schema::drop('Votes');
        Schema::drop('VoteTypes');
	}

}