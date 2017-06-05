@extends('layouts.master')
{{-- Content --}}
@section('content')
    <div class="page-header">
        <h3>
            {{"Crate/Edit Blog"}}
        </h3>
    </div>

    <form class="form-horizontal" method="post" action="{{ url('/blog/save') }}" autocomplete="off">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="id" value="{{ isset($blog) ? $blog->id : null }}" />
            <div class="form-group col-md-12 {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="col-md-2 control-label">{{ 'Title' }}</label>
                <div class="col-md-10">
                    <input class="form-control" tabindex="1"
                           placeholder="{{ 'Title of blog' }}" type="text"
                           name="title" value="{{ \Illuminate\Support\Facades\Input::old('title', isset($blog) ? $blog->title : null) }}">
                    <span class="help-block"> {!! $errors->first('title', '<label class="help-block" for="name">:message</label>')!!}</span>
                </div>
            </div>

            <div class="form-group col-md-12 {{ $errors->has('body') ? 'has-error' : '' }}">
                <label class="col-md-2 control-label" for="body">{{'Blog Body'}}</label>
                <div class="col-md-10">
				<textarea class="form-control" tabindex="2" placeholder="{{ trans('Body of the blog') }}" name="body" style="min-height: 100px">{{ \Illuminate\Support\Facades\Input::old('body', isset($blog) ? $blog->body  : null) }}</textarea>
                    <span class="help-block"> {!! $errors->first('body', '<label class="help-block" for="name">:message</label>')!!}</span>
                </div>
            </div>

            <div class="form-group col-md-12">
                <label class="col-md-2 control-label" for="active">{{'Active'}}</label>
                <div class="col-md-10">
                   <select name="active">
                       <option value="1" {{ \Illuminate\Support\Facades\Input::old('acive', isset($blog) && ($blog->active == 1) ? 'selected' : null )}}>{{'Active'}}</option>
                       <option value="0" {{ \Illuminate\Support\Facades\Input::old('acive', isset($blog) && ($blog->active == 0) ? 'selected' : null )}}>{{'In-Active'}}</option>
                   </select>
                </div>
            </div>

        <div class="form-group col-md-12">
            <div class="pull-right">
                <a href ="{{url('/home')}}"class="btn btn-sm btn-warning">
                    <span class="glyphicon glyphicon-ban-circle"></span> Back to List
                </a>
                <button type="submit" class="btn btn-sm btn-primary has-spinner">
                    <span class="spinner"><i class="fa fa-check-circle-o"></i></span>
                    @if	(isset($blog))
                        {{ trans("Save") }}
                    @else
                        {{trans("Create") }}
                    @endif
                </button>
            </div>
        </div>
    </form>
@stop
@section('scripts')
    @parent
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
@stop