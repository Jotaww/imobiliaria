<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    use HasFactory;

    public $table = 'sold';

    public function property() {
        return $this->belongsTo(Property::class);
    }

}
