<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Moistures;
use Illuminate\Http\Request;

use PhpMqtt\Client\Facades\MQTT;

class moisturesController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data temperatur
        $moistures = Moistures::all();
        return response()->json($moistures);
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
        $mqtt->publish('sensor/moistures', json_encode($data));
        // Membuat data temperatur baru

        $moistures = new Moistures;
        $moistures->value = $request->value;
        $moistures->save();

        return response()->json($moistures, 201);
    }

    public function show($id)
    {
        // Mendapatkan data temperatur berdasarkan ID
        $moistures = Moistures::findOrFail($id);
        return response()->json($moistures);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'value' => 'required|numeric'
        ]);

        // Memperbarui data temperatur
        $moistures = Moistures::findOrFail($id);
        $moistures->value = $request->value;
        $moistures->save();

        return response()->json($moistures);
    }

    public function destroy($id)
    {
        // Menghapus data temperatur berdasarkan ID
        $moistures = Moistures::findOrFail($id);
        $moistures->delete();

        return response()->json(['message' => 'Temperature deleted successfully']);
    }
}
