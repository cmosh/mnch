@extends('template')
@section('title')
 <title>MNCH | {{$title}}</title>
@endsection

@section('pageinfo')

 
@endsection         
 

@section('content')




        <form action="/usermanagement/mail">
    <input class="btn btn-primary form-control" type="submit" value="SEND"></form>
  


 @endsection


