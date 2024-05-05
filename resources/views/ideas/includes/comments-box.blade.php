<div>
    @auth()
        <form action={{ route('ideas.comments.store', $idea->id) }} method="POST">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="fs-6 form-control" rows="1"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
            </div>
        </form>
    @endauth
    <hr>
    @forelse ($idea->comments as $comment)
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                src={{$comment->user->getImageURL()}} alt={{$comment->user->name}}>
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6><a href={{url('/users', $comment->user)}}>{{$comment->user->name}}</a>
                    </h6>
                    <small class="fs-6 fw-light text-muted"> {{$comment->created_at->diffForHumans()}}</small>
                </div>
                <p class="fs-6 fw-light">
                    {{$comment->content}}
                </p>
            </div>
        </div>
    @empty
        <p class="text-center mt-4">No comments found.</p>
    @endforelse
</div>
