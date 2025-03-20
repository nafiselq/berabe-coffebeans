<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Inertia\Inertia;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Feedback/Index');
    }

    public function indexAdmin()
    {
        $feedbacks = Feedback::paginate(5);
        return Inertia::render('Admin/Feedback/Index', ['feedbacks' => $feedbacks]);
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
        $request->validate([
            'comment' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048'
        ]);

        // Check if an image was uploaded
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('feedback', 'public');
        } else {
            $imagePath = 'feedback/dummy.png'; // Use a predefined default image path
        }

        Feedback::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'photo' => $imagePath,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedbacks = Feedback::findOrFail($id);
        $feedbacks->delete();


        return redirect()->route('admin.feedback');
    }
}
