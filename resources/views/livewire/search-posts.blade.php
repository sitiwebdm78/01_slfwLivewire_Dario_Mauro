<div>
    <div class="container-fluid h-100 bkgblu txtylw">
        <div class="row pt-3 h-100 mx-5">
            <input wire:model.live="search" type="text" placeholder="Cerca Tra i Posts..." class=" mb-5">
            @if(session()->has('alert'))
                <div class="alert alert-warning">
                    {{session('alert')}}
                </div>
                
            @endif
            @foreach($posts as $post)
                <div class="col-12 col-md-4 mb-5 h-100">
                    <div class="card mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

