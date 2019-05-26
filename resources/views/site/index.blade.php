@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        @component('components.game.card')
            @slot('title')
                Заголовок1
            @endslot
            @slot('desc')
                Описание1
            @endslot
                @slot('user_id')
                    1
                @endslot
        @endcomponent
    </div>
</div>
@endsection
