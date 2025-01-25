<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Himada extends Model
{
    use HasFactory;

    protected $table = 'himadas';

    protected $fillable = [
        'name',
        'kepanjangan',
        'daerah',
        'logo',
        'instagram',
    ];

    public function island()
    {
        return $this->belongsTo(Island::class, 'id');
    }
}
