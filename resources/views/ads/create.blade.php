@extends('layout.header')

@section('content')
    <div class="card">
        <h5 class="card-header">Nowe ogłoszenie</h5>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nazwa</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}" />
                    @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-sd-3">
                    <label for="description">Opis</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="descriptione"
                        name="description" value="{{ old('description') }}" />
                    @error('description')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-sd-3">
                    <label for="price">Cena</label>
                    <input type="float" class="form-control @error('price') is-invalid @enderror" id="dprice"
                        name="price" value="{{ old('price') }}" />
                    @error('price')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Zapisz dane</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Anuluj</a>
                </div>
            </form>
        </div>
    </div>
@endsection
