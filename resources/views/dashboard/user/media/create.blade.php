@extends('dashboard.user.layouts.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Upload New Media</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Photo or Video <span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="file" name="file" required accept="image/*,video/*">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" maxlength="255">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
        <a href="{{ route('media.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
