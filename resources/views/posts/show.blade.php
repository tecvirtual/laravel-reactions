@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="h-48 flex flex-wrap content-center">
            <div class="shadow-md">
                <h2>{{ $post->title }}</h2><br>

                 <h1>{{ $post->body }}</h1> 
            </div>                                           
        </div>
    </div>    
@endsection
