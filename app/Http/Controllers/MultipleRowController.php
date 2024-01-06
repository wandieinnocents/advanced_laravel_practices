<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultipleRow;

class MultipleRowController extends Controller
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
        // dd("create multiple rows");
        return view('multiple_rows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->input(); // Get the input data

        // Loop through the data and insert into the database
        foreach ($data['name'] as $key => $value) {
            MultipleRow::create([
                'name' => $value,
                'email' => $data['email'][$key],
                // Add more fields as needed
            ]); 
        }
                
      dd($data);

    return redirect()->back();
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
        //
    }
}
