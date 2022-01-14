@extends('layouts.app')
@section('content')

<div class="container">
  <nav aria-label="breadcrumb"style="margin-top: 90px; ">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/Kategorije">Kategorije</a></li>
      <li class="breadcrumb-item"><a href="/Kategorija/{{$automobil->marka}}">{{$automobil->marka}}</a></li>
      <li class="breadcrumb-item"><a href="#">{{$automobil->naziv}}</a></li>
    </ol>
</nav>
@if($automobil->user_id == auth()->user()->id)
    {!! Form::open(['action'=>['App\Http\Controllers\CarsController@destroy', $automobil->id], 'method'=>'POST'])!!}
      <div class="col-lg-2 col-md-3 col-xs-6" style="margin-top:-50px;float: right;">
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Obrisi oglas',['class'=>'form-control','style'=>'background-color:red'])}}
      </div>
    {!!Form::close()!!} 

      <div class="col-lg-2 col-md-3 col-xs-6 " style="float: right;">

  <a style="border: 1px solid blue; padding:9px;border-radius:3px;  background-color:blue; color:#ffff" href="/AzuriranjeOglasa/{{$automobil->id}}/edit">Izmeni oglas</a>
</div>
@endif

        
  
      

    <section class="mb-5" style="padding-top: 30px">
        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">      
            <div id="mdb-lightbox-ui"></div>     
            <div class="mdb-lightbox">   
              <div class="row product-gallery mx-1">    
                <div class="col-12 mb-0">
                  <h1>{{$automobil->naziv}}</h1>
                  <figure class="view overlay rounded z-depth-1 main-img">
                    <a href='{{asset($automobil->slika1)}}'
                      data-size="710x823">
                      <img src="{{asset($automobil->slika1)}}"
                        class="img-fluid z-depth-1" style="margin-top: 10px">
                    </a>
                  </figure>
                  {{-- <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                      data-size="710x823">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                        class="img-fluid z-depth-1">
                    </a>
                  </figure>
                  <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                      data-size="710x823">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                        class="img-fluid z-depth-1">
                    </a>
                  </figure>
                  <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                      data-size="710x823">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                        class="img-fluid z-depth-1">
                    </a>
                  </figure> --}}
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12">
                      <div style="margin-top: 20px">
                        <p><span class="mr-1"><strong style="font-size:30px">{{$automobil->cena}} €</strong></span></p>
                      </div>
                    </div>
                    {{-- <div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                          class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                          class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                          class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
      
            </div>
      
          </div>
          <div class="col-md-6">
      
            <h1 style="margin-top: 70px">Opšte informacije</h1>
            {{-- <p class="mb-2 text-muted text-uppercase small">Shirts</p>
            <ul class="rating">
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-primary"></i>
              </li>
            </ul> --}}
            {{-- <p><span class="mr-1"><strong style="font-size:30px">{{$automobil->cena}} €</strong></span></p> --}}
            {{-- <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
              error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
              officia quis dolore quos sapiente tempore alias.</p> --}}
            <div class="table-responsive">
              <table class="table table-sm table-borderless mb-0" style="border: none">
                <tbody>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Marka:</strong></th>
                    <td>{{$automobil->marka}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Model:</strong></th>
                    <td>{{$automobil->model}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Godiste:</strong></th>
                    <td>{{$automobil->godiste}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Kilometraza:</strong></th>
                    <td>{{$automobil->kilometraza}} km</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Gorivo:</strong></th>
                    <td>{{$automobil->gorivo}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Kubikaza:</strong></th>
                    <td>{{$automobil->kubikaza}} cm3</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Snaga motora:</strong></th>
                    <td>{{$automobil->snaga_motora}} KS</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Menjač:</strong></th>
                    <td>{{$automobil->menjac}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Klima:</strong></th>
                    <td>{{$automobil->klima}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Broj vrata:</strong></th>
                    <td>{{$automobil->broj_vrata}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Registrovan:</strong></th>
                    <td>{{$automobil->registrovan}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            
          </div>
        </div>
        <div class="col-12" >
          <div class="view overlay rounded z-depth-1 gallery-item">
            <p>{{$automobil->opis}}</p>
            <div class="mask rgba-white-slight"></div>
          </div>
        </div>
      </section>
</div>
@endsection