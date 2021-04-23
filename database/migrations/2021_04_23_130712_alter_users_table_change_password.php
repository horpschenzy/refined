<?php

use App\User;
use App\Models\Application;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableChangePassword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $applicants = Application::where('firstname','!=','Admin')->get();
            foreach ($applicants as $key => $applicant) {
                $password = Hash::make(strtolower($applicant->lastname.$applicant->id));
                User::where('application_id', $applicant->id)->update(['password' => $password]);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
