<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $connection = 'pamthuzi_main_site';

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
