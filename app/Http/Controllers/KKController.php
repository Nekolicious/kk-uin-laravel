<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KK;

use function PHPUnit\Framework\isEmpty;

class KKController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function show() {
        $data = KK::all();
        return view('dashboard.kk.kk', compact('data'));
    }

    public function store(Request $request) {
        
    }

    public function update(Request $request) {
        $data = KK::all()->where('kk_id', $request->kk_id);

        if (!isEmpty($request->image)) {
            $path = 'public/img';
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->storeAs($path, $filename);
            $data->update(['header' => $request->$filename]);
        }

        $data->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('dashboard.kk')->with('success', 'KK berhasil diperbarui.');
    }

    public function delete(Request $request) {
        
    }
}
