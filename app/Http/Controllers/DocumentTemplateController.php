<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Terminal;
use App\DocumentTemplate;

class DocumentTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = DocumentTemplate::all();

        return view('user.document-template-list',compact('documents'));
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

        //Get Terminal Name for Folder Naming
        $terminal = Terminal::find($request['terminal']);
        $terminalName = $terminal->name;

        if ($request->hasFile('uploadFile')) {

            $uploadFile = $request->file('uploadFile');
            $ext = $uploadFile->extension();
            $fileName = $request['name'].'_'.$terminalName; //File Name CONDENSATE_DI_TEMPLATE-ESCRAVOS
            $uploadFile->move('Docs/Templates/'.$terminalName,$fileName.".{$ext}"); //Upload File

            $document = DocumentTemplate::create([
                'name' => $request['name'],
                'description' => $request['documentComment'],
                'terminal_id' => $request['terminal'],
                'path' => 'Docs/Templates/'.$terminalName.'/'.$fileName.".{$ext}",
                'user_id' => auth()->user()->id,
            ]);//Persist Record to DB


            flash('Document Templatea and Successfully Uploaded')->success()->important();
            flash()->overlay('Document Templatea and Successfully Uploaded', 'Success Message');
            return redirect()->back();


        } else {

            flash('Error Creating Template or Uploading File')->error()->important();
            flash()->overlay('Error Creating and  Uploading File', 'Error Message');
            return redirect()->back();
        }
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
        //Get Terminal Name for Folder Naming
        $documentTemplate = DocumentTemplate::find($request['templateID']); //Get the template
        $terminalName = $documentTemplate->terminal->name;
        
        if ($request->hasFile('uploadFile')) {

            $uploadFile = $request->file('uploadFile');
            $ext = $uploadFile->extension();
            $fileName = $request['name'].'_'.$terminalName; //File Name CONDENSATE_DI_TEMPLATE-ESCRAVOS
            $uploadFile->move('Docs/Templates/'.$terminalName,$fileName.".{$ext}"); //Upload File

            $documentTemplate->path = 'Docs/Templates/'.$terminalName.'/'.$fileName.".{$ext}";
        } 
        
        $documentTemplate->name = $request['name'];
        $documentTemplate->description = $request['documentComment'];
        $documentTemplate->terminal_id = $request['terminal'];
        
        $documentTemplate->save();
        

        flash('Document Template Updated and Successfully Uploaded')->success()->important();
        flash()->overlay('Document Template Updated and Successfully Uploaded', 'Success Message');
        return redirect()->back();
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
