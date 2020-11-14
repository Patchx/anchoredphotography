<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('contact_forms');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',100)->default('');
            $table->string('email',100)->default('');
            $table->string('message',255)->default('');
            $table->dateTime('emailed_to_self', 0)->nullable();
        });
    }
}
