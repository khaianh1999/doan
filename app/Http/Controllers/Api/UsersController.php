<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRequest;
use App\Http\Resources\Api\UserResource;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $paging_number = User::paginate(10);
        return UserResource::collection($paging_number);
    }

    public function store(UserRequest $request){
        try {
            $users = new User();
            $users->fill($request->validated())->save();

            return new UserResource($users);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Could not create a new user', 'error' => "Invalid data - {$exception->getMessage()}"], 400);
        }
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);

        if (!empty($user)) {
            $user->fill($request->validated())->save();

            return new UserResource($user);
        } else {
            return response()->json(['message' => 'Acc not found'], 404);
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!empty($user)) {
            $user->delete();
        }

        return response()->json(null, 204);
    }
}
