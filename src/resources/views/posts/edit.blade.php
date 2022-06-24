<x-layout>

    <x-slot name="title">
        Edit - {{ $post->title }} - My BBS
    </x-slot>

    <h1>
        <span>Edit - {{ $post->title }} - My BBS</span>
    </h1>

    <p class="back-link">
        <a href="{{ route('show', $post) }}"> &laquo; Back</a>
    </p>

    <form action="{{ route('update', $post) }}" method="post" class="post-form">
        @method('PATCH')
        @csrf

        <label>
            Title
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </label>
        <label>
            Body
            <textarea name="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
                <p class="error">{{ $message }}</p>
            @enderror
        </label>
        <div>
            <button name="post-form-btn">Update</button>
        </div>
    </form>


</x-layout>
