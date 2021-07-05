<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrdersRequest;
use App\Http\Resources\Api\OrdersResource;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function index(){
        $paging_number = Orders::paginate(10);
        return OrdersResource::collection($paging_number);
    }

    public function store(OrdersRequest $request){
        try {
            $result = new Orders();
            $result->fill($request->validated())->save();

            return new OrdersResource($result);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Could not create a new user', 'error' => "Invalid data - {$exception->getMessage()}"], 400);
        }
    }

    public function update(OrdersRequest $request, $id)
    {
        $result = Orders::find($id);

        if (!empty($result)) {
            $result->fill($request->validated())->save();

            return new OrdersResource($result);
        } else {
            return response()->json(['message' => 'Acc not found'], 404);
        }
    }

    public function destroy($id)
    {
        $result = Orders::find($id);

        if (!empty($result)) {
            $result->delete();
        }

        return response()->json(null, 204);
    }
}
