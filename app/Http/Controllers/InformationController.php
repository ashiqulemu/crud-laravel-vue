<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $information= Information::all();
       return response()->json([
       	'informations'=>$information
       ]);
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
         Information::create($request->all());
         $message='Your Information created successfully';
        return response()->json([
        	'message'=>$message,
        	'message2'=>'Seccond Message',
        	'message3'=>'third message',
        	'message4'=>'fourth message',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $information=Information::find($id);
       return response()->json([
       	'information'=>$information
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $information=Information::find($id);
	    $information->update($request->all());
       return response()->json([
       	    'message'=>'Your data has been updated'
       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $information=Information::find($id);
       $information->delete();
    }
}
