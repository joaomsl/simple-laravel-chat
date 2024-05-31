<main class="flex items-center justify-center h-screen">
    <div class="bg-white p-6 shadow-md rounded-md">
        <h1 class="font-medium text-xl mb-2">Entre no chat</h1>
        <form wire:submit.prevent="submit">
            <label for="name" class="text-sm font-medium inline-block mb-1">Nome: </label>
            <input wire:model="name" id="name" class="border border-gray-400 p-2 rounded w-full focus:outline-none" type="text" autocomplete="off">
            <small class="text-xs block mt-1 opacity-80">É assim que os outros vão te chamar.</small>

            <button class="p-3 bg-black font-medium text-sm w-full block mt-3 text-white tracking-wide rounded hover:bg-black/90 transition-colors" type="submit">Entrar</button>
            
            @error('*')
                <p wire:transition class="text-sm inline-block mt-1">{{ $message }}</p>
            @enderror
        </form>
    </div>
</main>
