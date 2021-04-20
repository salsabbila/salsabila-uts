<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class D111811019_news extends Model
{
    use HasFactory;

    protected $fillable = [
        'id' , 'title' , 'img_url' , 'sub_desc' , 'desc' , 'timestamps' 
    ];
}
