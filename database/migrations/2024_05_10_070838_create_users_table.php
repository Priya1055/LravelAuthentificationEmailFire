<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_table', function (Blueprint $table) {
            $table->id();
            $table->string('Uname');
            $table->string('Designation');
            $table->decimal('Sallary', 10, 2); // Assuming Sallary is a decimal field with 10 digits and 2 decimals
            $table->date('JoiningDate'); // Assuming JoiningDate is a date field
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
        Schema::dropIfExists('users');
    }
};
