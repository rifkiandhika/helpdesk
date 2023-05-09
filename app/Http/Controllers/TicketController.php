<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["tickets"] = Ticket::paginate(10);
        return view("/Ticket/index", $data);
    }

    public function insert_data(Request $request)
    {
        $data=$request->validate([
            'keluhan' => 'required|max:255',
            'keterangan' => 'required',
            'divisi'=> 'required',
            'tempat'=> 'required',
            'image'=> 'image|file'
        ]);
        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('gambarticket', $name);
            Ticket::create([
                'keluhan'=> $request->keluhan,
                'keterangan'=> $request->keterangan,
                'divisi'=> $request->divisi,
                'tempat'=> $request->tempat,
                'image'=> $name,
                'user_id'=>$request->user,
                'created_at'=> now()
            ]);
            return back()->with('status', 'Data Berhasil Dikirim');

        }
        Ticket::create([
            'keluhan'=> $request->keluhan,
            'keterangan'=> $request->keterangan,
            'divisi' => $request-> divisi,
            'tempat'=> $request->tempat,
            'user_id'=>$request->user,
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
        $data = Ticket::find($id);
        $data["tickets"] = Ticket::all();
        return view('Ticket.detail',$data, compact('data'));
    }

    public function details($id){
        $data["users"] = User::all();
        $data["tickets"] = Ticket::all();
        $data = User::find($id);
        $data = Ticket::find($id);
        return view('Ticket.detail',$data, compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updata(Request $request, $id)
    {
        $data = Ticket::find($id);
        $data->update($request->all());
        return redirect()->route('/Ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}