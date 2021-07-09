<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $comments =[
            [
            'user_name' => 'WaqasHaidar',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste atque praesentium
            necessitatibus quis dicta cumque consequatur. Quae voluptate error delectus aliquam
             perspiciatis assumenda eligendi velit. Optio, quidem. Quibusdam, perferendis? At.',
            'created_at' => '3 min ago'
            ]
    ];
    public $commentBody;

    public function addComment()
    {
        array_unshift($this->comments,[
            'user_name' => 'Ali Raza',
            'body' => $this->commentBody,
            'created_at' => Carbon::now()->diffForHumans()
        ]);
        $this->commentBody="";
       
    }
    public function render()
    {
        return view('livewire.comment');
    }
}
