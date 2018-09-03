<?php

namespace App;

class Post extends \TCG\Voyager\Models\Post
{
    public function getPermalinkAttribute()
    {
        return '/blog/' . $this->slug;
    }
}
