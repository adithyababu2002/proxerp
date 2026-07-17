<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    'title',
    'image',
    'heading',
    'paragraph',
    'author_id',
];
public function author()
{
    return $this->belongsTo(Team::class, 'author_id');
}


}
