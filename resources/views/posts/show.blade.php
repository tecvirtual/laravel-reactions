@extends('layouts.app')

@section('content')
    
        <div class="d-flex justify-content-center bg-white shadow-md  " >
                <div class="card">
                    <h2>{{ $post->title }}</h2><br>

                     <h1>{{ $post->body }}</h1>
                </div>                

             <div>
                <reactions-component
                :summary='@json($post->reactionSummary())'
                @auth
                    :reacted='@json($post->reacted())'
                @endauth                
                ></reactions-component>
            </div>

        </div>  
             
@endsection
