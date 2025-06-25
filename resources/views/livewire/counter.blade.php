<div class="flex p-10 items-center flex-col">
    <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 text-center my-6">
    {{ $count }}
    </h1>

    <div class="flex p-3">
        <button type="button" wire:click="decrement" class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:from-red-600 hover:to-red-800 focus:ring-4 focus:outline-none focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-red-900">
            -
        </button>
        <button type="button" wire:click="increment" class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:from-green-600 hover:to-green-800 focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-green-900">
            +
        </button>
    </div>
</div>
