@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="float-left">
    <h4 class="card-title"> Show target group-  {{ $target_group->title }}</h4>
         </div>
    </div>
            <div class="card-body">
                <table>
                    <tbody>
                    <tr>
                    <td><b>Target_group : </b></td>
                    <td> {!! $target_group->target_group !!}</td>
                    </tr>

                    <tr>
                    <td><b>Description : </b></td>
                    <td>{{ $target_group->description }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
</div>

@endsection

