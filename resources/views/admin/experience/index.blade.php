@extends('admin.layouts.master')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Experience List</h2>
            <a href="{{ route('admin.experience.create') }}" class="btn btn-primary">+ Add Experience</a>
        </div>

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($experiences as $experience)
                    <tr>
                        <td>{{ $experience->id }}</td>
                        <td>{{ $experience->title }}</td>
                        <td>
                            <a href="{{ route('admin.experience.edit', $experience->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('admin.experience.delete', $experience->id) }}" 
                                  method="POST" 
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure?')" 
                                        class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">No experiences found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
