<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('member_id');
            $table->string('membership_number')->nullable();
            $table->string('children_name')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            // $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');php
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
        Schema::dropIfExists('childrens');
    }
}
