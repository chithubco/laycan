<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DailyProduction;

class DailyProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('user.add-daily-production');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Condensate
        DailyProduction::create([
            'production_date' => $request['reportDate'],
            'terminal_id' => 2,
            'product_id' => 2,
            'amount' => $request['condensateProduction'],
            'user_id' => auth()->user()->id

        ]);

        //Diesel
        DailyProduction::create([
            'production_date' => $request['reportDate'],
            'terminal_id' => 2,
            'product_id' => 3,
            'amount' => $request['dieselProduction'],
            'user_id' => auth()->user()->id

        ]);

        //Naphtha
        DailyProduction::create([
            'production_date' => $request['reportDate'],
            'terminal_id' => 2,
            'product_id' => 4,
            'amount' => $request['naphthaProduction'],
            'user_id' => auth()->user()->id

        ]);


        flash("Production Data Created")->success()->important();
        return redirect()->back();
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
