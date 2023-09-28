<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Cast;
use App\Models\Peran;
use RealRashid\SweetAlert\Facades\Alert;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran.index', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film = Film::all();
        $cast = Cast::all();
        return view('peran.create', compact('film', 'cast'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran = new Peran;

        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
            'nama' => 'required',
        ]);

        $peran->film_id = $request->film_id;
        $peran->cast_id = $request->cast_id;
        $peran->nama = $request->nama;

        $simpan = $peran->save();

        if ($simpan) {
            Alert::success('Success', 'Data Berhasil ditambah');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peran = Peran::where('id', $id)->first();
        $film = Film::all();
        $cast = Cast::all();
        return view('peran.edit', compact('peran', 'film', 'cast'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
            'nama' => 'required',
        ]);

        $peran = Peran::find($id);
        $peran->film_id = $request->film_id;
        $peran->cast_id = $request->cast_id;
        $peran->nama = $request->nama;

        $ubah = $peran->save();

        if ($ubah) {
            Alert::success('Success', 'Data berhasil diubah');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Gagal Mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Peran::find($id);
        $remove = $peran->delete();
        if ($remove) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Gagal Menghapus data');
        }
    }
}
