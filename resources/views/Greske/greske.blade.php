
    @if(count($errors)>0)
        {{-- @foreach($errors->all() as $error)
        <div class="center">
            <div class="alert"><i class="fa fa-exclamation-triangle">{{$error}}</i></div>
                
                
        </div>
            
        @endforeach --}}
        <div class="alert" style="width:100%"><i class="fa fa-exclamation-triangle">Molimo Vas da popunite sva polja</i></div>
    @endif
        @if(session('uspesno'))
            <div class="alert alert-success">
            {{session('uspesno')}}
            </div>
        @endif

