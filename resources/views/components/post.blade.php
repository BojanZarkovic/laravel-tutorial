<div class="col-md-{{ $size }}">
    <div class="card mb-3">
        <a href="/post/{{ $post->id }}">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
            @else
                <img src="https://picsum.photos/400/200?random={{ $post->id }}" class="card-img-top" alt="...">
            @endif
        </a>
        <div class="card-body">
            @foreach($post->categories as $category)
                <a href="/posts/category/{{ $category->id }}"><span class="badge rounded-pill bg-secondary mb-3">{{ $category->title }}</span></a>
            @endforeach
            <h5 class="card-title">{{ $post->title }}</h5>
            @if($post->user)
                <p class="card-text">By: <a href="/posts/user/{{ $post->user->id }}">{{ $post->user->name }}</a></p>
            @else
                <p class="card-text">By: N/A</p>
            @endif
            <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small></p>
            @if($isPreview)
                <p class="card-text">{{ Illuminate\Support\Str::limit($post->body, $limit = 150, $end = '...') }}</p>
                <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            @else
                <p class="card-text">{{ $post->body }}</p>
            @endif
        </div>
    </div>
</div>
