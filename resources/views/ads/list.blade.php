@extends('layout.header')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h4>Lista ogłoszeń</h4>
            <a href="{{ route('ads.create') }}" class="btn btn-primary">Dodaj nowe ogłoszenie</a>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="adsTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>L.p.</th>
                            <th>Data dodania</th>
                            <th>Nazwa</th>
                            <th>Cena</th>
                            <th>Szczegóły / usuń</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ads ?? [] as $ad)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ad->created_at }}</td>
                                <td>{{ $ad->name }}</td>
                                <td>{{ $ad->price }} zł</td>
                                <td>
                                    <div class="btn-toolbar">
                                        <div class="">
                                            <a href="{{ route('ads.show', $ad->id) }}">Szczegóły</a>
                                        </div>
                                        <div class="ms-3">
                                            <form method="POST" action="{{ route('ads.destroy', $ad->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger" title='Delete'>X</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

