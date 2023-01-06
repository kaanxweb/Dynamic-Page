<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $fillable = [
        'access_name',
    ];

    public function pageDetails()
    {
        return $this->hasMany(PageDetail::class);
    }
}
