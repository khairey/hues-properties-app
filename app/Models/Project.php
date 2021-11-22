<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Project extends Model
{
    protected $table = 'project';
    use HasFactory;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function developer()
{
    return $this->belongsTo(Developers::class, 'developer_id');
}
    public function district()
{
    return $this->belongsTo(District::class, 'district_id');
}


}
