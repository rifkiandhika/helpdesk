<title>Create</title>
@extends("layouts.master")
@section("css")
<style>
  /* .btn{
    color: white;
  } */

</style>
@endsection
@section("content")
        
    <br>
    <form method="{{ url('Ticket')}}" action="post">
        @csrf


        <button type="submit">SIMPAN</button>
    </form>    







    @endsection