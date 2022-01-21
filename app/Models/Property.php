<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titre',
        'image',
        'description',
        'capacite',
        'tarifs',
        'taxes_sejour',
        'options_possibles',
        'autre_option',
        'photos',
        'tag',
        'dates'
    ];

}
