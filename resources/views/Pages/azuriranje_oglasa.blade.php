@extends('layouts.app')
@section('content')
<section class="for-fixed-menu slice has-bg-cover bg-size-cover section" >
    <div class="slide ">
        <div style="padding-top: 60px; width:95%">
            @include('greske.greske')
        </div>
        <div class="container ">
            <div class="row justify-content-center">
            <div class="col-lg-8 ">
                {!! Form::open(['action'=>['App\Http\Controllers\CarsController@update',$automobil->id], 'method'=>'POST', 'autocomplete'=>'off'])!!}               
                <div class="col-lg-12">
                    <h2 class="text-center">Izmeni oglas</h2>
                </div>
                <div class="col-lg-6 ">
                    {{Form::label('marka', 'Marka:',['class'=>'strong-400'])}}
                    <div style="box-shadow:2px 2px 2px 2px silver; border-radius:5px">
                        {{ Form::select('marka', ['placeholder' => 'Izaberite marku automobila...',
                        'Alfa Romeo' => 'Alfa Romeo', 
                        'Audi' => 'Audi', 
                        'BMW' => 'BMW',
                        'Chevrolet' => 'Chevrolet',
                        'Citroen' => 'Citroen',
                        'Dacia' => 'Dacia',
                        'Daewoo' => 'Daewoo',
                        'Fiat' => 'Fiat',
                        'Ford' => 'Ford',
                        'Honda' => 'Honda',
                        'Hyundai' => 'Hyundai',
                        'Jaguar' => 'Jaguar',
                        'Jeep' => 'Jeep',
                        'Kia' => 'Kia',
                        'Lada' => 'Lada',
                        'Lancia' => 'Lancia',
                        'Land Rover' => 'Land Rover',
                        'Maserati' => 'Maserati',
                        'Mazda' => 'Mazda',
                        'Nissan' => 'Nissan',
                        'Opel' => 'Opel',
                        'Peugeot' => 'Peugeot',
                        'Porsche' => 'Porsche',
                        'Renault' => 'Renault',
                        'Seat' => 'Seat',
                        'Smart' => 'Smart',
                        'Suzuki' => 'Suzuki',
                        'Tesla' => 'Tesla',
                        'Toyota' => 'Toyota',
                        'Volkswagen' => 'Volkswagen',
                        'Volvo' => 'Volvo',
                        'Skoda' => 'Skoda',
                        ], $automobil->marka,['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-lg-6">
                    {{Form::label('model','Model:')}}
                    {{Form::text('model',$automobil->model,['class'=>'form-control','placeholder'=>'Unesite model automobila...'])}}
                </div>
                <div class="col-lg-6">
                    {{Form::label('naziv','Naziv:')}}
                    {{Form::text('naziv',$automobil->naziv,['class'=>'form-control','placeholder'=>'Unesite naziv oglasa...'])}}
                </div>
                <div class="col-lg-6">
                    {{Form::label('godiste','Godište:')}}
                    {{Form::number('godiste',$automobil->godiste,['class'=>'form-control','placeholder'=>'Unesite godište automobila...'])}}
                </div>
                <div class="col-lg-6">
                    {{Form::label('kilometraza','Kilometraža:')}}
                    {{Form::number('kilometraza',$automobil->kilometraza,['class'=>'form-control','placeholder'=>'Unesite kilometražu automobila...'])}}
                </div>
                <div class="col-lg-6 ">
                    {{Form::label('gorivo', 'Gorivo:',['class'=>'strong-400'])}}
                    <div style="box-shadow:2px 2px 2px 2px silver; border-radius:5px">
                        {{ Form::select('gorivo', ['placeholder' => 'Izaberite vrstu goriva...',
                        'Benzin' => 'Benzin', 
                        'Dizel' => 'Dizel', 
                        'TNG' => 'Benzin + Gas (TNG)',
                        'CNG' => 'Benzin + Metan (CNG)',
                        'Električni pogon' => 'Električni pogon',
                        'Hibridni pogon' => 'Hibridni pogon',
                        ], $automobil->gorivo,['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-lg-6">
                    {{Form::label('kubikaza','Kubikaža:')}}
                    {{Form::number('kubikaza',$automobil->kubikaza,['class'=>'form-control','placeholder'=>'Unesite kubikažu automobila...'])}}
                </div>
                <div class="col-lg-6">
                    {{Form::label('snaga_motora','Snaga motora:')}}
                    {{Form::number('snaga_motora',$automobil->snaga_motora,['class'=>'form-control','placeholder'=>'Unesite snagu motora...'])}}
                </div>
                <div class="col-lg-6 ">
                    {{Form::label('menjac', 'Menjač:',['class'=>'strong-400'])}}
                    <div style="box-shadow:2px 2px 2px 2px silver; border-radius:5px">
                        {{ Form::select('menjac', ['placeholder' => 'Izaberite vrstu menjača...',
                        'Manuelni4' => 'Manuelni 4 brzine', 
                        'Manuelni5' => 'Manuelni 5 brzine', 
                        'Manuelni6' => 'Manuelni 6 brzine',
                        'A/P' => 'Automoatski/Poluautomatski',
                        ], $automobil->menjac,['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-lg-6">
                    {{Form::label('broj_vrata','Broj vrata')}}
                    {{Form::number('broj_vrata',$automobil->broj_vrata,['class'=>'form-control','placeholder'=>'Unesite broj vrata na automobilu...'])}}
                </div>
                <div class="col-lg-6 ">
                    {{Form::label('klima', 'Klima:',['class'=>'strong-400'])}}
                    <div style="box-shadow:2px 2px 2px 2px silver; border-radius:5px">
                        {{ Form::select('klima', ['placeholder' => 'Izaberite da li automobil ima klimu...',
                        'Da' => 'Da', 
                        'Ne' => 'Ne', 
                        ], $automobil->klima,['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-lg-6 ">
                    {{Form::label('registrovan', 'Registrovan:',['class'=>'strong-400'])}}
                    <div style="box-shadow:2px 2px 2px 2px silver; border-radius:5px">
                        {{ Form::select('registrovan', ['placeholder' => 'Izaberite da li je automobil registrovan...',
                        'Da' => 'Da', 
                        'Ne' => 'Ne', 
                        ], $automobil->registrovan,['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-lg-6">
                    {{Form::label('broj_sasije','Broj šasije')}}
                    {{Form::text('broj_sasije',$automobil->broj_sasije,['class'=>'form-control','placeholder'=>'Unesite šasiju automobila...'])}}
                </div>
                <div class="col-lg-6">
                    {{Form::label('cena','Cena:')}}
                    {{Form::number('cena',$automobil->cena,['class'=>'form-control','placeholder'=>'Unesite cenu automobila u eurima...'])}}
                </div>
                <div class="col-lg-12">
                    {{Form::label('opis','Opis:')}}
                    <div style="box-shadow:2px 2px 2px 2px silver;">
                        {{Form::textarea('opis',$automobil->opis,['class'=>'form-control','placeholder'=>'Napišite nešto o automobilu...'])}}
                    </div>               
                </div>
                <div class="col-lg-12" style="margin-bottom: 50px">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Izmeni oglas',['class'=>'form-control'])}}
                </div>
                   {!!Form::close()!!} 
                </div>    
            </div>
        </div>
    </div>
</section>
@endsection
