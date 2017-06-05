@extends('layouts.master')

{{-- Content --}}
@section('content')
    @if(count($blogs) > 0)
    @foreach($blogs as $blog)
        <div class="row">
            <div class="col-md-12">
                <h2>
                    <a href="{{url('/blog/show/'.$blog->id)}}">{{$blog->title}}</a>
                </h2>
                <p class="" style="widht: 100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$blog->body}}</p>
                <p>
                    <span class="glyphicon glyphicon-user"></span> Posted By {{$blog->author}}
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{date('F d, Y h:i A', strtotime($blog->published_at))}}</p>
                <hr>
            </div>
        </div>
    @endforeach
    @else
        <h4>No Blogs Available!</h4>
    @endif
@stop