@extends('admin.masterpage')


@section('content')
    <div class="container">
        <h1>Admin Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $admin->name }}</h5>
                <p class="card-text">Email: {{ $admin->email }}</p>
                <p class="card-text">Role: {{ $admin->role }}</p>
                <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning">Edit Admin</a>
                <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Admin</button>
                </form>
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back to Admin List</a>
            </div>
        </div>
    </div>
@endsection
