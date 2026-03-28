<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{   
    public function index()
    {
        return view('newsletters.index');
    }

    public function list(Request $request)
{
    $newsletters = Newsletter::whereNull('deleted_at')->latest()->get();

    $counter = 1;

    $newsletters->transform(function ($item) use (&$counter) {

        // Serial ID
        $item['sec_id'] = $counter++;

        // Image
        if (!empty($item->image)) {
            $item['image'] = '<img src="' . asset('uploads/' . $item->image) . '" class="rounded-circle" style="width:50px;height:50px;">';
        } else {
            $item['image'] = '<img src="' . asset('assets/img/new-profile.svg') . '" class="rounded-circle" style="width:50px;height:50px;">';
        }

        // Status
        if ($item->status == 1) {
            $item['status'] = '<input type="checkbox" data-id="' . $item->id . '" checked class="is_featured_class">';
        } else {
            $item['status'] = '<input type="checkbox" data-id="' . $item->id . '" class="is_featured_class">';
        }

        // ✅ Action (FIXED)
        $item['action'] = '
            <a href="' . route('newsletters.edit', $item->id) . '" class="btn btn-primary btn-sm me-1">
                <i class="fa fa-edit"></i>
            </a>
            <a href="' . route('newsletters.delete', $item->id) . '" 
               class="btn btn-danger btn-sm product_delete">
                <i class="fa fa-trash"></i>
            </a>
        ';
        
        return $item; // ✅ VERY IMPORTANT
    });

    return response()->json(['data' => $newsletters]);
}

    public function add() 
    {
        $newsletters = Newsletter::select('*')->where('deleted_at', null)->get();
        return view('newsletters.add',compact('newsletters'));
    }

    public function store(Request $request, $id = null)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:newsletters,email,' . $id,
            'password' => $id ? 'nullable|min:6' : 'required|min:6',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp'
        ]);

        $id = $request->newsletter_id;
        if ($id) {
            $newsletter = Newsletter::findOrFail($id);
        } else {
            $newsletter = new Newsletter();
        }

        // Assign Data
        $newsletter->name = $request->name;
        $newsletter->email = $request->email;
        $newsletter->status = $request->status ?? '1';

        // Password (only if filled)
        if ($request->filled('password')) {
            $newsletter->password = bcrypt($request->password);
        }

        // Image Upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            $newsletter->image = $filename;
        }

        // Save
        $newsletter->save();

        $message = $id ? 'Newsletter updated successfully.' : 'Newsletter added successfully.';
            return redirect()->route('newsletters.index')->with('success', $message);
    }

    public function status(Request $request)
    {
        $newsletter = Newsletter::findOrFail($request->id);
        $newsletter->status = $request->status;
        $newsletter->save();

        return response()->json(['success' => true]);
    }

    public function delete($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete(); // soft delete (if using SoftDeletes)

        return response()->json([
            'status' => true,
            'message' => 'Newsletter deleted successfully'
        ]);
    }
}



 