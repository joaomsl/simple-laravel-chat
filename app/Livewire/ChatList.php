<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    public function users(int $page) 
    {
        return User::paginate(15, page: $page);
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
