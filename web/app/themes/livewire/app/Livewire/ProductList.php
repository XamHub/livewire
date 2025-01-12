<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class ProductList extends Component
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
        $products = $this->query ? get_posts([
            'post_type' => array('page', 'product', 'post'),
            'post_status' => 'publish',
            's' => $this->query,
        ]) : [];

        $products = collect($products);

        return view('livewire.product-list', compact('products'));
    }
}