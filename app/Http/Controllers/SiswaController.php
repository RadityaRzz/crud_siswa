<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller {
    public function index() {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));
    }
    public function store(Request $request) {
        Siswa::create($request->all());
        return redirect()->back();
    }
    public function edit($id) {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request, $id) {
        Siswa::find($id)->update($request->all());
        return redirect()->route('siswa.index');
    }
    public function destroy($id) {
        Siswa::destroy($id);
        return redirect()->back();
    }
}