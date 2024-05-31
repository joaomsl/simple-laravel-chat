<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Entre no chat')]
class JoinPage extends Component
{

    #[Validate('required|string|max:30')]
    public mixed $name;

    protected array $messages = [
        'name.required' => 'O campo nome é obrigatório.',
        'name.string' => 'O nome precisa ser um texto.',
        'name.max' => 'O nome não pode ter mais de 30 caracteres.'
    ];

    public function submit(): void 
    {
        $this->validate();

        $name = $this->name;
        $username = str($this->name)->slug('');

        $user = User::firstOrCreate(['username' => $username], ['name' => $name]);
        auth()->login($user, remember: true);

        $this->redirectIntended(route('chat'), navigate: true);
    }

    public function render(): View
    {
        return view('livewire.join-page');
    }
}
