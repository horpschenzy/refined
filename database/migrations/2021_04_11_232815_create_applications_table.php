<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('telegram_phone')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('gender')->nullable();
            $table->string('agerange')->nullable();
            $table->enum('prefer_com', ['Email', 'Telegram'])->nullable()->default('Email');
            $table->string('advert')->nullable();
            $table->enum('setman', ['yes', 'no'])->nullable()->default('yes');
            $table->enum('born_again', ['yes', 'no'])->nullable()->default('yes');
            $table->string('yearbornagain')->nullable();
            $table->enum('holyghost', ['yes', 'no'])->nullable()->default('yes');
            $table->string('church')->nullable();
            $table->string('departmentchurch')->nullable();
            $table->enum('pastor_wife', ['yes', 'no'])->nullable()->default('yes');
            $table->enum('take_refined', ['yes', 'no'])->nullable()->default('yes');
            $table->enum('denied_admission', ['yes', 'no'])->nullable()->default('yes');
            $table->string('yearofattendance')->nullable();
            $table->enum('graduate_refined', ['yes', 'no'])->nullable()->default('yes');
            $table->string('retake')->nullable();
            $table->string('expectation')->nullable();
            $table->enum('status', ['pending', 'approved'])->nullable()->default('pending');
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
