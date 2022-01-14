@extends('layouts.app')
@section('content')

<div class="section">
    <div  class=" bg-cover text-white" >
        <div class=" py-5 text-center">
            <h1 class="display-4 pt-12" style="color: black; font-size:50px; padding-top:200px">Dobrodošli na stranicu polovnih automobila</h1>
            <p class="font-italic mb-0" style="color: black; font-size:25px;">Pronađite najbolje vozilo za Vas.</p>
        </div>
    </div>
    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="form"> <i class="fa fa-search"></i> <input type="text" class="form-control form-input" placeholder="Search anything..."></div>
            </div>
        </div>
    </div>
</div>
    @if(count($automobili)>0)
        @foreach($automobili as $automobil)
            <div class="container mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{$automobil->slika1}}"></div>
                            <div class="col-md-6 mt-1">
                                <h5>{{$automobil->naziv}}</h5>
                                <div class="mt-1 mb-1 spec-1" style="padding-top: 30px"><span >{{$automobil->godiste}}</span><span class="dot"></span><span>{{$automobil->kilometraza}}km</span><span class="dot"></span><span>{{$automobil->menjac}}<br></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>{{$automobil->gorivo}} | {{$automobil->kubikaza}} cm3</span><span class="dot"></span><span>{{$automobil->snaga_motora}} KS</span><span class="dot"></span><span>{{$automobil->broj_vrata}} /vrata<br></span></div>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1">{{$automobil->cena}} Eura</h4>
                                </div>
                                <div class="d-flex flex-column mt-4"><a class="btn btn-primary btn-sm" href="Automobili/{{$automobil->id}}" >Detalji</a>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
        <div class="container" style="">
            {{$automobili->links()}}
        </div>   
    @endif
@endsection
