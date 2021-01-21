{{-- @extends('layouts.app') --}}
@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    Courses
                    @can('create-course')
                    <a class="pull-right btn btn-sm btn-primary" href="{{ route('create_course') }}">New</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <div class="row">
                    @foreach($courses as $course)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            <div class="caption">
                                <h3><a href="{{ route('edit_course', ['id' => $course->id]) }}">{{ $course->title }}</a></h3>
                                <p>{{ str_limit($course->body, 50) }}</p>
                                @can('update-course', $course)
                                <p>
                                <a href="{{ route('edit_course', ['id' => $course->id]) }}" class="btn btn-sm btn-default" role="button">Edit</a>
                                </p>
                                @endcan
                            </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>COURSES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('admin.courses.create') }}"> Create New Courses</a>
        </div>
    </div>
</div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

    <div class="col-lg-50 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Course_name</th>
            <th>Duration</th>
            <th>Course_type</th>
            <th>Target_group</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($courses as $course)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->duration }}</td>
            <td>{{ $course->course_type }}</td>
            <td>{{ $course->target_group }}</td>
            <td>{{ $course->description }}</td>
            <td>
                <a href="{{ route('admin.courses.show', $course->id) }}" class="btn btn-info btn-xs">Show</a>
                <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-primary btn-xs">Edit</a>
                <a href="{{ route('admin.courses.delete', $course->id) }}" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
          </div>
        </div>
    </div>
    {!! $courses->links() !!} --}}

@endsection
