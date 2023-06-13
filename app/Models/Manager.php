<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_id',
        'people_id',
        'created_at',
        'updated_at'
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }

    public function people()
    {
        return $this->hasMany(People::class);
    }

}
