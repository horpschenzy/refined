<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('head_member', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('head_id');
            $table->unsignedBigInteger('application_id');

            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
            $table->foreign('head_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('head_member', function (Blueprint $table) {
            //
        });
    }
}
