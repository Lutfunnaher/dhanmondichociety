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
            $table->string('membership_number');
            $table->string('current_membership_number');
            // introduce
            $table->string('introduce_member_id')->nullable();
            $table->string('member_type')->default('non-executive');
            $table->string('membership_category_id');
            $table->string('name');
            $table->string('position')->nullable();
            $table->string('father_name');
            $table->string('mother_name')->nullable();
            $table->string('spouse_ame')->nullable();
            $table->string('road_no')->nullable();
            $table->text('address')->nullable();
            $table->string('nid_no');
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('date_of_birth');
            $table->string('date_of_marriage')->nullable();
            $table->string('telephone_res')->nullable();
            $table->string('workplace')->nullable();
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            // contact person
            $table->string('contact_person_name')->nullable();
            $table->string('relation')->nullable();
            $table->string('contact_person_telephone')->nullable();
            $table->string('contact_person_mobile')->nullable();
            $table->string('how_long_known')->nullable();
            // image
            $table->string('image')->nullable();
            $table->string('status')->default(1);
            $table->string('order_by')->nullable();
            $table->string('entry_by')->nullable();
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
