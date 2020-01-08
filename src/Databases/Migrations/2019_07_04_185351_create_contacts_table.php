<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{

    public function up()
    {
        Schema::create('contact_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->tinyInteger('order');
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->morphs('contactable');
            $table->string('content')->nullable();
            $table->timestamps();

            $table->foreign('type_id')
                ->references('id')
                ->on('contact_types')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('contact_types');
    }
}
