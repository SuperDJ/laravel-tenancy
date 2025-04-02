<?php

namespace App\Models\Tenant;

class Post extends Model
{
    protected $connection = 'tenant';

    protected $fillable = ['title', 'description'];
}