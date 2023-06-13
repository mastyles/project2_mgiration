<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'people_id',
        'company_id',
        'company_group_id',
        'created_at',
        'updated_at'
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }

    public function people()
    {
        return $this->belongsTo(People::class);
    }

    public function company_groups()
    {
        return $this->belongsToMany(CompanyGroup::class);
    }

}
