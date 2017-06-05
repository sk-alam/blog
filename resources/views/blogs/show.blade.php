@extends('layouts.master')
{{-- Content --}}
@section('content')
    <div class="page-header">
        <h3>
            {{$blog->title}}
        </h3>
    </div>
    <p>
        <span class="glyphicon glyphicon-user"></span> Posted By {{$blog->author}}
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{date('F d, Y h:i A', strtotime($blog->published_at))}}</p>

    <div class="form-group col-md-12">
        <p>{{$blog->body}}</p>
    </div>

<div class="form-group col-md-12">
    <div class="pull-right">
        <a href ="{{url('/')}}"class="btn btn-sm btn-warning">
            <span class="glyphicon glyphicon-ban-circle"></span> Back to List
        </a>
    </div>
</div>

@stop