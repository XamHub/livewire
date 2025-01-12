@php
$menu_items = get_field('menu_items', 'options');
@endphp

<header class="bg-white border-b border-black/70 py-4 z-10 sticky top-0">
  <div class="max-w-7xl px-4 mx-auto flex justify-between items-center gap-4">
    <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    <div class="flex items-center gap-4 relative">
      <nav>
          @foreach($menu_items as $menu_item)
            <a href="{{ $menu_item['link']['url'] }}" wire:navigate.hover>
              {{ $menu_item['link']['title'] }}
            </a>
          @endforeach
        </nav>

      <livewire:product-list />
    </div>
  </div>
</header>
