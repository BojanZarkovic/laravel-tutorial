<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{

    /**
     * The post.
     *
     * @var \App\Models\Post
     */
    public $post;

    /**
     * The number of bootstrap columns.
     *
     * @var string
     */
    public $size;

    /**
     * Is preview of a post or a full post?
     *
     * @var bool
     */
    public $isPreview;

    /**
     * Create a new component instance.
     *
     * @return void
     * @param  \App\Models\Post  $post
     * @param  string  $size
     * @param  bool  $isPreview
     */
    public function __construct(\App\Models\Post $post, string $size, bool $isPreview)
    {
        $this->post = $post;
        $this->size = $size;
        $this->isPreview = $isPreview;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.post');
    }
}
