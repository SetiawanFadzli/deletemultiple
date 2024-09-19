<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
	public function index()
    {
        $siswas = Siswa::all();
        return view('siswas.index', compact('siswas'));
    }

    public function destroyMultiple(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            Siswa::whereIn('id', $ids)->delete();
            return redirect()->route('siswas.index')->with('success', 'Selected records have been deleted successfully.');
        }

        return redirect()->route('siswas.index')->with('error', 'No records selected.');
    }
}
