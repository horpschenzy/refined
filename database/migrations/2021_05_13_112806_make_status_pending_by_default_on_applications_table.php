<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class MakeStatusPendingByDefaultOnApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            // $table->enum('status',['pending', 'approved', 'rejected'])->nullable(false)->default('pending')->change();
            DB::statement("ALTER TABLE applications MODIFY COLUMN status enum('pending', 'approved', 'rejected') NOT NULL");
            DB::statement("ALTER TABLE applications ALTER status SET DEFAULT 'pending'");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            DB::statement("ALTER TABLE applications MODIFY COLUMN status enum('pending', 'approved', 'rejected') NULL");
            DB::statement("ALTER TABLE applications ALTER status SET DEFAULT NULL");
        });
    }
}
