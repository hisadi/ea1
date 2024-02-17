<?php

namespace App\Http\Controllers;

use App\Models\Waifu;
use App\Http\Requests\StoreWaifuRequest;
use App\Http\Requests\UpdateWaifuRequest;
use Illuminate\Http\Request;

class WaifuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Waifu $waifu)
    {
        // Waifu::all ini artinya ngambil semua yg ada di table
        $waifus = Waifu::all();
        $waifus = $waifus->reverse();
        //compact waifus mengarah ke $waifus = Waifu::all();
        return view('dashboard', compact('waifus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addWaifu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'date' => 'required',
        ]);

        $filename = NULL;

        if($request->file('image') != NULL) {

            // Misalnya kita punya file image benrnama logo.png, berarti disini .png akan distore sebagai variable Extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // Misalnya kita punya file bernama logo.png, berarti logo akan disimpan sebagai variable orginal name
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

            // Ini nama file jadi logo_png
            $filename = $originalName. '_' . $extension;

            $request->file('image')->storeAs('/public/images/'.$filename);
        }

        Waifu::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'author'=>$request->author,
            'date'=>$request->date,
            'image'=> $filename
        ]);

        // Redirect dan kasih message
        return redirect('/dashboard')->with('success', 'Book has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showDetail($id)
    {
        $waifu = Waifu::find($id);

        return view('detailWaifu', compact('waifu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $waifu = Waifu::findorFail($id);

        return view('editWaifu', compact('waifu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'date' => 'required',
        ]);

        $filename = NULL;

        if($request->file('image') != NULL) {

            // Misalnya kita punya file image benrnama logo.png, berarti disini .png akan distore sebagai variable Extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // Misalnya kita punya file bernama logo.png, berarti logo akan disimpan sebagai variable orginal name
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

            // Ini nama file jadi logo_png
            $filename = $originalName. '_' . $extension;

            $request->file('image')->storeAs('/public/images/'.$filename);
        }


        Waifu::findorFail($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'author'=>$request->author,
            'date'=>$request->date,
            'image'=> $filename
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Waifu::destroy($id);

        return redirect('/dashboard')->with('delete','succes delete');
    }
}
