<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    use HasFactory;

    public $table = 'properties';

    protected $fillable = [
        'user_id',
        'price',
        'propertyType',
        'condominium',
        'iptu',
        'street',
        'city',
        'neighborhood',
        'number',
        'state',
        'squareMeters',
        'bedrooms',
        'bathroom',
        'carSpaces',
        'description',
        'sold',
        'mainPhoto',
        'photos',
    ];

    protected $casts = [
        'photos' => 'array'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function sold() {
        return $this->belongsTo(Sold::class);
    }

}
