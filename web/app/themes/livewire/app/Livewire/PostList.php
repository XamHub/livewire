<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class PostList extends Component
{
    /**
     * The search query.
     */
    #[Url]
    public string $query = '';

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $posts = $this->query ? get_posts([
            'post_type' => 'post',
            'post_status' => 'publish',
            's' => $this->query,
        ]) : [];

        $posts = collect($posts);

        return view('livewire.post-list', compact('posts'));
    }
}