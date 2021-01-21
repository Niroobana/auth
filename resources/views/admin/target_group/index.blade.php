@extends('dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>target_group</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.target_group.create') }}"> Create New target_group</a>
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
            <th>Target_group</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($target_groups as $target_group)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $target_group->target_group }}</td>
            <td>{{ $target_group->description }}</td>
           <td>
                <a href="{{ route('admin.target_group.show', $target_group->id) }}" class="btn btn-info btn-xs">Show</a>
                <a href="{{ route('admin.target_group.edit', $target_group->id) }}" class="btn btn-primary btn-xs">Edit</a>
                <a href="{{ route('admin.target_group.delete', $target_group->id) }}" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
          </div>
        </div>
    </div>
    {!! $target_groups->links() !!}

@endsection
