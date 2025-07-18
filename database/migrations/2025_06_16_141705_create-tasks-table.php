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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the task
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->string('status'); // pending, in_progress, completed
            $table->string('assigned_to')->nullable(); // Name of the person assigned to the task
            $table->string('role')->nullable(); // Add the "role" column
            $table->string('priority'); // low, medium, high
            $table->date('due_date')->nullable(); // Due date for the task
            $table->longText('description')->nullable(); // Description of the task
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
    
};
