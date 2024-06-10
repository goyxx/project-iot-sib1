<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Intensities;
use Illuminate\Http\Request;

use PhpMqtt\Client\Facades\MQTT;

class IntensitiesController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data temperatur
        $intensities = Intensities::all();
        return response()->json($intensities);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'value' => 'required|numeric'
        ]);

        $data = [
            'value' => $request->value

        ];

        $mqtt = MQTT::connection();
        $mqtt->publish('sensor/intensities', json_encode($data));
        // Membuat data temperatur baru

        $intensities = new Intensities;
        $intensities->value = $request->value;
        $intensities->save();

        return response()->json($intensities, 201);
    }

    public function show($id)
    {
        // Mendapatkan data temperatur berdasarkan ID
        $intensities = Intensities::findOrFail($id);
        return response()->json($intensities);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'value' => 'required|numeric'
        ]);

        // Memperbarui data temperatur
        $intensities = Intensities::findOrFail($id);
        $intensities->value = $request->value;
        $intensities->save();

        return response()->json($intensities);
    }

    public function destroy($id)
    {
        // Menghapus data temperatur berdasarkan ID
        $intensities = Intensities::findOrFail($id);
        $intensities->delete();

        return response()->json(['message' => 'Temperature deleted successfully']);
    }
}
