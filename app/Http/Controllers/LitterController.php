<?php

namespace App\Http\Controllers;

use Auth;
use App\Litter;
use App\Puppy;
use Illuminate\Http\Request;

class LitterController extends Controller
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
        //Create the litter here
        $litter = Litter::create
        ([
          'kennel_id' => Auth::user()->kennel->id,
          'breed' => $request->breed,
          'size'  => $request->size,
          'sire_id' => $request->sire_id,
          'dam_id'  => $request->dam_id,
          'release' => \Carbon\Carbon::parse($request->birthday)->addWeeks($request->release)->toDateTimeString(),
          'birthday' => \Carbon\Carbon::parse($request->birthday)->toDateTimeString(),
        ]);

        for ($i = 0; $i < $request->size; $i++) {
          Puppy::create([
            'name' => '',
            'breed' => $request->breed,
            'litter_id' => $litter->id,
          ]);
        }

        //Return a redirect;
        return redirect('/litters/' . $litter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function show(Litter $litter)
    {
        return view('dashboard.finish-litter')->with([
          'litter' => $litter,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function edit(Litter $litter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Litter $litter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Litter $litter)
    {
        $litter->delete();
        return redirect()->back();
    }
}
