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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            $table->string('name',100);
            $table->string('email',100);
            $table->string('phone_number',15);
            $table->string('username',100)->unique();
            $table->string('password',64);
            $table->timestamp('last_login_at')->useCurrent();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('group_id');
            $table->enum('is_active',['1','0']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
