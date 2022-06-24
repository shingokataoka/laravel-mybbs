<x-layout>

    <x-slot name="title">
        My BBS
    </x-slot>

    <h1>
        <span>My BBS</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>

    <ul>
        @forelse ($posts as $post)
        <li>
            <form action="{{ route('posts.toggle', $post) }}" method="post" class="toggle-form">
                @csrf
                @method('PATCH')
                <input type="checkbox" name="is_done" {{ ($post->is_done)? 'checked' : '' }}>
                <a class="title" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </form>
            <span class="created_at">{{ $post->created_at }}</span>
            <form action="{{ route('posts.destroy', $post) }}" method="post" class="destroy-form">
                @csrf
                @method('DELETE')
                <button name="delete_btn">[x]</button>
            </form>
        </li>
        @empty
            <li class="empty">まだ、投稿記事はありません。</li>
        @endforelse
    </ul>

    <script src="{{ url('js/main.js') }}"></script>


</x-layout>
