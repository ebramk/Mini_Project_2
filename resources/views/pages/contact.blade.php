@extends('layouts.app')
@section('content')
    <form id="contact-form" class="contact-form" action="{{route('contact.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Full Name:</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Your Name">
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
@stop