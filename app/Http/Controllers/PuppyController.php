<?php

namespace App\Http\Controllers;

use App\Puppy;
use App\Helpers;
use Illuminate\Http\Request;

class PuppyController extends Controller
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
     * @param  \App\Puppy  $puppy
     * @return \Illuminate\Http\Response
     */
    public function show(Puppy $puppy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puppy  $puppy
     * @return \Illuminate\Http\Response
     */
    public function edit(Puppy $puppy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Puppy  $puppy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puppy $puppy)
    {


      $saleType = 'full';
      if($request->saleType == 'true')
      {
        $saleType = 'shared';
      }

      $isMale = true;
      if($request->gender == 'Female')
      {
        $isMale = false;
      }

      $money = computePavluvFee($request->price);

        $puppy->update([
          'name' => $request->name,
          'breeder_price' => $request->price,
          'breeder_deposit' =>$request->deposit,
          'pavluv_price' => $money['gross'],
          'pavluv_keeps' => $money['net'],
          'sale_type' => $saleType,
          'color' => $request->color,
          'is_male' => $isMale,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puppy  $puppy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puppy $puppy)
    {
        //
    }
}
