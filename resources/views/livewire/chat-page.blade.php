<div class="p-4 h-screen grid grid-cols-4 gap-4 grid-rows-[auto_1fr]">
    <header class="flex items-center justify-between bg-white rounded-md shadow p-4 col-span-4">
        <h1 class="font-bold uppercase text-xl">Chat</h1>
        <div>
            <span class="font-medium block leading-none">{{ auth()->user()->name }}</span>
            <span class="text-sm opacity-80 text-right block leading-none">{{ auth()->user()->username->start('@') }}</span>
        </div>
    </header>

    @livewire('chat-list')

    <section class="bg-white rounded-md shadow p-4 col-span-3 w-full">
        bbbb
    </section>
</div>
