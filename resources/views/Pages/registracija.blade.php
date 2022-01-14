@extends('layouts.app')
@section('content')
{{-- <div class="section d-flex justify-content-center">
    <div class="container col-lg-4">
        <form action="#" method="POST" autocomplete="off">
        <h2 class="text-center">Registrujte se</h2>
            <div class="form-group">
                <label for="first_name">Ime:</label>
                <input type="text" class="form-control" placeholder="Unesite Vaše ime" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Prezime:</label>
                <input type="text" class="form-control" placeholder="Unesite Vaše prezime" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" placeholder="Unesite Vaš email.." name="email" required>
            </div>
            <div class="form-group">
                <label for="last_name">Mesto:</label>
                <input type="text" class="form-control" placeholder="Unesite mesto gde živite" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Adresa:</label>
                <input type="text" class="form-control" placeholder="Unesite Vašu adresu" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Telefon:</label>
                <input type="text" class="form-control" placeholder="Unesite Vaš broj telefona" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="password">Lozinka:</label>
                <input type="password" class="form-control" placeholder="Unesite lozinku.." name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Potvrdite lozinku:</label>
                <input type="password" class="form-control" placeholder="Unesite lozinku.." name="confim_password" required>
            </div>
            <input type="submit" name="submit" class="form-control form-btn" value="Registrujte se">
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
                {{Form::text('Prezime',"",['class'=>'form-control item','placeholder'=>'Unesite Vase prezime...'])}}
            </div>
            <div class="form-group">
                {{Form::email('Email',"",['class'=>'form-control item','placeholder'=>'Unesite Vas email...'])}}
            </div>
            <div class="form-group">
                {{Form::text('Grad',"",['class'=>'form-control item','placeholder'=>'Unesite grad stanovanja...'])}}
            </div>
            <div class="form-group">
                {{Form::text('Adresa',"",['class'=>'form-control item','placeholder'=>'Unesite adresu stanovanja...'])}}
            </div>
            <div class="form-group">
                {{Form::text('Telefon',"",['class'=>'form-control item','placeholder'=>'Unesite broj telefona...'])}}
            </div>
            <div class="form-group">
                {{Form::password('Adresa',['class'=>'form-control item','placeholder'=>'Unesite lozinku...'])}}
            </div>
            
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Kreiraj nalog</button>
            </div>
        </form>
        <div class="social-media">
            
        </div>
    </div>
</div>
@endsection
