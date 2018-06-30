<?php

namespace App\Http\Controllers;

use App\Document;
use App\Export;
use App\Http\Requests;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exports = Export::all();
        return view('user.export-list',compact('exports'));
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
            'consignee_id' => $request['consigneeID'],
            'dwt_of_vessel' => $request['DWTofVessel'],
            'flag_of_vessel' => $request['flagOfVessel'],
            'user'=> auth()->user()->id,
        ]);

        flash('New Export Record Successfully Added')->success()->important();
        flash()->overlay('New Export Record Successfully Added' , 'Success Message');
        
        $exports = Export::all();
        return view('user.export-list',compact('exports'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exportInstance = Export::find($id);
        $cargo_no = $exportInstance->cargo_no;
        $documents = Document::where('cargo_id','=',$cargo_no)->get();
        
        return view('user.export-details',compact('exportInstance','documents'));
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
        $exportInstance = Export::find($id);

        // $exportInstance->terminal_id = $request['terminal'];
        $exportInstance->product_id = $request['product'];
        $exportInstance->lifter_id = $request['lifter'];
        $exportInstance->cargo_type_id = $request['cargoType'];
        $exportInstance->norminated_cargo = $request['nominatedVolume'];
        $exportInstance->actual_cargo = $request['actualCargo'];
        $exportInstance->bol_date = $request['BOL'];
        $exportInstance->ship_figure = $request['shipFigures'];
        $exportInstance->nxp_no = $request['NXPNumber'];
        $exportInstance->vessel = $request['vesselName'];
        $exportInstance->date_range = $request['dateRange'];
        $exportInstance->eta = $request['ETA'];
        $exportInstance->desination = $request['desination'];
        $exportInstance->inspector = $request['inspector'];
        $exportInstance->vessel_agent = $request['vesselAgent'];
        $exportInstance->consignee_id = $request['consigneeID'];
        $exportInstance->dwt_of_vessel = $request['DWTOfVessel'];
        $exportInstance->flag_of_vessel = $request['FLAGOfVessel'];
        $exportInstance->dpr_clearnace_date = $request['DPRClearanceDate'];
        $exportInstance->nnpc_clearnace_date = $request['NNPCClearnaceDate'];
        $exportInstance->di_date = $request['DIDate'];
        $exportInstance->nxp_date = $request['NXPDate'];
        $exportInstance->ness_processed = $request['NESSProcessed'];
        $exportInstance->ness_no = $request['nessNumber'];

        $exportInstance->cci_processed = $request['CCIProcessed'];
        $exportInstance->csc_no = $request['cciNumber'];

        $exportInstance->csc_processed = $request['CSCProccessed'];
        $exportInstance->csc_no = $request['cscNumber'];
        
        $exportInstance->has_outturn = $request['hasOutturnVerification'];
        $exportInstance->has_lossclaim = $request['hasLossClaim'];
        $exportInstance->has_demurrage = $request['hasDemurrage'];
        $exportInstance->demurrage_amount = $request['demurrageAmount'];
        // $exportInstance->cpc_notification_date = $request['terminal'];
        // $exportInstance->demurrage_ws_ready_date = $request['terminal'];
        // $exportInstance->demurrage_approval_date = $request['terminal'];
        $exportInstance->comment = $request['comment'];
        $exportInstance->outturn_cost = $request['outturnCost'];
        $exportInstance->loss_claim_amount = $request['lossClaimCost'];

        $exportInstance->save();

        flash('Update Successful')->success();

        $exports = Export::all();
        return view('user.export-list',compact('exports'));
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
