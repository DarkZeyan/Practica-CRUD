@extends('layouts.master')
@if(isset($poet) and is_object($poet))
    @php
        $title = 'Modificacion de un Poeta';
        $poet_code = $poet->poet_code;
        $first_name = $poet->first_name;
        $surname = $poet->surname;
        $address = $poet->address;
        $postcode = $poet->postcode;
        $telephone_number = $poet->telephone_number;
    @endphp
@else
    @php
        $title = 'Alta de un Poeta';
        $poet_code = '';
        $first_name = '';
        $surname = '';
        $address = '';
        $postcode = '';
        $telephone_number = '';
    @endphp
@endif
@section('tituloHeader', $title)
@section('contenido')

    <form action="{{isset($poet) ? action('CRUD@update') : action('CRUD@store')}}" method="POST">
        {{ csrf_field() }}
        @if (isset($poet) and is_object($poet))
        <input type="hidden" name="poet_code" value="{{$poet_code}}">
       @endif
        <label for="poet_code">Poet Code</label>
        <input type="number" name="poet_code" value="{{$poet_code}}">
        <br>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="{{$first_name}}">
        <br>
        <label for="surname">Surname</label>
        <input type="text" name="surname" value="{{$surname}}">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" value="{{$address}}">
        <br>
        <label for="postcode">Post Code</label>
        <input type="text" name="postcode" value="{{$postcode}}">
        <br>
        <label for="telephone_number">Telephone Number</label>
        <input type="text" name="telephone_number" value="{{$telephone_number}}">
        <br>
        <input type="submit" value="submit">
    </form>
@endsection
@section('footer')
{{-- isset($poetas ? action('CRUD@update',['poet_code'=>$poet_code]) : action('CRUD@save')) --}}