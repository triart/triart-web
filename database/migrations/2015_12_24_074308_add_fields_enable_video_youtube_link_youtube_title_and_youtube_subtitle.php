<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsEnableVideoYoutubeLinkYoutubeTitleAndYoutubeSubtitle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('website_content', function (Blueprint $table) {
            $table->boolean('enable_video')->default(0);
            $table->string('youtube_link', 255)->nullable();
            $table->string('youtube_title', 255)->nullable();
            $table->string('youtube_subtitle', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website_content', function (Blueprint $table) {
            $table->dropColumn(['enable_video', 'youtube_link', 'youtube_title', 'youtube_subtitle']);
        });
    }
}
