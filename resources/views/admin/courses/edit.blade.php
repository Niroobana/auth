@extends('home')
{{-- @extends('layouts.app') --}}
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit -    {{ $course->title }}</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->fill($course)->route('admin.courses.update',[$course->id])->method('patch') !!}
                @include('admin.courses._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Update </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
