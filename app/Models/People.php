<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'birthdate',
        'address',
        'manager_id',
        'employee_id',
        'created_at',
        'updated_at'
    ];

    public function managers()
    {
        return $this->belongsTo(Manager::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
