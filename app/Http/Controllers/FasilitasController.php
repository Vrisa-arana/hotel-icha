<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Fasilitas;
use Illuminate\View\View;

class FasilitasController extends Controller
{

    public function list(): View
    {
        $data = Fasilitas::all();
        return view('fasilitas.list', ['data' => $data]);
    }

    public function list_Hotel($id): View
    {
        $data = Hotel::where('id_hotel', $id)->get();
        $dataHotel = Hotel::find($id);
        return view('fasilitas.hotel', ['data' => $data, 'hotel' => $dataHotel]);
    }

    public function detail($id)
{
    $data = Fasilitas::find($id);

    if (!$data) {
        abort(404);
    }

    return view('fasilitas.detail', ['data' => $data]);
}


}
