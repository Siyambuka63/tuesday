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
            $table->string('title');
            $table->string('status'); // pending, in_progress, completed
            $table->string('assigned_to')->nullable(); // Name of the person assigned to the task
            $table->string('priority'); // low, medium, high
            $table->date('due_date')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->string('role')->nullable()->after('assigned_to'); // Add the "role" column

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
