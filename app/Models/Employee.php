<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identification',
        'birth',
        'salary',
        'martial_status',
        'bonus',
        'order',
        'user_id',
        'department_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'birth' => 'datetime',
        'salary' => 'integer',
        'bonus' => 'decimal:2',
        'order' => 'integer',
        'user_id' => 'integer',
        'department_id' => 'integer',
    ];


    public function projects()
    {
        return $this->belongsToMany(\App\Models\Project::class);
    }

    public function contactinfo()
    {
        return $this->hasOne(\App\Models\Contactinfo::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }
}
