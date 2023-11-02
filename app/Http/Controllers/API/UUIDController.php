<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Models\UUID;

class UUIDController extends Controller
{
    /**
     * Return list of all models
     * 
     * @return Response $response
     */
    public function list(): Response
    {
        $models = UUID::orderByDesc('created_at')->get();

        return Response::json([
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
    public function generate(Request $request): Response
    {
        $model = new UUID();
        $model->uuid = Str::uuid();
        $model->save();

        return Response::json([
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
    public function retrieve($id): Response
    {
        $model = UUID::findOrFail($request->id);

        return Response::json([
            'id' => $model->id,
            'uuid' => $model->uuid
        ], 200);
    }
}
