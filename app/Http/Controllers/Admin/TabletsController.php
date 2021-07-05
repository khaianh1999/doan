<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tablets;
use Carbon\Carbon;
use App\Http\Requests\TabletsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TabletsController extends Controller

{

    public function index()
    {

        $paging_number = 10;
        $data = request()->post();
        $tablets = Tablets::search($data);


        return view('admin.tablets.list', compact('tablets'))
            ->with('i', (request()->input('page', 1) - 1) * $paging_number);
    }

    public function show($id)
    {
        $tablets = Tablets::find($id);
        return view('admin.tablets.show', compact('tablets'));
    }

    public function create()
    {
        return view('admin.tablets.create');
    }

    public function store(TabletsRequest $request)
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
        Tablets::create($data);

        return redirect()->route('admin.tablets.index')
            ->with('success', 'Tablets created successfully.');
    }



    public function edit($id)
    {
        $tablets = Tablets::find($id);
        return view('admin.tablets.edit', compact('tablets'));
    }
    public function update(TabletsRequest $request, $id)
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
        $tablets = Tablets::find($id);
        $tablets->update($data);
        return redirect()->route('admin.tablets.index')
            ->with('success', 'Tablets updated successfully');
    }
    public function destroy($id)
    {

        $result = Tablets::find($id);
        $result->delete();
        $result->roles()->detach();
        return json_encode(['success' => 'deleted successfully']);
    }

    public function updateStatus($id)
    {
        $tablets = Tablets::where('id', $id)->first();
        if ($tablets->status == 0) {
            $tablets->update(['status' => 1]);
        } else {
            $tablets->update(['status' => 0]);
        }
        return json_encode(['success' => 'update successfully']);
    }
}
