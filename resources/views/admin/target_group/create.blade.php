@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Create Target_group</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->route('admin.target_group.store')->method('post') !!}
                @include('admin.target_group._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.target_group.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Create </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
