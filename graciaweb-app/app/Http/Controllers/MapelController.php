<?php

namespace App\Http\Controllers;

use App\Models\graciaMapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = graciaMapel::all();
        return view('crudmapel', ['mapel' => $mapel]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required',
        ]);

        $mapel = new graciaMapel();
        $mapel->nama_mapel = $request->mapel;
        $mapel->kelasID = $request->kelasID;
        $mapel->tingkat = $request->tingkat;

        $mapel->save();

        return redirect('/adminmapelindex')->with('success', 'Data added successfully');
    }

    public function edit($mapelID)
    {
        $mapels = graciaMapel::where('mapelID', $mapelID)->first();
        return view('editmapel', ['mapel' => $mapels]);
    }

    public function update(Request $request, $mapelID)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'kelasID' => 'required',
            'tingkat' => 'required',
        ]);

        graciaKelas::where('mapelID', $mapelID)
        ->update([
            'nama_mapel' => $request->input('nama_mapel'),
            'kelasID' => $request->input('kelasID'),
            'tingkat' => $request->input('tingkat'),
        ]);

        return redirect('/adminmapelindex')->with('success', 'Data updated successfully');
    }
}