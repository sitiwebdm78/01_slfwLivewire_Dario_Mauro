<x-baselayout> 
  {{--   <x-displaymessage />
    <x-displayerror />   --}}
    <div class="container-fluid vh-100 bkgblu">
        <div class="row mb-5">
            <div class="col-12 custombody2 vh-100">
                <h1 class="text-center mt-5 pt-3 txtwht">Accedi alla Tua Area Riservata</h1>
                <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" class="formcustom2 centerform shadow-lg">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label ms-4 txtwht">Insirisci la tua e-mail</label>
                        <input type="email" name='email' class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label ms-4 txtwht">Inserisci la Password</label>
                        <input type="password" name='password' class="form-control" id="password" value="{{old('password')}}">
                    </div>
                    <div class="buttonform">
                        <button type="submit" class="btn btn-primary align-items-center mb-3">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-baselayout>