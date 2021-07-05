<?php

namespace App\Http\Controllers\Admin;

use App\Models\Headphones;
use Carbon\Carbon;
use App\Http\Requests\HeadphonesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HeadphonesController extends Controller

{

    public function index()
    {

        $paging_number = 10;
        $data = request()->post();
        $headphones = Headphones::search($data);


        return view('admin.headphones.list', compact('headphones'))
            ->with('i', (request()->input('page', 1) - 1) * $paging_number);
    }

    public function show($id)
    {
        $headphones = Headphones::find($id);
        return view('admin.headphones.show', compact('headphones'));
    }

    public function create()
    {
        return view('admin.headphones.create');
    }

    public function store(HeadphonesRequest $request)
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
        Headphones::create($data);

        return redirect()->route('admin.headphones.index')
            ->with('success', 'Headphones created successfully.');
    }



    public function edit($id)
    {
        $headphones = Headphones::find($id);
        return view('admin.headphones.edit', compact('headphones'));
    }
    public function update(HeadphonesRequest $request, $id)
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
        $headphones = Headphones::find($id);
        $headphones->update($data);
        return redirect()->route('admin.headphones.index')
            ->with('success', 'Headphones updated successfully');
    }
    public function destroy($id)
    {

        $result = Headphones::find($id);
        $result->delete();
        $result->roles()->detach();
        return json_encode(['success' => 'deleted successfully']);
    }

    public function updateStatus($id)
    {
        $headphones = Headphones::where('id', $id)->first();
        if ($headphones->status == 0) {
            $headphones->update(['status' => 1]);
        } else {
            $headphones->update(['status' => 0]);
        }
        return json_encode(['success' => 'update successfully']);
    }
}
