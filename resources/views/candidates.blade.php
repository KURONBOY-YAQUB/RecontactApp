<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @foreach ($applications as $item)
        <div class='flex items-center justify-center my-5'>
            <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                        <div class="text-lg font-bold text-slate-700">{{ $item->user->name }} | <span
                                class="text-xs text-neutral-500">{{ $item->user->email }}</span></div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">id:
                            {{ $item->user->id }}</button>
                        <div class="text-xs text-neutral-500">{{ $item->created_at }}</div>
                    </div>
                </div>

                <div class="mt-4 mb-6">
                    <div class="mb-3 text-xl font-bold">{{ $item->subject }}
                    </div>
                    <div class="text-sm text-neutral-600">{{ $item->message }}</div>
                </div>

                <div>
                    <div class="flex items-center justify-between text-slate-500">
                        <div class="flex space-x-4 md:space-x-8">
                            <div class="flex cursor-pointer items-center transition hover:text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                                <span>Comment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{ $applications->links() }}
</div>
