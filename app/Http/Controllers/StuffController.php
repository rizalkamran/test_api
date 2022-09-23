<?php

namespace App\Http\Controllers;

use App\Stuff;
use Illuminate\Http\Request;

class StuffController extends Controller
{

    public function get_all(){
        return response()->json(Stuff::all(), 200);
    }

    public function insert(Request $request){
        $insert = new Stuff;
        $insert->nama_barang = $request->nama_barang;
        $insert->tipe_barang = $request->tipe_barang;
        $insert->jumlah = $request->jumlah;
        $insert->save();

       return response([
        'status' => 'OK',
        'message' => 'Disimpan',
        'data' => $insert
       ], 200);

    }

    public function update(Request $request, $id){
        $check = Stuff::firstWhere('id', $id);
        if ($check) {
            $data = Stuff::find($id);
            $data->nama_barang = $request->nama_barang;
            $data->tipe_barang = $request->tipe_barang;
            $data->jumlah = $request->jumlah;
            $data->save();

            return response([
                'status' => 'OK',
                'message' => 'Barang diupdate',
                'data' => $data
               ], 200);
        }else{
            return response([
                'status' => 'Not Found',
                'message' => 'Barang tidak ditemukan',
               ], 404);
        }
    }

    public function delete($id){
        $check = Stuff::firstWhere('id', $id);
        if ($check) {
            Stuff::destroy($id);

            return response([
                'status' => 'OK',
                'message' => 'Dihapus',
               ], 200);
        }else{
            return response([
                'status' => 'Not Found',
                'message' => 'Barang tidak ditemukan',
               ], 404);
        }
    }

}
