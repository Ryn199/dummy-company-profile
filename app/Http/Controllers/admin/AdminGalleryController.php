<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'required|image',
        ]);

        $image = $request->file('image')
            ->store('galleries', 'public');

        Gallery::create([
            'title' => $request->title,
            'image' => $image,
        ]);

        return redirect('/admin/galleries')
            ->with('success', 'Gallery image created successfully');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'nullable',
        ]);

        $data = [
            'title' => $request->title,
        ];

        if ($request->hasFile('image')) {

            $image = $request->file('image')
                ->store('galleries', 'public');

            $data['image'] = $image;
        }

        $gallery->update($data);

        return redirect('/admin/galleries')
            ->with('success', 'Gallery image updated successfully');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return back()
            ->with('success', 'Gallery image deleted successfully');
    }
}
