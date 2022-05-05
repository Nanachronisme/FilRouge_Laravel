@props(['name', 'nickName', 'id'])

<div {{ $attributes->merge(['class' => "bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" ]) }}>
    <div class="flex justify-end px-4 pt-4">
    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="https://picsum.photos/200/300"
            alt="Bonnie image">
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $name }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $nickName }}</span>
        <div class="flex mt-4 space-x-3 lg:mt-6">
            <x-button-link href="" color="gray">View</x-button-link>
            <x-button-link href="">Edit</x-button-link>
            <form action="" method="POST">
                <x-button >sup</x-button>
            </form>
        </div>
    </div>
</div>