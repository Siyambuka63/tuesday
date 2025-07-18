<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // This allows assignment for the "title" field
        'status', // This allows assignment for the "status" field
        'priority', // This allows assignment for the "priority" field
        'description', // This allows assignment for the "description" field
        'due_date', // This allows assignment for the "due_date" field
        'assigned_to', // This allows assignment for the "assigned_to" field
        'role', // This allows assignment for the "role" field
        'user_id', // This allows assignment for the "user_id" field
        'board_id', // This allows assignment for the "board_id" field
    ];

    // Relationship with User model
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
        
    }

    // Define the relationship with boards
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
}
