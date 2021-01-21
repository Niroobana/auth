@extends('dashboard')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit-  {{ $target_group->title }}</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->fill($target_group)->route('admin.target_group.update',[$target_group->id])->method('patch') !!}
                @include('admin.target_group._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.target_group.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Update </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
