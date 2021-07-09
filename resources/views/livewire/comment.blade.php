<div>
    <h2>Comments Section</h2>
    <form class="mb-3 border border-secondary border-2 rounded my-3 p-3" wire:submit.prevent="addComment">
        <label for="comment" class="form-label"><h6>Comment </h6></label>
        {{-- <input type="text" class="form-control" id="comment" placeholder="Type comment here!" wire:model="commentBody"> --}}
        {{-- debounce used to avoid too many network requests being sent as a user types into a text field --}}
        {{-- <input type="text" class="form-control" id="comment" placeholder="Type comment here!" wire:model.debounce.500ms="commentBody"> --}}
        {{-- Another method is used called Lazy Updating in this way request is send when input field will lost its focus --}}
        <input type="text" class="form-control" id="comment" placeholder="Type comment here!" wire:model.lazy="commentBody">
        <button type="submit" class="btn btn-primary my-2" >Add</button>
    </form>
    @foreach ($comments as $comment)
    <div class="border border-secondary border-2 rounded p-3 my-3">
        <h6>{{$comment['user_name']}} <span class="badge bg-secondary">{{$comment['created_at']}}</span></h6>
        <p>{{$comment['body']}}</p>
    </div>
    @endforeach
</div>
