<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\NodeElement;
use App\NodeComment;

class NodeCommentController extends Controller
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
        $nodeComment = NodeComment::create([
            'node_element_id' => $request['nodeElementID'],
            'comment' => $request['comment'],
            'user_id' => auth()->user()->id
        ]);

        $node = NodeElement::find($request['nodeElementID']);
        $node->status_id = $request['nodeElementStatus'];
        $node->save();


        
        flash('Update Successful')->success()->important();
        flash()->overlay('Update Successful', 'Success Message');

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
        $nodeComment = NodeComment::find($id);
        $nodeComment->delete();

        flash('Comment Delete Successful')->success()->important();
        flash()->overlay('Comment Delete Successful', 'Success Message');

        return response()->json([
            'id' => $id,
        ]);
    }

    // public function delete(Request $request)
    // {
    //     $id = $request->input('id');
    //     $nodeComment = NodeComment::find($id);
    //     $nodeComment->delete();

    //     flash('Comment Delete Successful')->success()->important();
    //     flash()->overlay('Comment Delete Successful', 'Success Message');

    //     return response()->json([
    //         'id' => $id,
    //     ]);
    // }
}
