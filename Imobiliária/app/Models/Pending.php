<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pending extends Model
{

    use HasFactory;
    
    public $table = 'pending';

    protected $fillable = [
        'property_id',
        'name',
        'email',
        'phone',
        'pending',
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }

}
