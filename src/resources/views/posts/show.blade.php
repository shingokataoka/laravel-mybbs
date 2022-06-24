<x-layout>

    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>

    <h1>
        <span>{{ $post->title }} - My BBS</span>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
    </h1>

    <p class="back-link">
        <a href="{{ route('posts.index') }}"> &laquo; Back</a>
    </p>

    <p class="body">{!! nl2br(e($post->body)) !!}</p>


    <h2>Comments</h2>

    <form action="{{ route('comments.store', $post) }}" method="post" class="comment-form">
        @csrf
        <input type="text" name="body" value="{{ old('body') }}">
        <button name="form-btn">Comment</button>
    </form>
    @error('body')
        <p class="error">{{ $message }}</p>
    @enderror

    <ul>
        @forelse ($post->comments()->latest()->get() as $comment)
            <li>
                <span class="comment">{{ $comment->body }}</span>
                <span class="created_at">{{ $comment->created_at }}</span>
                <form action="{{ route('comments.destroy', $comment) }}" method="post" class="destroy-form">
                    @csrf
                    @method('DELETE')
                    <button name="delete_btn">[x]</button>
                </form>
            </li>
        @empty
            <li>まだこの記事にコメントはありません。</li>
        @endforelse
    </ul>

</x-layout>
