<div>
    <input
      wire:model.live="query"
      type="text"
      placeholder="Zoek berichten..."
    >
  
    @if ($query)
      @if ($posts)
        <p>Er zijn {{ $posts->count() }} resultaten gevonden voor "{{ $query }}"</p>
  
        <ul>
          @foreach ($posts as $post)
            <li>
              <a href="{{ get_permalink($post->ID) }}">
                {{ $post->post_title }}
              </a>
            </li>
          @endforeach
        </ul>
      @else
        <p>Geen resultaten gevonden voor "{{ $query }}"</p>
      @endif
    @else
      <p>Begin met typen om te zoeken...</p>
    @endif
  </div>