@extends('layouts.master')
@section('tituloHeader', 'Poetas')

@section('contenido')
    <h2>Ingresar otro poeta<a href="{{action('CRUD@create')}}"><img src="{{url('/images/add.png')}}" alt="" style="width:64px"></a></h2>
    <br>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Address</th>
                <th scope="col">PostCode</th>
                <th scope="col">Telephone Number</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($poetas as $poet)
            <tr>
                <td>{{$poet->poet_code}}</td>
                <td>{{$poet->first_name}}</td>
                <td>{{$poet->surname}}</td>
                <td>{{$poet->address}}</td>
                <td>{{$poet->postcode}}</td>
                <td>{{$poet->telephone_number}}</td>
                <td><a href="{{action('CRUD@show',['poet_code'=>$poet->poet_code])}}"><img src="{{url('/images/update.png')}}" alt="Update" style="width:64px"></a></td>
                <td><a href="{{action('CRUD@destroy',['poet_code'=>$poet->poet_code])}}"><img src="{{url('/images/delete.png')}}" alt="Delete" style="width:64px"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('footer')