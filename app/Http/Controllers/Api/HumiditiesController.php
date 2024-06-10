<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Humidities;
use Illuminate\Http\Request;

use PhpMqtt\Client\Facades\MQTT;

class HumiditiesController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data temperatur
        $humidities = Humidities::all();
        return response()->json($humidities);
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
        $mqtt->publish('sensor/humidities', json_encode($data));
        // Membuat data temperatur baru

        $humidities = new Humidities();
        $humidities->value = $request->value;
        $humidities->save();

        return response()->json($humidities, 201);
    }

    public function show($id)
    {
        // Mendapatkan data temperatur berdasarkan ID
        $humidities = Humidities::findOrFail($id);
        return response()->json($humidities);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'value' => 'required|numeric'
        ]);

        // Memperbarui data temperatur
        $humidities = Humidities::findOrFail($id);
        $humidities->value = $request->value;
        $humidities->save();

        return response()->json($humidities);
    }

    public function destroy($id)
    {
        // Menghapus data temperatur berdasarkan ID
        $humidities = Humidities::findOrFail($id);
        $humidities->delete();

        return response()->json(['message' => 'deleted successfully']);
    }
}
