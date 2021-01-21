@extends('home')
{{-- @extends('layouts.app') --}}
@section('title', 'Course List')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Create Courses</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->route('store_course')->method('post') !!}
                @include('admin.courses._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Create </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
