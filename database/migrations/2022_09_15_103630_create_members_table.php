<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            // member
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname')->nullable();
            $table->string('member_id');
            $table->string('road');
            $table->text('address');
            $table->string('nid');
            $table->string('nationality')->default('bangladeshi');
            $table->string('occupation');
            $table->string('bgroup');
            $table->string('marital_status');
            $table->string('dob');
            $table->string('dom');
            $table->string('telephone_res');
            $table->string('mobile')->unique();
            $table->string('workplace');
            $table->string('email')->unique();
            // contact person
            $table->string('contact_person')->nullable();
            $table->string('cp_relation')->nullable();
            $table->string('cp_telephone')->nullable();
            $table->string('cp_mobile')->nullable();
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
        Schema::dropIfExists('members');
    }
}
