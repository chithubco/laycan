<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Export;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        // flash()->overlay($request['terminalID'],$request['productID']);
        $newExportRecord = Export::create([
            
            'cargo_no' => $request['cargoNumber'],
            'terminal_id' => $request['terminalID'],
            'product_id' => $request['productID'],
            'lifter_id' => $request['lifterID'],
            'cargo_type_id' => $request['cargoTypeID'],
            'norminated_cargo' => $request['nominatedVolume'],
            'vessel' => $request['vesselName'],
            'date_range' =>  $request['dateRange'],
            'eta' =>  $request['ETA'],
            'desination' => $request['destination'],
            'inspector' =>  $request['inspector'],
            'consignee' => $request['consignee'],
            'dwt_of_vessel' => $request['DWTofVessel'],
            'flag_of_vessel' => $request['flagOfVessel'],
            'user'=> auth()->user()->id,
        ]);

        flash($newExportRecord)->success()->important();
        flash()->overlay($newExportRecord , 'Success Message');
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
