<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('posts.{id}', function ($id) {
    return true;
});
