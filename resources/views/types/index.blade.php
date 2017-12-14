<ol>
        @forelse ($items as $item)
                <li>{{ $item->title }}</li>
        @empty
        <p>No items found</p>
        @endforelse
</ol>


