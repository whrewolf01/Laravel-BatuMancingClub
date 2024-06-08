<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spot = Spot::all();
        return view('spot.spot', compact('spot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spot.spot-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required',
            'ikan' => 'required',
        ]);

        Spot::create([
            'lokasi' => $request->lokasi,
            'ikan' => $request->ikan,
        ]);

        return redirect('/spot');

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
    public function edit(string $id_spot)
    {
        $spot = Spot::find($id_spot);
        return view('spot.spot-edit', compact('spot'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_spot)
    {
        $request->validate([
            'lokasi' => 'required',
            'ikan' => 'required',
        ]);

        $spot = Spot::find($id_spot);

        $spot->update([
            'lokasi' => $request->lokasi,
            'ikan' => $request->ikan,
        ]);

        return redirect('/spot');

    }

    public function delete($id_spot)
    {
        $spot = Spot::find($id_spot);
        return view('spot.spot-hapus', compact('spot'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_spot)
    {
        $spot = Spot::find($id_spot);
        $spot->delete();
        return redirect('/spot');

    }

    public function cetak()
    {
        $spot = spot::all();
        $pdf = Pdf::loadview('spot.spot-cetak', compact('spot'));
        return $pdf->download('Data Info Spot.pdf');
    }

}
