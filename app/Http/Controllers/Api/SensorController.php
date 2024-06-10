<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;

class SensorController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan semua data sensor
        $type = $request->type;
        $sensor = Sensor::orderBy("id", "desc");

        if ($type) {
            $sensor = $sensor->where("type", $type);
        }

        $sensor = $sensor->get();
        return response()->json($sensor);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'type' => 'required',
            'value' => 'required|numeric',
        ]);

        // Construct dynamic topic based on request type
        $topic = 'sensor/' . $request->type;

        // Prepare data for MQTT publishing
        $data = [
            'value' => $request->value,
        ];

        $mqtt = MQTT::connection();
        $mqtt->publish($topic, json_encode($data));

        // Create sensor using all request data
        $sensor = Sensor::create($request->all());

        return response()->json($sensor, 201);
    }

    public function show($id)
    {
        // Mendapatkan data sensor berdasarkan ID
        $sensor = Sensor::findOrFail($id);

        // Mengembalikan data sensor dalam format JSON
        return response()->json($sensor);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'value' => 'required|numeric'
        ]);

        // Memperbarui data sensor
        $sensor = Sensor::findOrFail($id);
        $sensor->value = $request->value;
        $sensor->save();

        return response()->json($sensor);
    }

    public function destroy($id)
    {
        // Menghapus data sensor berdasarkan ID
        $sensor = Sensor::findOrFail($id);
        $sensor->delete();

        return response()->json(['message' =>  'deleted successfully']);
    }
}
