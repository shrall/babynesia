<?php

namespace App\Http\Controllers;

use App\Models\PaymentArt;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payments = PaymentMethod::limit(2)->get();
        return view('user.payment', compact('payments', 'request'));
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
     * @param  \App\Models\PaymentArt  $paymentArt
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentArt $paymentArt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentArt  $paymentArt
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentArt $paymentArt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentArt  $paymentArt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentArt $paymentArt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentArt  $paymentArt
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentArt $paymentArt)
    {
        //
    }
}
