@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <h3>Callcenter</h3>
            <ul>
            	<li><a href="{{route('api.inwoners.stad', ['city' => 'Utrecht'])}}" target="_blank">Bekijk inwoners Utrecht</a></li>
            	<!-- <li><a href="{{route('api.inwoners.stad', ['city' => 'Amsterdam'])}}" target="_blank">Bekijk inwoners Amsterdam</a></li> -->
            	<li><a href="{{route('api.add.rit', ['id' => 1])}}" target="_blank">Voeg rit toe</a></li>
            </ul>
        </div>
        <div class="col-md-2">
            <h3>Taxi</h3>
            <ul>
            	<li><a href="{{route('api.taxis.ritten', ['id' => 1])}}" target="_blank">Bekijk ritten Taxi Utrecht</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
