<x-layout>

    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>

    <h1>
        <span>Add - My BBS</span>
        <a href="{{ route('edit', $post) }}">Edit</a>
    </h1>

    <p class="back-link">
        <a href="{{ route('index') }}"> &laquo; Back</a>
    </p>

    <p class="body">{!! nl2br(e($post->body)) !!}</p>

</x-layout>
