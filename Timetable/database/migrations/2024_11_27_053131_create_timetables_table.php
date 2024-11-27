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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();   
            $table->string('class');
            $table->integer('days');
            $table->integer('periods');
            $table->time('time');
            $table->integer('duration');
            $table->integer('breaks');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};



// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateUsersTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('users', function (Blueprint $table) {
//             $table->id(); // Auto-incrementing ID
//             $table->string('name');
//             $table->string('email')->unique(); // Unique email column
//             $table->string('phone')->nullable(); // Optional phone number column
//             $table->string('password');
//             $table->timestamps(); // Created at and updated at timestamps
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('users');
//     }
// }


?>
