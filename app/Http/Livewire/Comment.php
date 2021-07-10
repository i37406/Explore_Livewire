<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\CommentModel;
use Illuminate\Support\Facades\Auth;

class Comment extends Component
{
    public $comments ;
    public $commentBody;

    public function addComment()
    {
        if ($this->commentBody ==""){
            return;
        }

        $newComment = CommentModel::create(['body' => $this->commentBody, 'user_id' => Auth::user()->id]);
        $this->comments->prepend($newComment); //use prepend to show at the first of Scomments[0]
        $this->commentBody="";
       
    }

    public function mount()
    {
        //Mount Starts work as soon as complonents loads.
        $allComment = CommentModel::latest()->get();
        $this->comments =$allComment;
    }
    public function render()
    {
        return view('livewire.comment');
    }
}
