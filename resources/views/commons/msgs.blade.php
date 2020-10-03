@if(session()->has('alert-success'))
    <br>
    <div class="alert alert-success" role="alert">
        {{ session()->get('alert-success') }}
    </div>
@endif

@if(session()->has('alert-danger'))
    <br>
    <div class="alert alert-danger" role="alert">
        {{ session()->get('alert-danger') }}
    </div>
@endif

@if(session()->has('errors'))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif