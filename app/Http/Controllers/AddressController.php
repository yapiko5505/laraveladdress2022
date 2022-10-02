<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses=Address::orderBy('postal', 'asc')->simplePaginate(5);
        return view('address.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->validate([
            'name'=>'required|max:255',
            'postal'=>'required|max:255',
            'address'=>'required|max:255',
            'phone'=>'required|max:255',
            'email'=>'required|max:255',
            'purpose'=>'required|max:255'
        ]);
        $address=new Address();
        $address->name=$request->name;
        $address->postal=$request->postal;
        $address->address=$request->address;
        $address->phone=$request->phone;
        $address->email=$request->email;
        $address->purpose=$request->purpose;

        $address->save();

        return redirect()->route('address.create')->with('message', '会社登録しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return view('address.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return view('address.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $inputs=$request->validate([
            'name'=>'required|max:255',
            'postal'=>'required|max:255',
            'address'=>'required|max:255',
            'phone'=>'required|max:255',
            'email'=>'required|max:255',
            'purpose'=>'required|max:255'
        ]);
        
        $address->name=$request->name;
        $address->postal=$request->postal;
        $address->address=$request->address;
        $address->phone=$request->phone;
        $address->email=$request->email;
        $address->purpose=$request->purpose;

        $address->save();

        return redirect()->route('address.show', $address)->with('message', '会社登録を更新しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('address.index')->with('message', '会社登録を削除しました。');
    }
}
