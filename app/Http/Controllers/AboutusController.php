<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function indexAdmin()
    {
        $about = Aboutus::first();
        return Inertia::render('Admin/About/Edit', ['about' => $about]);
    }

    public function index()
    {
        $about = Aboutus::first();
        return Inertia::render('About/Index', ['about' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aboutus $aboutus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = Aboutus::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $about->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aboutus $aboutus)
    {
        //
    }
}
