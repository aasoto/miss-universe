@extends('dashboard.layout')
@section('content')
    <br>
    <div class="card">
        <div class="card-header-primary">
            <h5>Información comité nacional de {{$nationalcommittee->country->name}}</h5>
        </div>
        <div class="card-body">
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
        </div>
    </div>
@endsection
