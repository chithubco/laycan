<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\LiftingProgram;
use Illuminate\Http\Request;

class LiftingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lps =  LiftingProgram::where('lifting','=','1')->get();
        // $lp = new LiftingProgram;
        // $lp->generateLiftingProgram(209000,-5000,-50000,100000,9000,787676,4565656,-2000);
        // $boh = 0;

        // foreach ($lps as $lp) {

        //     if ($lp->cummulative_production > 1400000) {

        //         echo $lp->date."</br>";
        //         $boh = $lp->cummulative_production - 975000;
        //         // $lp->cummulative_production = $boh;
        //         // $lp->cummulative_production->save();
        //     }
        // }
        // return $lps;
        $liftingPrograms = LiftingProgram::all();
        return view('user.lifting-program-list',compact('liftingPrograms'));

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
        $lp = new LiftingProgram;
        $lp->generateLiftingProgram($request['foreCastVolume'],$request['BOH'],$request['STARDEEPBOH'],$request['FAMFABOH'],$request['PETROBRASBOH'],$request['TAXOILBOH'],$request['STATOILBOH'],$request['TNOSBOH'],$request['NNPC-1BOH'],$request['forecastStartDate'],$request['comment'],$request['duration']);

        flash('Lifting Program Successfully Generated')->success()->important();
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

        $liftingPrograms = LiftingProgram::where('batch','=',$id)->orderBy('date','asc')->get();
        // $liftingPrograms = LiftingProgram::where('batch','=','98054');

        return view('user.lifting-program-list',compact('liftingPrograms'));
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
