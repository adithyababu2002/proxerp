<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     protected $fillable = [
        'name',        // Team member name
        'profession',  // Role / designation
        'description', // About team member
        'link',        // Profile link (LinkedIn / website)
        'image1',      // Profile image
        'image2',      // Secondary image
        'status',      // Active / Inactive
    ];
}
