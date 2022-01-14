@extends('layouts.app')
@section('content')
{{-- <div class="section d-flex justify-content-center">
    <div class="container col-lg-4 center ">
        <form action="#" method="POST" autocomplete="off">
        <h2 class="text-center">Ulogujte se</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" placeholder="Unesite Vaš email.." name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Lozinka:</label>
                <input type="password" class="form-control" placeholder="Unesite Vašu lozinku.." name="password" required>
            </div>
            <input type="submit" name="submit" class="form-control form-btn" value="Ulogujte se">
        </form>
    </div>
</div> --}}
<div class="section">
    <div class="registration-form" style="padding-top:150px">
        {!! Form::open(['action'=>'App\Http\Controllers\CarsController@store', 'method'=>'POST', 'autocomplete'=>'off'])!!}
                
            <div class="form-icon">
                <span><i><img src="{{asset('images/user.png')}}"></i></span>
            </div>
            <div class="form-group">
                {{Form::text('Ime',"",['class'=>'form-control item','placeholder'=>'Unesite Vase ime...'])}}
            </div>
            <div class="form-group">
                {{Form::password('Adresa',['class'=>'form-control item','placeholder'=>'Unesite lozinku...'])}}
            </div>
            
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Ulogujte se</button>
            </div>
        </form>
        <div class="social-media">
            
        </div>
    </div>
</div>
@endsection
