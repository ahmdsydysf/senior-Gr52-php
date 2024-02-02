<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->id('user_my_num'); // id   AI , big integer , unsigned , primaryKey , not null
            // // $table->bigInteger()->autoIncrement()->unsigned()-; // AI , big integer , unsigned , primaryKey , not null
            // $table->string('name', 15);
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password')->default('Password123')->nullable();
            // $table->char('currency', 3);
            // $table->rememberToken();
            // $table->text('msg')->nullable();
            // $table->enum('status', ['active' , 'notActive'])->comment('active mean = 0 & not active mean = 1');
            // $table->string('image')->default('default.png');

            // $table->timestamps();
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('Password123')->nullable();
            $table->rememberToken();
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
