<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["tickets"] = Ticket::all();
        return view("/Ticket/index", $data);
    }

    public function insert_data(Request $request)
    {
        $data=$request->validate([
            'keluhan' => 'required',
            'keterangan' => 'required',
            'tempat'=> 'required',
            'image'=> 'required'
        ]);
        ($data);
        Ticket::create([
            'keluhan'=> $request->keluhan,
            'keterangan'=> $request->keterangan,
            'tempat'=> $request->tempat,
            'image'=> $request->image,
            'created_at'=> now()
        ]);
        return back()->with('status', 'Data Berhasil Dikirim');
    }
    
    public function delete($id)
    {
        $data = Ticket::find($id);
        $data->delete();
        return redirect('/Ticket')->with('Status',"Ticket Berhasil Dihapus");
    }

    public function status($id){
        Ticket::find($id)->update([
            'status_ticket'=>'Direspon',
        Ticket::find($id)->update([
            'status_ticket'=>'Selesai'
        ])    
            ]);
            return back()->with("tickets.status");



    }

    


    

    
    

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // if($request->hasFile('image'));
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
        Ticket::find($id);
        $data = Ticket::find($id);
      return view('Ticket.edit', compact('data'));
    }


    public function detail($id){
        $data["users"] = User::all();
        $data["tickets"] = Ticket::all();
        $data = User::find($id);
        $data = Ticket::find($id);
        return view('Ticket.detail', $data, compact('data'));
    }

    public function details($id){
        $data["users"] = User::all();
        $data["tickets"] = Ticket::all();
        $data = User::find($id);
        $data = Ticket::find($id);
        return view('Ticket.detail',$data ,compact('data'));
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
   
}