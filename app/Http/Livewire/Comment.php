<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $comments ;
    public $commentBody;

    public function addComment()
    {
        if ($this->commentBody ==""){
            return;
        }
        array_unshift($this->comments,[
            'user_name' => 'Ali Raza',
            'body' => $this->commentBody,
            'created_at' => Carbon::now()->diffForHumans()
        ]);
        $this->commentBody="";
       
    }

    public function mount($allComment)
    {
        //Mount Starts work as soon as complonents loads.
        $this->comments =$allComment;
    }
    public function render()
    {
        return view('livewire.comment');
    }
}
