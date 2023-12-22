<?php

use App\Models\User;
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
        Schema::table('user', function (Blueprint $table) {
            // Create a user
            $user1 = User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@local.com',
                'phone_number' => '081234567890',
                'username' => '081234567890',
                'password' => bcrypt('supmakanan123'),
            ]);
            // Assign roles to the user
            $user2 = User::create([
                'name' => 'Admin',
                'phone_number' => '081234567891',
                'username' => '081234567891',
                'email' => 'admin@local.com',
                'password' => bcrypt('adminadmin'),
            ]);
            $user3 = User::create([
                'name' => 'Gielbert Whilton',
                'email' => 'gielbert@local.com',
                'phone_number' => '081234567892',
                'username' => '081234567892',
                'password' => bcrypt('password'),
            ]);
            $user1->assignRole('superadmin');
            $user2->assignRole('admin');
            $user3->assignRole('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
};
