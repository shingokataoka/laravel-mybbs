<x-layout>

    <x-slot name="title">
        Add - My BBS
    </x-slot>

    <h1>
        <span>Add - My BBS</span>
    </h1>

    <p class="back-link">
        <a href="{{ route('posts.index') }}"> &laquo; Back</a>
    </p>

    <form action="{{ route('posts.store') }}" method="post" class="post-form">
        @csrf

        <label>
            Title
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </label>
        <label>
            Body
            <textarea name="body">{{ old('body') }}</textarea>
            @error('body')
                <p class="error">{{ $message }}</p>
            @enderror
        </label>
        <div>
            <button name="post-form-btn">Add</button>
        </div>
    </form>


</x-layout>
