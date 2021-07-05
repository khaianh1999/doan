<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customers;
use Carbon\Carbon;
use App\Http\Requests\CustomersRequest;
use App\Http\Controllers\Controller;


class CustomersController extends Controller

{

    public function index()
    {
    
        $paging_number = 10;
        $data = request()->post();
        $customers = Customers::search($data);
      

        return view('admin.customers.list', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * $paging_number);
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(CustomersRequest $request)
    {   
       
        $data = $request->all();
        Customers::create($data);
        return redirect()->route('admin.customers.index')
            ->with('success', 'Customers created successfully.');
    }

    

    public function edit($id)
    {
        $customers = Customers::find($id);
        return view('admin.customers.edit', compact('customers'));
    }
    public function update(CustomersRequest $request, $id)
    {
            $customers = Customers::find($id);
            $customers->update($request->all());
            return redirect()->route('admin.customers.index')
                ->with('success', 'Customers updated successfully');
       
    }
    public function destroy($id)
    { 

        $result = Customers::find($id);
        $result->delete();
        $result->roles()->detach();
        return json_encode(['success' => 'deleted successfully']);
    }

}
