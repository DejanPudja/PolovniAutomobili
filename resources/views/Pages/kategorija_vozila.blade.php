@extends('layouts.app')
@section('content')

<div class="container">
    <nav aria-label="breadcrumb"style="margin-top: 120px; margin-bottom:90px">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Kategorije">Kategorije</a></li>
          @foreach($kategorije as $kategorija)
          <li class="breadcrumb-item"><a href="#">{{$kategorija->marka}}</a></li>
          @break
          @endforeach
        </ol>
    </nav>
    @if(count($kategorije)>0)
        @foreach($kategorije as $kategorija)
            <div class="container mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{asset($kategorija->slika1)}}"></div>
                            <div class="col-md-6 mt-1">
                                <h5>{{$kategorija->naziv}}</h5>
                                <div class="mt-1 mb-1 spec-1" style="padding-top: 30px"><span>{{$kategorija->godiste}}</span><span class="dot"></span><span>{{$kategorija->kilometraza}}km</span><span class="dot"></span><span>{{$kategorija->menjac}}<br></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>{{$kategorija->gorivo}} | {{$kategorija->kubikaza}} cm3</span><span class="dot"></span><span>{{$kategorija->snaga_motora}} KS</span><span class="dot"></span><span>{{$kategorija->broj_vrata}} /vrata<br></span></div>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1">{{$kategorija->cena}} Eura</h4>
                                </div>
                                <div class="d-flex flex-column mt-4"><a class="btn btn-primary btn-sm" href="/Automobili/{{$kategorija->id}}" >Detalji</a><button class="btn btn-outline-primary btn-sm mt-2" type="button">Sacuvaj</button></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
        {{$kategorije->links()}}
    @else
    <h1>Nema jos vozila za ovu kategoriju</h1>
    @endif
</div>

@endsection


