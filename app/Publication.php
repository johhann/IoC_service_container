<?php

namespace App;

use App\Models\Post;
use App\Interfaces\SocialMediaServiceInterface;

class Publication {
    protected $socialMediaService;

    public function __construct(SocialMediaServiceInterface $socialMediaService)
    {
        $this->socialMediaService = $socialMediaService;
    }

    //

}
