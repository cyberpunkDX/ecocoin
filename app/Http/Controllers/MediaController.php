<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // List all media for the authenticated user
        $media = Media::where('user_id', request()->user()->id)->latest()->paginate(12);
        return view('media.index', compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show form to upload new media
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and store new media (photo or video)
        $validated = $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:20480', // 20MB max
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $path = $request->file('file')->store('uploads/media', 'public');

        $media = Media::create([
            'user_id' => request()->user()->id,
            'file_path' => $path,
            'title' => $validated['title'] ?? null,
            'description' => $validated['description'] ?? null,
            'type' => $request->file('file')->getClientMimeType(),
        ]);

        return redirect()->route('media.index')->with('success', 'Media uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        // Show a single media item (only if owned by user)
        $this->authorize('view', $media);
        return view('media.show', compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        // Show edit form (only if owned by user)
        $this->authorize('update', $media);
        return view('media.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        // Update media details (title, description, and optionally file)
        $this->authorize('update', $media);
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:20480',
        ]);

        if ($request->hasFile('file')) {
            // Delete old file
            Storage::disk('public')->delete($media->file_path);
            $path = $request->file('file')->store('uploads/media', 'public');
            $media->file_path = $path;
            $media->type = $request->file('file')->getClientMimeType();
        }
        $media->title = $validated['title'] ?? $media->title;
        $media->description = $validated['description'] ?? $media->description;
        $media->save();

        return redirect()->route('media.index')->with('success', 'Media updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        // Delete media (only if owned by user)
        $this->authorize('delete', $media);
        Storage::disk('public')->delete($media->file_path);
        $media->delete();
        return redirect()->route('media.index')->with('success', 'Media deleted successfully.');
    }
}
