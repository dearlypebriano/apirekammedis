<?php

namespace App\Http\Controllers;

use App\Http\Resources\RekamMedisResource;
use App\Models\RekamMedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RekamMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekammed = RekamMedis::latest()->paginate(10);

        return new RekamMedisResource(true, "List Data Rekam Medis!", $rekammed);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'No_RM' => 'required',
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'tgl_kunjungan' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nama_klinik' => 'required',
            'no_billing' => 'required',
            'dpjp' => 'required',
            'jenis_pembayaran' => 'required',
            'history_pasien' => 'required',
            'billing_pasien' => 'required',
        ]);

        // check jika validasi gagal

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $rekammed = RekamMedis::create([
            'No_RM' => $request->No_RM,
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'tgl_kunjungan' => $request->tgl_kunjungan,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_klinik' => $request->nama_klinik,
            'no_billing' => $request->no_billing,
            'dpjp' => $request->dpjp,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'history_pasien' => $request->history_pasien,
            'billing_pasien' => $request->billing_pasien,
        ]);

        return new RekamMedisResource(true, "Data Rekam Medis Terbaru Berhasil Ditambahkan!", $rekammed);
    }

    /**
     * Display the specified resource.
     */
    public function show(RekamMedis $rekamMedis, string $id)
    {
        return new RekamMedisResource(true, "Ini Adalah Rekam Medis Yang Anda Cari!", $rekamMedis::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RekamMedis $rekamMedis, string $id)
    {
        $validateData = $request->validate([
            'No_RM' => 'required',
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'tgl_kunjungan' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nama_klinik' => 'required',
            'no_billing' => 'required',
            'dpjp' => 'required',
            'jenis_pembayaran' => 'required',
            'history_pasien' => 'required',
            'billing_pasien' => 'required',
        ]);

        $rekamMedis = RekamMedis::find($id);

        $rekamMedis->update([
            'No_RM' => $request->No_RM,
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'tgl_kunjungan' => $request->tgl_kunjungan,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_klinik' => $request->nama_klinik,
            'no_billing' => $request->no_billing,
            'dpjp' => $request->dpjp,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'history_pasien' => $request->history_pasien,
        ]);

        return new RekamMedisResource(true, "Data Dengan Id $id, Berhasil Di Update!", $rekamMedis);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RekamMedis $rekamMedis, string $id)
    {
        $rekamMedis = RekamMedis::find($id);
        $rekamMedis->delete();

        return new RekamMedisResource(true, "Data Dengan Id $id, Berhasil Di Hapus!", null);
    }
}
