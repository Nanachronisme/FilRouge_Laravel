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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 110)->nullable(); //slug will contain firstname and last name separated with '-'
            $table->string('teaFirstName', 50);
            $table->string('teaName', 50);
            $table->string('teaNickName', 50);
            $table->char('teaGender', 1);
            $table->text('teaOrigin')->nullable();
            $table->foreignId('section_id')->constrained();
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
        Schema::dropIfExists('teachers');
    }
};
