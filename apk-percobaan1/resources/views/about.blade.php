@extends('layouts.main')

@section('container')
<div class="container">
    <div class="text-center">
        

    <h1>Halaman About</h1>
    <h3 class="mb-5">{{$name}}</h3>

    <img src="img/{{$image}}" alt="{{$name}}" width="300">
   
    <!--class="img-thumnail rounded-circle"-->

    <p class="mb-5"></p>
    <p>Mojokerto, 23 Januari 2002</p>
    <p>09040620047@student.uinsby.co.id</p>
    <p>anangmisbakhulkhoir@gmail.com</p>
    <p>{{ $email }}</p>

    <p class="mb-5"></p>
    <P>MI NURUL FALAH</P>
    <p>SMPN 1 KUTOREJO</p>
    <P>SMAN 1 KUTOREJO</P>
    <P>UIN SUNAN AMPEL SURABAYA</P>

        
    </div>
</div>
    @endsection