<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    protected $table = 'unit_type';
    use HasFactory;


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function propertytype()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

}
