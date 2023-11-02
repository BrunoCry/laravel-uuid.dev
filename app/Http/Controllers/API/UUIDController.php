<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\UUID;

class UUIDController extends Controller
{
    /**
     * Return list of all models
     * 
     * @return Response $response
     */
    public function list()
    {
        $models = UUID::orderByDesc('created_at')->get();

        return response()->json([
            'models' => $models
        ], 200);
    }

    /**
     * Generate new model
     * 
     * @param Request $request
     * 
     * @return Response $response
     */
    public function generate(Request $request)
    {
        $model = new UUID();
        $model->uuid = Str::uuid();
        $model->save();

        return response()->json([
            'id' => $model->id,
            'uuid' => $model->uuid
        ], 201);
    }

    /**
     * Get one model by unique id
     * 
     * @param int $id
     * 
     * @return Response
     */
    public function retrieve($id)
    {
        $model = UUID::findOrFail($id);

        return response()->json([
            'id' => $model->id,
            'uuid' => $model->uuid
        ], 200);
    }
}
