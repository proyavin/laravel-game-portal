@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Игры</div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('admin.page.games.create') }}" role="button">Добавить</a>
                        <hr class="my-4">
                        <table class="table table-borderless table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Название</th>
                                <th scope="col">Пользователь</th>
                                <th scope="col">Добавлено</th>
                                <th scope="col">Обновлено</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <th scope="row">{{ $game->id }}</th>
                                    <td>{{ $game->name }}</td>
                                    <td><a href="#">{{ $game->publisher->name }}</a></td>
                                    <td>{{ $game->created_at }}</td>
                                    <td>{{ $game->updated_at }}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-wrench"></i></button>
                                        <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $games->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
