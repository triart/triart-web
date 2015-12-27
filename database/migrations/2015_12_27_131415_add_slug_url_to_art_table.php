<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugUrlToArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('art', function (Blueprint $table) {
            $table->string('slug_url', 255)->nullable();
            $table->index('slug_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('art', function (Blueprint $table) {
            $table->dropColumn('slug_url');
        });
    }
}
