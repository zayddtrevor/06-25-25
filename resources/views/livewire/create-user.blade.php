<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            {{-- Create user form --}}
            <div class="flex flex-col items-center p-10">
                <h2 class="text-2xl font-semibold mb-4">Register</h2>

                @if (session()->has('message'))
                    <div class="mt-5 bg-green-500 text-white text-center mb-4 w-full p-2 rounded">
                        {{ session('message') }}
                    </div>
                @endif

                {{-- Name --}}
                <div class="mt-4 w-1/3">
                    <input wire:model="name" placeholder="Enter your Name" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block
                        w-full p-2.5" />
                </div>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                {{-- Email --}}
                <div class="mt-4 w-1/3">
                    <input wire:model="email" placeholder="Enter email" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block
                        w-full p-2.5">
                </div>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                {{-- Password --}}
                <div class="mt-4 w-1/3">
                    <input wire:model="password" placeholder="Password" type="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block
                        w-full p-2.5">
                </div>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                {{-- Register Button --}}
                <div class="mt-6">
                    <button wire:loading.remove wire:target="register" wire:click="register" type="button"
                        class="text-white bg-gradient-to-r from-purple-400 to-pink-500 hover:from-purple-500 hover:to-pink-600 font-medium rounded-lg text-sm
                        px-5 py-2.5 shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        Register
                    </button>

                    <div wire:loading wire:target="register" class="mt-2">
                        <svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-purple-400" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.
                                2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100
                                50.5908ZM98.0814 50.5908C98.0814 73.1895 79.2274 91.5094 50 91.5094C20.7726 91.5094
                                1.91859 73.1895 1.91859 50.5908C1.91859 27.9921 20.7726 9.67226 50 9.67226C79.2274
                                9.67226 98.0814 27.9921 98.0814 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C93.9676 39.0409 97.8624 35.9116 97.0087 33.5539C95.2932 28.
                                8227 92.871 24.3692 89.8167 20.3485C85.8452 15.1192 80.8826 10.7238 75.2124 7.
                                41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.85124C51.7666 0.367541 46.6976 0.
                                446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.
                                04874 41.5694 10.4717 44.0505 10.1871C47.8511 9.54855 51.7191 9.52689 55.5482 10.
                                8491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.
                                5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158
                                91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>

                {{-- Testing Button --}}
                <div class="mt-6">
                    <button wire:loading.remove wire:target="testing" wire:click="testing" type="button"
                        class="text-white bg-gradient-to-r from-orange-500 to-yellow-600 hover:from-orange-600 hover:to-yellow-700 font-medium rounded-lg text-sm px-5 py-2.5 shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        Testing
                    </button>
                    <div wire:loading wire:target="testing" class="mt-2">
                        <svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-orange-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.
                                2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100
                                50.5908ZM98.0814 50.5908C98.0814 73.1895 79.2274 91.5094 50 91.5094C20.7726 91.5094
                                1.91859 73.1895 1.91859 50.5908C1.91859 27.9921 20.7726 9.67226 50 9.67226C79.2274
                                9.67226 98.0814 27.9921 98.0814 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C93.9676 39.0409 97.8624 35.9116 97.0087 33.5539C95.2932 28.
                                8227 92.871 24.3692 89.8167 20.3485C85.8452 15.1192 80.8826 10.7238 75.2124 7.
                                41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.85124C51.7666 0.367541 46.6976 0.
                                446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.
                                04874 41.5694 10.4717 44.0505 10.1871C47.8511 9.54855 51.7191 9.52689 55.5482 10.
                                8491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.
                                5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158
                                91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>