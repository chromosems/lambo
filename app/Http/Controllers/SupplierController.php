<?php

namespace App\Http\Controllers;

use Auth;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSupplierRequest;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
	    $suppliers = Supplier::all();

        return view('supplier.index', compact('suppliers'));
    }

    public function create()
    {
    	return view('supplier.create');
	}

	public function store(StoreSupplierRequest $request)
    {
		$supplier= new Supplier($request->all());
		
        if(!$supplier->save()){
			session()->flash('message','Failed to Save');
    		return redirect()->back()->withErrors();

		}

		session()->flash('message','Supplier saved Successfully');
    	return redirect('/supplier');
	}

    public function show($id)

    {
        $supplier = Supplier::find($id);

        return view('supplier.show_supplier', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {

          return view('supplier.edit_supplier', compact('supplier'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier=Supplier::find($id);

        // dd($supplier);

        $supplier->update($request->all());

        if(!$supplier->save()){
            return redirect()->back();
        }
        else

        return redirect ('/supplier'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect ('/supplier');
       
    }
}
