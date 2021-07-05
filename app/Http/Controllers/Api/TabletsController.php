<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TabletsRequest;
use App\Http\Resources\Api\TabletsResource;
use App\Models\Tablets;

class TabletsController extends Controller
{
    public function index(){
        $paging_number = Tablets::paginate(10);
        return TabletsResource::collection($paging_number);
    }

    public function store(TabletsRequest $request){
        try {
            $result = new Tablets();
            $result->fill($request->validated())->save();

            return new TabletsResource($result);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Could not create a new user', 'error' => "Invalid data - {$exception->getMessage()}"], 400);
        }
    }

    public function update(TabletsRequest $request, $id)
    {
        $result = Tablets::find($id);

        if (!empty($result)) {
            $result->fill($request->validated())->save();

            return new TabletsResource($result);
        } else {
            return response()->json(['message' => 'Acc not found'], 404);
        }
    }

    public function destroy($id)
    {
        $result = Tablets::find($id);

        if (!empty($result)) {
            $result->delete();
        }

        return response()->json(null, 204);
    }
}
