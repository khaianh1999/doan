<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CustomersRequest;
use App\Http\Resources\Api\CustomersResource;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function index(){
        $paging_number = Customers::paginate(10);
        return CustomersResource::collection($paging_number);
    }

    public function store(CustomersRequest $request){
        try {
            $result = new Customers();
            $result->fill($request->validated())->save();

            return new CustomersResource($result);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Could not create a new user', 'error' => "Invalid data - {$exception->getMessage()}"], 400);
        }
    }

    public function update(CustomersRequest $request, $id)
    {
        $result = Customers::find($id);

        if (!empty($result)) {
            $result->fill($request->validated())->save();

            return new CustomersResource($result);
        } else {
            return response()->json(['message' => 'Acc not found'], 404);
        }
    }

    public function destroy($id)
    {
        $result = Customers::find($id);

        if (!empty($result)) {
            $result->delete();
        }

        return response()->json(null, 204);
    }
}
