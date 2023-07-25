<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utlisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_user');
            $table->string('prenom_user');
            $table->integer('age_user');
            $table->string('mail_user');
            $table->mediumText('description_user');
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
        Schema::dropIfExists('utlisateurs');
    }
};
