@extends('admin.layouts.master')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h2 class="mb-4">Edit Experience</h2>

        <form action="{{ route('admin.experience.update', $experience->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">
                    Title <span class="text-danger">*</span>
                </label>
                <input type="text" 
                       class="form-control @error('title') is-invalid @enderror" 
                       id="title" 
                       name="title" 
                       placeholder="Enter Title" 
                       value="{{ old('title', $experience->title) }}">

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Update Experience</button>
        </form>
    </div>
</div>
@endsection
