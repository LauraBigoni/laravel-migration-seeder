@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Vai alla lista dei treni in ritardo:</h2>
                <p>Clicca qui -> <a href="{{ route('trains')}}">🚂</a></p>
            </div>
        </div>
    </div>
@endsection