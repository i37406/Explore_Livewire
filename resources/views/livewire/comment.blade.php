<div>
    <h2>Comments Section </h2>
    <div class="mb-3 border border-secondary border-2 rounded my-3 p-3">
        <label for="comment" class="form-label"><h6>Comment</h6></label>
        <input type="text" class="form-control" id="comment" placeholder="Type comment here!" wire:model="commentBody">
        <button type="button" class="btn btn-primary my-2" wire:click="addComment">Add</button>
    </div>
    @foreach ($comments as $comment)
    <div class="border border-secondary border-2 rounded p-3 my-3">
        <h6>{{$comment['user_name']}} <span class="badge bg-secondary">{{$comment['created_at']}}</span></h6>
        <p>{{$comment['body']}}</p>
    </div>
    @endforeach
</div>
