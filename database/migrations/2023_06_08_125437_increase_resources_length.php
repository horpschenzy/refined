<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncreaseResourcesLength extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->longText('file_name')->change();
            $table->longText('picture')->change();
            $table->longText('url')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->string('file_name', 255)->change();
            $table->string('picture', 255)->change();
            $table->string('url', 255)->change();
        });
    }
}
