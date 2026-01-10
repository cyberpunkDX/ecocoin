@extends('dashboard.user.layouts.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">My Eco Media</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('user.media.create') }}" class="btn btn-success mb-3">Upload New Media</a>
    <div class="row">
        @forelse($media as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if(Str::startsWith($item->type, 'image'))
                        <img src="{{ asset('storage/' . $item->file_path) }}" class="card-img-top" alt="Media Image">
                    @elseif(Str::startsWith($item->type, 'video'))
                        <video controls class="w-100" style="max-height:200px;">
                            <source src="{{ asset('storage/' . $item->file_path) }}" type="{{ $item->type }}">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title ?? 'Untitled' }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <a href="{{ route('user.media.show', $item) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('user.media.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('user.media.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this media?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">No media uploaded yet.</div>
            </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-center">
        {{ $media->links() }}
    </div>
</div>
@endsection
