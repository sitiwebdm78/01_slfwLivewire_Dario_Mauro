<div>
    <div class="container-fluid vh-100 bkgblu txtylw">
        <div class="row pt-3">
            <div class="col-12">
                <h1 class="text-center">Sono un componente LiveWire</h1>
                <div class="display-5 text-center">
                    <h2>Valore -> {{ $value }}</h2>
                    <button class="btn btn-primary" wire:click="increment">Incrementa il Valore di 1 </button>
                    <button class="btn btn-warning" wire:click="decrement"> Decrementa il Valore di 1</button>
                    <div>
                    <button class="btn btn-primary" wire:click="incrementByNum({{$num}})"> Aggiungi {{$num}} </button>
                    <button class="btn btn-warning" wire:click="decrementByNum({{$num}})"> Detrai {{$num}} </button>
                    </div>                
                </div>
             </div>

          
           {{-- 
           
             --}}
        </div>
    </div>
</div>
