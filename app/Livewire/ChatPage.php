<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Chat')]
class ChatPage extends Component
{
    public function render()
    {
        return view('livewire.chat-page', ['users' => User::all()]);
    }
}
