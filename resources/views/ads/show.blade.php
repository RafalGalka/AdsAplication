@extends('layout.header')

@section('content')
    <div class="card">
        <h5 class="card-header">Ogłoszenie nr {{ $id }}</h5>
        <div class="card-body">
            <ul>
                <li>Id: {{ $id }}</li>
                <li>Data dodania: {{ $ad->created_at }}</li>
                <li>Data ostatniej edycji: {{ $ad->updated_at }}</li>
                <li>Nazwa: {{ $ad->name }}</li>
                <li>Opis: {{ $ad->description }}</li>
                <li>Cena: {{ $ad->price }} zł</li>
            </ul>
            <a href="{{ route('ads.edit', $id) }}" class="btn btn-light">Edytuj ogłoszenie</a>
            <a href="{{ route('ads.index') }}" class="btn btn-light">Powrót do listy</a>
        </div>
    </div>
@endsection
