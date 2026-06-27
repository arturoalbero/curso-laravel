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
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedInteger('emp_id')->primary();
            #emp_firstname	string(100)	Nombre del empleado. No nulo.
            $table->string('emp_firstname', 100)->notNullable();
            #emp_lastname	string(100)	Apellidos del empleado. No nulo.
            $table->string('emp_lastname', 100)->notNullable();
            #emp_birth_date	date	Fecha de nacimiento. No nulo.
            $table->date('emp_birth_date')->notNullable();
            #emp_hire_date	date	Fecha de contratación. No nulo.
            $table->date('emp_hire_date')->notNullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
