<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();

        return view("customer.index", compact("customers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("customer.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'code' => 'max:60',
            'nif' => 'max:10',
            'email' => 'email|max:60',
            'phone' => 'max:100',
            'obs' => 'max:400',

        ]);

        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->nif = $request->input('nif');
        $customer->obs = $request->input('observations');
        $customer->code = $request->input('code');
        $customer->phone = $request->input('phone');
        $customer->save();

        return redirect()->route('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view("customer.edit",compact("customer"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:60',
            'phone' => 'required|integer|max:100',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->nif = $request->input('nif');
        $customer->obs = $request->input('observations');
        $customer->code = $request->input('code');
        $customer->phone = $request->input('phone');
        $customer->save();

        return redirect()->route('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers');
    }
}
