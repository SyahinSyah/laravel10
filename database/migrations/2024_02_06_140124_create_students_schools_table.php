<?php

use App\Models\Schools;
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
        Schema::create('students_schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('students_id')->unsigned();
            $table->unsignedBigInteger('schools_id')->unsigned();

            $table->foreign('students_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('schools_id')->references('id')->on('students')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_schools');
    }
};
