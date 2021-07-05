<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PhonesRequest;
use App\Http\Resources\Api\PhonesResource;
use App\Models\Phones;

class PhonesController extends Controller
{
    public function index(){
        $paging_number = Phones::paginate(10);
        return PhonesResource::collection($paging_number);
    }

    public function store(PhonesRequest $request){
        try {
            $result = new Phones();
            $result->fill($request->validated())->save();

            return new PhonesResource($result);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Could not create a new user', 'error' => "Invalid data - {$exception->getMessage()}"], 400);
        }
    }

    public function update(PhonesRequest $request, $id)
    {
        $result = Phones::find($id);

        if (!empty($result)) {
            $result->fill($request->validated())->save();

            return new PhonesResource($result);
        } else {
            return response()->json(['message' => 'Acc not found'], 404);
        }
    }

    public function destroy($id)
    {
        $result = Phones::find($id);

        if (!empty($result)) {
            $result->delete();
        }

        return response()->json(null, 204);
    }
}
