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
                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="year">Год выпуска</label>
                                <select class="form-control" id="year" name="year">
                                    <option>2019</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                    <option>2012</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="poster">Постер</label>
                                <input type="file" class="form-control-file" id="poster" name="poster">
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
