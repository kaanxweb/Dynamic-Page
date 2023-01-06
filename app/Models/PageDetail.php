<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageDetail extends Model
{
    use HasFactory;

    protected $table = 'page_details';
    protected $fillable = [
    'page_id', 
    'name', 
    'title',
    'slug',
    'lang',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    
}
