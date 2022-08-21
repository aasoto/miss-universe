@extends('dashboard.layout')
@section('content')
    <h1>Información comité nacional de {{$nationalcommittee->country->name}}</h1>
    <table>
        <tr>
            <td><b>Razón social</b></td>
            <td>{{$nationalcommittee->business_name}}</td>
        </tr>
        <tr>
            <td><b>País</b></td>
            <td>{{$nationalcommittee->country->name}}</td>
        </tr>
        <tr>
            <td><b>Director nacional</b></td>
            <td>{{$nationalcommittee->national_director}}</td>
        </tr>
    </table>
@endsection
