<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Temperature;
use Illuminate\Http\Request;

use PhpMqtt\Client\Facades\MQTT;

class TemperatureController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data temperatur
        $temperatures = Temperature::all();
        return response()->json($temperatures);
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
        $mqtt->publish('sensor/temperature', json_encode($data));
        // Membuat data temperatur baru

        $temperature = new Temperature;
        $temperature->value = $request->value;
        $temperature->save();

        return response()->json($temperature, 201);
    }

    public function show($id)
    {
        // Mendapatkan data temperatur berdasarkan ID
        $temperature = Temperature::findOrFail($id);
        return response()->json($temperature);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'value' => 'required|numeric'
        ]);

        // Memperbarui data temperatur
        $temperature = Temperature::findOrFail($id);
        $temperature->value = $request->value;
        $temperature->save();

        return response()->json($temperature);
    }

    public function destroy($id)
    {
        // Menghapus data temperatur berdasarkan ID
        $temperature = Temperature::findOrFail($id);
        $temperature->delete();

        return response()->json(['message' => 'Temperature deleted successfully']);
    }
}
