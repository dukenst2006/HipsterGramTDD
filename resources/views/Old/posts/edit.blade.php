@extends('layouts.app')

@section('content')

@component('layouts/posts/_postform')
    @slot('method')
        {{ method_field('PATCH') }}
    @endslot

    @slot('header')
        Edit Post
    @endslot

    @slot('title')
        {{ $post->title }}
    @endslot

    @slot('content')
        {{ $post->content }}
    @endslot

    @slot('action')
        "/Posts/{{ $post->id }}"
    @endslot

    @slot('btnName')
        Update Post
    @endslot
@endcomponent

  
@endsection
