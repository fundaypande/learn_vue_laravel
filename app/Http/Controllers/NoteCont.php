<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteCont extends Controller
{
    // mengambil semua data
    public function all()
    {
        return Note::all();
    }

    // mengambil data by id
    public function show($id)
    {
        return Note::find($id);
    }

    // menambah data
    public function store(Request $request)
    {
        return Note::create($request->all());
    }

    // mengubah data
    public function update($id, Request $request)
    {
        $Note = Note::find($id);
        $Note->update($request->all());
        return $Note;
    }

    // menghapus data
    public function delete($id)
    {
        $Note = Note::find($id);
        $Note->delete();
        return 204;
    }
}
