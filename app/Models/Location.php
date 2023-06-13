<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'country',
        'zipcode',
        'company_id',
        'created_at',
        'updated_at'
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }
}
