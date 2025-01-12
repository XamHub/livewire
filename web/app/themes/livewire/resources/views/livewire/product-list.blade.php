<div>
    <input
      wire:model.live="query"
      type="text"
      placeholder="Waar ben je naar op zoek?"
      class="p-2 border border-black/70 h-12 min-w-60"
    >
  
    @if ($query)
      @if ($products)
      <div class="absolute w-full top-full right-0 px-3 py-2 border border-black/70 bg-white mt-1 transition duration-150 z-10">
        <ul class="grid gap-0.5">
          @foreach ($products as $product)
            <li>
              <a href="{{ get_permalink($product->ID) }}">
                {{ $product->post_title }}
              </a>
            </li>
          @endforeach
        </ul>
      @else
        <p>Geen resultaten gevonden voor "{{ $query }}"</p>
      </div>
      @endif
    @endif
  </div>