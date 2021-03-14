@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5">
                <form method="get" action="/posts/search">
                    <div class="mb-3">
                        <label for="term" class="form-label">Search by post title</label>
                        <input type="text" class="form-control" id="term" value="{{ isset($term) ? $term : '' }}" name="term">
                        @error('term')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Search">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm pt-5">
                <h4>All posts</h4>
            </div>
        </div>
        <div class="row">
            @forelse($posts as $post)
                <x-post :post="$post" :size="3" :isPreview=true/>
            @empty
                <div class="alert alert-danger">No posts found</div>
            @endforelse
        </div>
        <div class="row">
            {{ $posts->links() }}
        </div>
    </div>
@endsection



