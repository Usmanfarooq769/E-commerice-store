<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staff_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('pincode')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('education')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_cnic')->nullable();
            $table->string('user_cnic')->nullable();
            $table->string('father_cnic_front')->nullable();
            $table->string('father_cnic_back')->nullable();
            $table->string('user_cnic_front')->nullable();
            $table->string('user_cnic_back')->nullable();
            $table->string('last_degree_file')->nullable();
            $table->text('work_experience')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_details');
    }
};