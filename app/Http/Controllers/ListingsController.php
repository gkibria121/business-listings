<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::all();
        return view('index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'name' =>  'required',
        'email' => "email"
       ]);
       $listing = new Listing;
       $listing->name = $request->input('name');
       $listing->email = $request->input('email');
       $listing->address = $request->input('address');
       $listing->phone = $request->input('phone');
       $listing->bio = $request->input('bio');
       $listing->website = $request->input('website');
       $listing->user_id = auth()->user()->id;
       $listing->save();
       return redirect('/dashboard')->with('success','Listing added');

 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $listing = Listing::find($id);
       return view('editlistings')->with('listing',$listing);
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
        $this->validate($request,[
            'name' =>  'required',
            'email' => "email"
           ]);
           $listing = Listing::find($id);
           $listing->name = $request->input('name');
           $listing->email = $request->input('email');
           $listing->address = $request->input('address');
           $listing->phone = $request->input('phone');
           $listing->bio = $request->input('bio');
           $listing->website = $request->input('website');
           $listing->user_id = auth()->user()->id;
           $listing->save();
           return redirect('/dashboard')->with('success','Listing updated');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing -> delete();
        return redirect('/dashboard')->with('success','Listing Remove');
    }
}
