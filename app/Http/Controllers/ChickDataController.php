<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChickData;

class ChickDataController extends Controller
{
    public function store(Request $request)
    {
        $data = ChickData::create([
            'warna' => $request->warna,
            'hasil' => $request->hasil
        ]);

        return response()->json(['status'=>'success','data'=>$data]);
    }

    public function index()
    {
        $data = ChickData::latest()->take(10)->get();
        return response()->json($data);
    }
}
