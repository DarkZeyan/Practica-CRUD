<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poet = DB::Table('Poetas')
            ->orderBy('poet_code')
            ->get();


        return view('crud.showPoetas',[
            'poetas' => $poet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.createPoetas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poet = DB::Table('Poetas')->insert([
            'poet_code'=>$request->input('poet_code'),
            'first_name'=>$request->input('first_name'),
            'surname'=>$request->input('surname'),
            'address'=>$request->input('address'),
            'postcode'=>$request->input('postcode'),
            'telephone_number'=>$request->input('telephone_number')
        ]);
        
        return redirect()->action('CRUD@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($poet_code)
    {
        $poet = DB::Table('Poetas')->where('poet_code','=', $poet_code)
            ->first();

        return view('crud.createPoetas', ['poet'=>$poet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $poet = DB::Table('Poetas')
            ->where('poet_code','=', $request->input('poet_code'))
            ->update([
                'poet_code'=>$request->input('poet_code'),
                'first_name'=>$request->input('first_name'),
                'surname'=>$request->input('surname'),
                'address'=>$request->input('address'),
                'postcode'=>$request->input('postcode'),
                'telephone_number'=>$request->input('telephone_number')
            ]);
        return redirect()->action('CRUD@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($poet_code)
    {
        $poet=DB::Table('Poetas')
            ->where('poet_code','=',$poet_code)
            ->delete();
        
        return redirect()->action('CRUD@index');
    }
}
