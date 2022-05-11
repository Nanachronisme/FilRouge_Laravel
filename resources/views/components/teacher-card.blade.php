@props(['name', 'nickName', 'slug'])

<div {{ $attributes->merge(['class' => "pb-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700"]) }}>
    <div class="flex flex-col items-center">
        <a href="{{ route('teachers.show', $slug) }}" class="hover:bg-gray-200 flex flex-col items-center w-full pt-8 pb-2">
            <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="https://picsum.photos/200/300"
                alt="Bonnie image">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $name }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $nickName }}</span>
        </a>
        <div class="flex mt-2 space-x-3 lg:mt-4">
            <x-button-link href="{{ route('teachers.edit', $slug) }}">
                <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
            </x-button-link>
            <form action="" method="POST">
                <x-button color="black">
                    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                </x-button>
            </form>
        </div>
    </div>
</div>