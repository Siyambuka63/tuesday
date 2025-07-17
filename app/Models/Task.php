<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // This allows assignment for the "title" field
        'description', // This allows assignment for the "description" field
        'status', // This allows assignment for the "status" field
        'due_date', // This allows assignment for the "due_date" field
        'priority', // This allows assignment for the "priority" field
        'assigned_to', // This allows assignment for the "assigned_to" field
        'user_id', // This allows assignment for the "user_id" field
        'role', // This allows assignment for the "role" field
    ];

    // Relationship with User model
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
