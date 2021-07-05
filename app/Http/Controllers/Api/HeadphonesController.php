<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\HeadphonesRequest;
use App\Http\Resources\Api\HeadphonesResource;
use App\Models\Headphones;

class HeadphonesController extends Controller
{
    public function index(){
        $paging_number = Headphones::paginate(10);
        return HeadphonesResource::collection($paging_number);
    }

    public function store(HeadphonesRequest $request){
        try {
            $result = new Headphones();
            $result->fill($request->validated())->save();

            return new HeadphonesResource($result);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Could not create a new user', 'error' => "Invalid data - {$exception->getMessage()}"], 400);
        }
    }

    public function update(HeadphonesRequest $request, $id)
    {
        $result = Headphones::find($id);

        if (!empty($result)) {
            $result->fill($request->validated())->save();

            return new HeadphonesResource($result);
        } else {
            return response()->json(['message' => 'Acc not found'], 404);
        }
    }

    public function destroy($id)
    {
        $result = Headphones::find($id);

        if (!empty($result)) {
            $result->delete();
        }

        return response()->json(null, 204);
    }
}
