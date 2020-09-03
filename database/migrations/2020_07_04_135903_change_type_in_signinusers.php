<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeInSigninusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signinusers', function (Blueprint $table) {
            $table->string('text' ,255)->change();
            $table->string('email' ,255)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('signinusers', function (Blueprint $table) {
            $table->string('text' ,150)->change();
            $table->string('email' ,150)->change();
        });
    }
}
