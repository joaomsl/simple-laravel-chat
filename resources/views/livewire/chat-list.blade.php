<nav class="bg-white rounded-md shadow col-span-1 w-full overflow-y-auto scrollbar-thin">
    <ul>
        <template
            x-data="{
                currentPage: 0,
                lastPage: 0,
                users: [],
                hasMoreUsers() {
                    return this.users.length === 0 || this.lastPage > this.currentPage
                },
                async fetchMoreUsers() {
                    const paginated = await $wire.users(++this.currentPage)

                    this.currentPage = paginated.current_page
                    this.lastPage = paginated.last_page
                    this.users = [...this.users, ...paginated.data]
                },
                async handleEndOfList() {
                    if(this.hasMoreUsers()) {
                        await this.fetchMoreUsers()
                    }
                }
            }"
            @end-of-user-list.document="await handleEndOfList()"
            x-for="{id, name, username} of users"
            x-key="id"
        >
            <li class="border-b border-gray-300 py-4 odd:border-t even:border-b-0 hover:bg-gray-200">
                <button class="w-full text-left h-full px-4 flex items-center gap-2">
                    <div x-text="name[0].toUpperCase()" class="bg-black text-white font-light w-8 aspect-square rounded-full flex items-center justify-center"></div>
                    <div>
                        <span x-text="name" class="font-medium block leading-none"></span>
                        <span x-text="`@${username}`" class="text-sm opacity-80 block leading-none mt-1"></span>
                    </div>
                </button>    
            </li>                
        </template>

        <span x-intersect="$dispatch('end-of-user-list')"></span>
    </ul>
</nav>
