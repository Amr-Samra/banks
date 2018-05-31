<?php

namespace Bdwey\Banks\Model;


use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    public $table = 'banks';

    public $fillable = [
        'user_id',
        'bank_name',
        'account_number',
        'is_main',
        'is_active',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id'           => 'integer',
        'bank_name'         => 'string',
        'account_number'    => 'string',
        'is_main'           => 'boolean',
        'is_active'         => 'boolean',
        'notes'             => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'user_id'           => 'required|integer|exists:users,id',
        'bank_name'         => 'required|string',
        'account_number'    => 'required|string',
        'is_main'           => 'nullable|boolean',
        'is_active'         => 'nullable|boolean',
        'notes'             => 'nullable|string'
    ];

    public function scopeMain($query)
    {
        return $query->where('is_main', 1);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
