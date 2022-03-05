<?php

namespace App\Interfaces;

use app\Models\Post;

interface SocialMediaServiceInterface{
    public function share(Post $post);
}
