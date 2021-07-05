<?php

namespace App\Http\Controllers\Admin;

use App\Models\Phones;
use Carbon\Carbon;
use App\Http\Requests\PhonesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PhonesController extends Controller

{

    public function index()
    {

        $paging_number = 10;
        $data = request()->post();
        $phones = Phones::search($data);


        return view('admin.phones.list', compact('phones'))
            ->with('i', (request()->input('page', 1) - 1) * $paging_number);
    }

    public function show($id)
    {
        $phones = Phones::find($id);
        return view('admin.phones.show', compact('phones'));
    }

    public function create()
    {
        return view('admin.phones.create');
    }

    public function store(PhonesRequest $request)
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
        Phones::create($data);

        return redirect()->route('admin.phones.index')
            ->with('success', 'Phones created successfully.');
    }



    public function edit($id)
    {
        $phones = Phones::find($id);
        return view('admin.phones.edit', compact('phones'));
    }
    public function update(PhonesRequest $request, $id)
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
        $phones = Phones::find($id);
        $phones->update($data);
        return redirect()->route('admin.phones.index')
            ->with('success', 'Phones updated successfully');
    }
    public function destroy($id)
    {

        $result = Phones::find($id);
        $result->delete();
        $result->roles()->detach();
        return json_encode(['success' => 'deleted successfully']);
    }

    public function updateStatus($id)
    {
        $phones = Phones::where('id', $id)->first();
        if ($phones->status == 0) {
            $phones->update(['status' => 1]);
        } else {
            $phones->update(['status' => 0]);
        }
        return json_encode(['success' => 'update successfully']);
    }
}
