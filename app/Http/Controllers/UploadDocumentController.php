<?php

namespace App\Http\Controllers;

use App\DocumentCategory;
use App\Http\Requests;
use App\Terminal;
use Illuminate\Http\Request;

class UploadDocumentController extends Controller
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
        $document = DocumentCategory::find($request['documentCategory']);
        $documentName = $document->name;

        $terminal = Terminal::find($request['terminal']);
        $terminalName = $terminal->name;

        if ($request->hasFile('uploadFile')) {

            $uploadFile = $request->file('uploadFile');
            $ext = $uploadFile->extension();
            $fileName = $request['cargoID'].'_'.$documentName;

            $uploadFile->move('Docs/'.$terminalName.'/'.$request['cargoID'],$fileName.".{$ext}");
        } else {
            # code...
        }
        
        

        return $request;
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
