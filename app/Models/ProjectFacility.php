<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFacility extends Model
{
    protected $table = 'project_facility';
    use HasFactory;

    public function facility()
    {
        return $this->belongsTo(Facilities::class, 'facility_id');
    }
     
}
