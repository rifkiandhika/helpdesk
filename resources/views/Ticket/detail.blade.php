<title>Detail</title>
@extends("layouts.master")
@section("css")
<style>
  /* .btn{
    color: white;
  } */


</style>
@endsection
@section("content")
<!-- Content Header (Page header) -->
<form class="/Ticket/details/{{$data->id}}" method="get">
                      
                       <br>
                       <br>

                        <div class="invoice p-3 mb-3">
                          <div class="col-12">
                            <h4>
                              <i class="fas fa-ticket-alt"></i> IT HELPDESK
                              <small class="float-right">Date : {{$data->created_at}}</small>
                            </h4>
                          </div>

                          <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                            
                          From 
                          <address>
                          <strong>{{$data->users->nama}}</strong> <br>
                          Divisi : {{$data->users->divisi}} <br>
                          
                        </address>
                          </div>

                          <!-- Status_ticket -->
                          <div class="col-sm-4 invoice-col">
                          <address>
                            <strong>Status Ticket : 
                              
                            @if ($data->status_ticket == "Menunggu")
                        <td><a  class="btn btn-warning" >{{$data->status_ticket}}</a></td>

                        @endif
                        @if ($data->status_ticket == "Direspon")
                        <td><a  class="btn btn-primary" >{{$data->status_ticket}}</a></td>

                        @endif
                        @if ($data->status_ticket == "Selesai")
                        <td><a class="btn btn-success">{{$data->status_ticket}}</a></td>

                        @endif
                          
                          </strong><br>
                          </address>

                          <strong> No Ticket :</strong> <br>
                        </div>

                       
                        </div>
                          
                        <hr>
                        <div class="row">
                          <div class="col-6"></div>
                        </div>

                        <div class="row">
                        <div class="col-6">
                          <label for=""> Keluhan</label>
                          <input type="text" value="{{$data->keluhan}}" readonly class="form-control"> <br>
                          
                          <label for="" > Keterangan Lengkap </label>
                         <textarea readonly class="form-control" rows="6">{{$data->keterangan}}</textarea> <br> 

                        </div>


                        <form action="/tickets/updata/{{$data->id}}" method="post">
                        <div class="col-6">
                        <label for="">Tanggapan Dept IT</label> <br>
                        <textarea  id="" cols="80" rows="10"></textarea> <br> <br>

                        <select id="tingkat_kesulitan" class="form-control" name="tingkat_kesulitan">
                                    <option selected>Tingkat Kesulitan</option>
                                        <option value="Tinggi">Tinggi</option>
                                        <option value="Menengah">Menengah</option>
                                        <option value="Rendah">Rendah</option>
                                    </select>
                        </div>
                        </div>
                        
                        
                        <br>
                        <br>
                        <hr>
                        <td>
                          <ul class="table-action ml-2">
                            
                            @if ($data->image !== null)
                            <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">
                              <i class="fa fa-image"></i> Gambar
                            </button></li>
                            
                            <li style="margin-left: 82%;">  
                        <div>
                          <a href="/Ticket"><button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button></a>
                        </div>
                            </li>
                            @endif
                            
                          </ul>
                        </td>
                        </form>  

                        </div>
                        
                      


                        
                      </tr>
                      <!-- Button trigger modal -->


                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" style="overflow: hidden;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 w-100" id="exampleModalLabel">Gambar Ticket</h1>
                            </div>
                            <div class="modal-body col-lg-2">
                              <img src="{{ asset('gambarticket/'.$data->image) }}" style="object-fit: cover;width: 750px;height: 500px">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>


</form>





@endsection