<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Island extends Model
{
    use HasFactory;

    protected $table = 'islands';

    protected $fillable = [
        'name'
    ];

    /**
     * Get the himadas associated with the Island
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function himadas()
    {
        return $this->hasMany(Himada::class, 'island_id');
    }
}
