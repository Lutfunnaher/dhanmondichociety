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
            $table->string('road')->nullable();
            $table->text('address')->nullable();
            $table->string('nid')->nullable();
            $table->string('nationality')->default('Bangladeshi');
            $table->string('occupation')->nullable();
            $table->string('bgroup')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('dob')->nullable();
            $table->string('dom')->nullable();
            $table->string('telephone_res')->nullable();
            $table->string('mobile')->unique();
            $table->string('workplace')->nullable();
            $table->string('email')->unique();
            // contact person
            $table->string('contact_person')->nullable();
            $table->string('cp_relation')->nullable();
            $table->string('cp_telephone')->nullable();
            $table->string('cp_mobile')->nullable();
            // member category
            $table->string('category_of_membership')->nullable();
            // payment info
            $table->string('payment_type')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('cheque_number')->nullable();
            $table->string('cheque_date')->nullable();
            // introduce
            $table->string('intro_member_id')->nullable();
            $table->string('how_long_know')->nullable();
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
