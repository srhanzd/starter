<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Crudcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//       return  'srhanindex';
//    }

   public function get(){
       Offer::query()->insert(['name'=>'ali','price'=>'10']);
        return Offer::query()->select('name','price')->get();
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        return 'srhancreta';
//    }
    public function create(){
        return view('offers\creat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }
//    public function store(){
//        Offer::query()->create(['name'=>'offer2','price'=>'5000','details'=>'offer2det']);
//    }
    public function store(Request $request)
    {
        //Offer::query()->create(['name'=>'offer2','price'=>'5000','details'=>'offer2det']);
        //return $request;
        //1-validate data before insert to data base
       $rules= $this->getrules();
       $masseges= $this->getmasseges();
        $validator = Validator::make($request->all(), $rules,$masseges);
        if ($validator->fails()) {

return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            //2-insert to data base
            Offer::query()->create(['name' => $request->name,
                'price' => $request->price,
                'details' => $request->details,

            ]);
            return redirect()->back()->with(['successes'=>'the offer has ben added successfully']);
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
        return 'srhanshow';
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

    protected function getmasseges()
    {
        return $masseges=['name.required'=>__('messages.offer_name_required'),
            'name.max'=>__('messages.offer_name_max'),
            'name.unique'=>__('messages.offer_name_unique'),
            'price.required'=>__('messages.offer_price_required'),
            'price.numeric'=>__('messages.offer_price_numeric'),
            'details.required'=>__('messages.offer_details_required'),];
    }

    protected function getrules()
    {

        return  $rules=[
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',];
    }
}
