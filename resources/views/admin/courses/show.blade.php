@extends('home')
{{-- @extends('layouts.app') --}}
@section('content')

<div class="row">
    <div class="col-12">
       <div class="float-left">
    <h4 class="card-title">Show course- {{ $course->title }}</h4>
        </div>
    </div>
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Course_name : </b></td>
                            <td>{{ $course->course_name}}</td>
                        </tr>
                        <tr>
                                <td><b>Duration : </b></td>
                                <td> {!! $course->duration !!}</td>
                            </tr>
                            <tr>

                                <td><b>Course_type : </b></td>
                                <td> {!! $course->course_type !!}</td>
                            </tr>
                            <tr>
                                <td><b>Target_group : </b></td>
                                <td> {!! $course->target_group !!}</td>
                            </tr>
                            <tr>
                                <td><b>Description : </b></td>
                                <td> {!! $course->description !!}</td>
                            </tr>
                            <tr>
                                </tr>
                    </tbody>
                </table>
</div>



@endsection
