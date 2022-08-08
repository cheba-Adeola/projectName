@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Créer une publication') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('creer_publication') }}">
                        @csrf


                        <div class="row mb-3">
                            <label for="Titre" class="col-md-4 col-form-label text-md-end">{{ __('titre') }}</label>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" required autocomplete="new-titre">

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Contenu" class="col-md-4 col-form-label text-md-end">{{ __('contenu') }}</label>

                            <div class="col-md-6">
                                <input id="contenu" type="text" class="form-control" name="contenu" required autocomplete="new-contenu">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
