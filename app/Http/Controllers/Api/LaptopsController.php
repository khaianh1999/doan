<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LaptopsRequest;
use App\Http\Resources\Api\LaptopsResource;
use App\Models\Laptops;

class LaptopsController extends Controller
{
    public function index(){
        $paging_number = Laptops::paginate(10);
        return LaptopsResource::collection($paging_number);
    }

    public function store(LaptopsRequest $request){
        try {
            $result = new Laptops();
            $result->fill($request->validated())->save();

            return new LaptopsResource($result);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Could not create a new user', 'error' => "Invalid data - {$exception->getMessage()}"], 400);
        }
    }

    public function update(LaptopsRequest $request, $id)
    {
        $result = Laptops::find($id);

        if (!empty($result)) {
            $result->fill($request->validated())->save();

            return new LaptopsResource($result);
        } else {
            return response()->json(['message' => 'Acc not found'], 404);
        }
    }

    public function destroy($id)
    {
        $result = Laptops::find($id);

        if (!empty($result)) {
            $result->delete();
        }

        return response()->json(null, 204);
    }
}
