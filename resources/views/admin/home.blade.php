@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h3>Dashboard
                    <div class="pull-right"><a href="{{url('blog/create')}}" class="btn btn-prmary"><i class="glyphicon glyphicon-plus"></i> Add Blog</a></div>

                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(count($blogs) > 0)
                @foreach($blogs as $blog)
                    <h2>
                        <span>{{$blog->title}}</span>
                        <div class="pull-right"><a href="{{url('/blog/edit/'.$blog->id)}}" class="btn btn-primary" title="Edit blog"><i class="glyphicon glyphicon-pencil"></i> </a> <a class="btn btn-danger" title="Delete Blog" onclick="confirmDelete({{$blog->id}})"><i class="glyphicon glyphicon-remove"></i></a></div>
                    </h2>
                    <p class="" style="widht: 100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$blog->body}}</p>
                    <p>
                        <span class="glyphicon glyphicon-user"></span> Posted By {{$blog->author}}
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{date('F d, Y h:i A', strtotime($blog->published_at))}}</p>
                    <hr>
                @endforeach
            @else
                <h4>No Blogs Available</h4>
            @endif
        </div>
    </div>
</div>
@endsection
@section('scripts')
    @parent
    <script type="text/javascript">
        $(document).ready(function(){
        });

        function confirmDelete(id){
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function () {
                $.get('{{url('/blog/delete')}}/'+id)
                    .done(function (data) {
                        swal(
                            'Deleted!',
                            'Selected blog has been deleted.',
                            'success'
                        )

                        window.setTimeout(function(){
                            location.reload();
                        } ,3000);
                    })
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
                        'Cancelled',
                        'Blog is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@stop
