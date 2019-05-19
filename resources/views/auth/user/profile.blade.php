@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Профиль') }}</div>

                    <div class="card-body">
                        <div class="jumbotron">
                            <h1 class="display-4">{{ $user->name }}</h1>
                            <hr class="my-4">
                            <p>{{ $user->getOnlineStatus() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
