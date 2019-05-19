@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Новая игра</div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('admin.page.games') }}" role="button">К списку</a>
                        <hr class="my-4">
                        @component('components.game.form')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
