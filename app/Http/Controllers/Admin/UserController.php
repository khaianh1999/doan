<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Carbon\Carbon;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller

{

    public function index()
    {
    
        $paging_number = 10;
        $data = request()->post();
        $users = User::search($data);
      

        return view('admin.users.list', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $paging_number);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {   
       
        $data = $request->all();
        User::create($data);
        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully.');
    }

    

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    
    public function update(UserRequest $request, $id)
    {
            $user = User::find($id);
            $user->update($request->all());
            return redirect()->route('admin.users.index')
                ->with('success', 'User updated successfully');
       
    }
    public function destroy($id)
    { 
 
        $result = User::find($id);
        $result->delete();
        $result->roles()->detach();

        return json_encode(['success' => 'deleted successfully']);
    }
    public function updateStatus($id)
    {
        $user = User::where('id', $id)->first();
        if ($user->status == 0) {
            $user->update(['status' => 1]);
        } else {
            $user->update(['status' => 0]);
        }
        return json_encode(['success' => 'update successfully']);
    }
}
