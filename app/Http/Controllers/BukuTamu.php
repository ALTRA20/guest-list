<?php

namespace App\Http\Controllers;
use App\Models\BukuTamuModel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BukuTamu extends BaseController
{

	public function index()
	{
	    $visitors = BukuTamuModel::paginate(5);
	    // dd($users);
	    return view('daftarTamu', $result=[
            'title' => 'DaftarTamu',
            'visitors' => $visitors
        ]);
	}

	public function add(Request $request)
	{
		$visitors = new BukuTamuModel;
		// d($request->nama);
		// d($request->asal);
		// dd($request->keperluan);
		// $validated = $request->validate([
        //     'name' => 'required',
        //     'keperluan' => 'required',
        //     'asal' => 'required'
        // ]);
        // $visitors->name = $validated['name'];
        // $visitors->keperluan = $validated['keperluan'];
        // $visitors->asal = $validated['asal'];
        // $visitors->save();

        BukuTamuModel::create([
        	'id' => null,
            'name'     => $request->nama,
            'origin'   => $request->asal,
            'necessity' => $request->keperluan
        ]);
        return redirect()->route('bukutamu.index')->with(['success' => 'Data Berhasil Disimpan!']);
	}

	public function update(Request $request, $id)
	{
		$bukuTamu = BukuTamuModel::findOrFail($id);
		$bukuTamu->update([
			'id' => $id,
            'name'     => $request->name,
            'origin'   => $request->asal,
            'necessity' => $request->keperluan
		]);
        return redirect()->route('bukutamu.index')->with(['success' => 'Data Berhasil Disimpan!']);
	}

	public function delete($id)
	{
	    $BukuTamuList = BukuTamuModel::find($id);
	    $BukuTamuList->delete();

	    return redirect('/')->with('success', 'User has been deleted.');
	}

	public function submitForm(Request $request)
    {
        $filter = $request->input('filter');
        $visitors;

        if ($filter == 'recently') {
        	$visitors = BukuTamuModel::orderByDesc('created_at')->paginate(5);
        }else if ($filter == 'oldest') {
        	$visitors = BukuTamuModel::orderBy('created_at')->paginate(5);
        }else if ($filter == 'name') {
        	$visitors = BukuTamuModel::orderBy('name')->paginate(5);
        }else if ($filter == 'name') {
        	$visitors = BukuTamuModel::orderBy('name')->paginate(5);
        }

    	return view('daftarTamu', $result=[
            'title' => 'DaftarTamu',
            'visitors' => $visitors
        ]);
    }

    public function search(Request $request)
	{
	    $query = $request->input('query');
	    $visitors = BukuTamuModel::where('name', 'LIKE', '%'.$query.'%')->paginate(10);
	    // foreach ($results as $result) {
	    // 	echo $result->name;
	    // }
	    return view('daftarTamu', $result=[
            'title' => 'DaftarTamu',
            'visitors' => $visitors
        ]);
	}



}