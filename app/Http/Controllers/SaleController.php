<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
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
        $sale = new Sale();
        $sale->service_1 = $request->get('name_1');
        $sale->service_2 = $request->get('name_2');
        $sale->service_3 = $request->get('name_3');
        $sale->service_4 = $request->get('name_4');
        $sale->service_5 = $request->get('name_5');
        $sale->service_extra = $request->get('name_extra') != null ? $request->get('name_extra') : 'N';

        $sale->price_1 = $request->get('price_1');
        $sale->price_2 = $request->get('price_2');
        $sale->price_3 = $request->get('price_3');
        $sale->price_4 = $request->get('price_4');
        $sale->price_5 = $request->get('price_5');
        $sale->price_extra = $request->get('price_extra') != null ? $request->get('price_extra') : 0;

        //$sale->save();
        return view('sale.confirm', compact('sale'));
    }

    public function confirmSale(Request $request){
        $sale = new Sale();
        $sale->service_1 = $request->get('name_1');
        $sale->service_2 = $request->get('name_2');
        $sale->service_3 = $request->get('name_3');
        $sale->service_4 = $request->get('name_4');
        $sale->service_5 = $request->get('name_5');
        $sale->service_extra = $request->get('name_extra') != null ? $request->get('name_extra') : 'N';

        $sale->price_1 = $request->get('price_1');
        $sale->price_2 = $request->get('price_2');
        $sale->price_3 = $request->get('price_3');
        $sale->price_4 = $request->get('price_4');
        $sale->price_5 = $request->get('price_5');
        $sale->price_extra = $request->get('price_extra') != null ? $request->get('price_extra') : 0;

        $sale->save();
        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

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
