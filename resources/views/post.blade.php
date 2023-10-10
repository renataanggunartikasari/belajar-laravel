@extends('layouts.main')

@section('container')

    
        <h1 class="mb-5">{{ $post->title }}</h1>

        <P>By. Renata Anggun A.S in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></P>

        {!! $post->body !!}
        

        <a href="/blog">Back to Posts</a>
      
        
@endsection

