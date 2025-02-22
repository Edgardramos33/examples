<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NameController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        try {
            Name::create($request->only(['first_name', 'last_name']));
            return redirect()->route('name')->with('success', 'Name added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('name')->with('error', 'Failed to add name. Please try again.');
        }
    }

    public function index()
    {
        $names = Name::latest()->get(); // Fetch the latest names first
        return view('name', compact('names'));
    }

    public function edit($id)
    {
        $name = Name::findOrFail($id);
        return view('edit', compact('name'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        try {
            $name = Name::findOrFail($id);
            $name->update($request->only(['first_name', 'last_name']));
            return redirect()->route('name')->with('success', 'Name updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('name')->with('error', 'Failed to update name. Please try again.');
        }
    }

    public function destroy($id)
    {
        try {
            $name = Name::findOrFail($id);
            $name->delete();
            return redirect()->route('name')->with('success', 'Name deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('name')->with('error', 'Failed to delete name. Please try again.');
        }
    }
}
