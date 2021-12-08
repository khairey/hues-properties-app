<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteData extends Model
{
    protected $fillable = ['company_name', 'video', 'about_title', 'about_sub_title', 'about_details', 'services_details', 'team_details', 'office_location', 'address', 'longitude', 'latitude'];

    protected $table = 'websitedata';
    use HasFactory;
}
