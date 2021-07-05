<?php

namespace App\Http\Controllers\Admin;

use App\Models\Laptops;
use Carbon\Carbon;
use App\Http\Requests\LaptopsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LaptopsController extends Controller

{

    public function index()
    {

        $paging_number = 10;
        $data = request()->post();
        $laptops = Laptops::search($data);


        return view('admin.laptops.list', compact('laptops'))
            ->with('i', (request()->input('page', 1) - 1) * $paging_number);
    }

    public function show($id)
    {
        $laptops = Laptops::find($id);
        return view('admin.laptops.show', compact('laptops'));
    }

    public function create()
    {
        return view('admin.laptops.create');
    }

    public function store(LaptopsRequest $request)
    {

        $data = $request->all();
        $request->validate([
            'picture' => 'required|mimes:png,jpg,jpeg,svg|max:2048',
        ]);
        if (!empty($data['picture'])) {
            $fileName = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('img'), $fileName);
            $data['picture'] = $fileName;
        }
        Laptops::create($data);

        return redirect()->route('admin.laptops.index')
            ->with('success', 'Laptops created successfully.');
    }



    public function edit($id)
    {
        $laptops = Laptops::find($id);
        return view('admin.Laptops.edit', compact('laptops'));
    }
    public function update(LaptopsRequest $request, $id)
    {   
        $data = $request->all();
  
        if(!empty($data['picture'])){
            $request->validate([
                'picture' => 'required|mimes:png,jpg,jpeg,svg|max:2048',
            ]);
            $fileName = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('img'), $fileName);
            $data['picture'] = $fileName;
        }
        $laptops = Laptops::find($id);
        $laptops->update($data);
        return redirect()->route('admin.laptops.index')
            ->with('success', 'Laptops updated successfully');
    }
    public function destroy($id)
    {

        $result = Laptops::find($id);
        $result->delete();
        $result->roles()->detach();
        return json_encode(['success' => 'deleted successfully']);
    }

    public function updateStatus($id)
    {
        $laptops = Laptops::where('id', $id)->first();
        if ($laptops->status == 0) {
            $laptops->update(['status' => 1]);
        } else {
            $laptops->update(['status' => 0]);
        }
        return json_encode(['success' => 'update successfully']);
    }
}
