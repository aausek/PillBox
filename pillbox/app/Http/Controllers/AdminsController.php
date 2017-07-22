<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;

class AdminsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newrxs = Admin::all();
            return view('pages.newrxs')->with('newrxs', $newrxs);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $names = \App\User::all();
            return view('pages.admin', compact('names',$names));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'doctor' => 'required',
            'quantity' => 'required',
            'sig' => 'required',
            'date' => 'required'
            ]);

        //Enter new rx data
            $scripts = new Admin;
            $scripts->name = $request->input('name');
            $scripts->doctor = $request->input('doctor');
            $scripts->quantity = $request->input('quantity');
            $scripts->sig = $request->input('sig');
            $scripts->date = $request->input('date');
            $scripts->save();


        $newrxs = Admin::all();
        return view('pages.newrxs')->with('newrxs', $newrxs);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $newrxs = Admin::all();
        // return view('pages.newrxs')->with('newrxs', $newrxs);
        //  //Return admin view
        // return view('pages.newrxs');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
