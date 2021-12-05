<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table = 'property_type';
    use HasFactory;

    public function propertytype()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }
    
}
