<?php

namespace App\Http\Controllers;

use App\Models\SuggestionBox;
use Illuminate\Http\Request;

class SuggestionBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        SuggestionBox::create($request->all());

        return redirect()->back()->with('success', 'Suggestion submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuggestionBox $suggestionBox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuggestionBox $suggestionBox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuggestionBox $suggestionBox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuggestionBox $suggestionBox)
    {
        //
    }
}
