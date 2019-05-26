<div class="col-md-4">
    <div class="card">
        <img src="https://images.unsplash.com/photo-1556261347-b69c68963b31" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a href="#">{{ $title }}</a></h5>
            <p class="card-text">{{ $desc }}</p>
            <p class="card-text"><small class="text-muted">Автор: <a href="{{ route('user.profile', $user_id) }}">4oremty</a> | Жанр: <a href="#">Песочница</a></small></p>
        </div>
    </div>
</div>