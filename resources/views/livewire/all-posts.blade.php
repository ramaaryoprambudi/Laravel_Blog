<div>
    <div class="row mb-2">
        <div class="col-md-6 mb-3">
            <label class="form-label">Search</label>
            <input type="text" class="form-control" name="" id="" placeholder="Keywords...." wire:model='search'>
        </div>
        <div class="col-md-2 mb-3">
            <label for="" class="form-label">Category</label>
            <select id="" class="form-select" wire:model='category'>

                <option value="">--- No Selected ---</option>
                @foreach (\App\Models\SubCategory::whereHas('posts')->get() as $category )
                <option value="{{ $category->id }}">{{ $category->subcategory_name }}</option>
                @endforeach
            </select>
        </div>

        @if (auth()->user()->type == 1)
        <div class="col-md-2 mb-3">
            <label for="" class="form-label">Authors</label>
            <select name="" id="" class="form-select" wire:model='author'>
                <option value="">--- No Selected ---</option>
                @foreach (\App\Models\User::whereHas('post')->get() as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        @endif
        <div class="col-md-2 mb-2">
            <label for="" class="form-label">orderBy</label>
            <select name="" id="" class="form-select" wire:model='orderBy'>
                <option value="">--- No Selected ---</option>
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>
            </select>
        </div>
    </div>

    <div class="row row-cards pt-2">
        @forelse($posts as $post)
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <img src="./images/post_image/{{ $post->featured_image }}" alt="" class="card-img-top">
                <div class="card-body p-2">
                    <h3 class="m-0 mb-1">{{ $post->post_title }}</h3>
                </div>
                <div class="d-flex">
                    <button type="submit" class="card-btn" wire:click.prevent='editPost({{ $post->id }})'>Edit</button>
                    <button type="submit" class="card-btn" wire:click.prevent='deletPost({{ $post->id }})'>Delete</button>
                    {{-- <a href="{{ route('authorpostsedit-Post',['post_id'=>$post->id]) }}" class="card-btn">Edit</a> --}}
                    {{-- <a href="" wire:click="deletePost" class="card-btn">Delete</a> --}}
                </div>
            </div>
        </div>
        @empty
        <span class="text-danger">No post(s) found </span>
        @endforelse
    </div>
    <div class="d-block mt-2">
        {{ $posts->links('livewire::simple-bootstrap') }}
    </div>
</div>
