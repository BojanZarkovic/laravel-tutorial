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
     * Create a new component instance.
     *
     * @return void
     * @param  \App\Models\Post  $post
     * @param  string  $size
     */
    public function __construct(\App\Models\Post $post, string $size)
    {
        $this->post = $post;
        $this->size = $size;
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
