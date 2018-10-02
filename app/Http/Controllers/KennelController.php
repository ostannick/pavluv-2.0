<?php

namespace App\Http\Controllers;

use App\Kennel;
use Illuminate\Http\Request;

class KennelController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kennel  $kennel
     * @return \Illuminate\Http\Response
     */
    public function show(Kennel $kennel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kennel  $kennel
     * @return \Illuminate\Http\Response
     */
    public function edit(Kennel $kennel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kennel  $kennel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kennel $kennel)
    {
        $response = new \stdClass();

        $kennel->update($request->all());

        $response->title = 'SAVED';
        $response->message = 'Kennel details saved.';
        $response->code = 200;

        return json_encode($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kennel  $kennel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kennel $kennel)
    {
        //
    }
}
