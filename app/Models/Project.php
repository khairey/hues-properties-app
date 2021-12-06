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
                'source' => 'title_en'
            ]
        ];
    }

    public function facilities()
{
    return $this->hasMany(ProjectFacility::class, 'project_id');
}
    public function developer()
{
    return $this->belongsTo(Developers::class, 'developer_id');
}
    public function district()
{
    return $this->belongsTo(District::class, 'district_id');
}
    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}
    public function propertytype()
{
    return $this->belongsTo(PropertyType::class, 'property_type_id');
}


}
