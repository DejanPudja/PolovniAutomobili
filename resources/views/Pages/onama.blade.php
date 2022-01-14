@extends('layouts.app')
@section('content')
    <div class="row" style="padding-top:100px">
        <div class="col-lg-6" style="padding-left: 50px; font-size:22px">
            <p>Polovniautomobili je najposećeniji domaći sajt za kupovinu i prodaju automobila.
                Sajt polovniautomobili želi da utiče na unapređenje i razvoj tržišta automobila kroz povećanje korišćenja Interneta u kupoprodaji vozila.
                Kupcima ovaj sajt želi da olakša donošenje prave odluke o kupovini, kroz kreiranje mogućnosti lakog upoređivanja širokog spektra ponude vozila, auto usluga i rezervnih delova, kao i kroz pružanje zaokružene celine praktičnih i neophodnih informacija.                
                Prodavcima, auto salonima i auto dilerima sajt polovniautomobili teži da pomogne u pospešivanju prodaje korišćenjem Interneta u poslovanju i omogući im brže i lakše povezivanje sa kupcima.</p>
        </div>
        <div class="col-lg-6">
            <img src="{{asset('images/image.png')}}" alt="" style="float: right;width:800px ">
        </div>
        <h1 style="margin-left: 50px; border-bottom:3px solid black;padding:0 10px">Prijatelji sajta</h1>
        <div class="col-lg-12" style="margin-left:50px">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-10">
                    <h3 class="caption">Internet prodaja guma</h3>
                    <a href="www.internet-prodaja-guma.com">www.internet-prodaja-guma.com</a>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-10">
                    <h3 class="caption">Osiguranik</h3> 
                    <a href="www.osiguranik.com">www.osiguranik.com</a>            
                </div>
                <div class="col-lg-4 col-md-5 col-sm-10">
                    <h3 class="caption">Moj Novi Auto</h3>
                    <a href="www.mojnoviauto.com">www.mojnoviauto.com</a>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-10">
                    <h3 class="caption">Novogodišnji centar</h3>
                    <a href="www.novagod.com">www.novagod.com</a>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-10">
                    <h3 class="caption">Seat Klub Srbija forum</h3> 
                    <a href="forum.seatklub.rs">forum.seatklub.rs</a>            
                </div>
                <div class="col-lg-4 col-md-5 col-sm-10">
                    <h3 class="caption">Citroën forum Srbije</h3>
                    <a href="www.citroenforumsrbije.com">www.citroenforumsrbije.com</a>
                </div>
            </div>
        </div> 
    </div>
    <footer style="background-color:#333;margin-top:50px">
        <div class="footer" >
            <p class="text-center p-4" style="color: #fff">Polovniautomobili ©2022/Sva prava zadržana</p>
        </div>
    </footer>
@endsection
