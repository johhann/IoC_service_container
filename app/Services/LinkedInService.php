<?php

namespace App\Services;

use App\Models\Post;
use App\Interfaces\SocialMediaServiceInterface;

class LinkedInService implements SocialMediaServiceInterface {

    public function share(Post $post)
    {
        return 'shared on LinkedIn!';
    }
}
