<ol>
    @forelse ($items as $item)
        <li>{{ $item->name }}</li>
    @empty
        <p>No items found</p>
    @endforelse
</ol>


