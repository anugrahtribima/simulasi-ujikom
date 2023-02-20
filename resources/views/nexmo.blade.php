@extends('layouts.app')

@section('content')
<form action="{{route('nexmo.submit')}}" method="POST">

    {{ csrf_field() }}
    
    
    <label for="hp">Masukkan No. HP *</label>
    
    <input type="number" name="no_hp" id="hp" placeholder="Masukkan No. HP" >
    
    <label for="pesan">Masukkan Pesan</label>
    
    <input type="text" name="pesan" id="pesan" placeholder="Masukkan Pesan"  >
    
    <button name="submit" type="submit">Kirim Pesan</button>    
    
    </form>
@endsection