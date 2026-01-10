@extends('dashboard.user.layouts.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Media Details</h2>
    <div class="card mb-4">
        <div class="card-body">
            @if(Str::startsWith($media->file, 'uploads/media/') && Str::endsWith($media->file, ['.jpg', '.jpeg', '.png', '.gif']))
                <img src="{{ asset('storage/' . $media->file) }}" class="img-fluid mb-3" alt="Media Image">
            @elseif(Str::startsWith($media->file, 'uploads/media/') && Str::endsWith($media->file, ['.mp4', '.mov', '.avi']))
                <video controls class="w-100 mb-3" style="max-height:400px;">
                    <source src="{{ asset('storage/' . $media->file) }}">
                    Your browser does not support the video tag.
                </video>
            @endif
            <h4>{{ $media->title ?? 'Untitled' }}</h4>
            <p>{{ $media->description }}</p>
            <p class="text-muted">Uploaded: {{ $media->created_at->format('M d, Y H:i') }}</p>
            <a href="{{ route('user.media.edit', $media) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('user.media.destroy', $media) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this media?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('user.media.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
