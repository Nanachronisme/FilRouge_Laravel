@if (Route::has('login'))
    @auth
    @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p>
                                <x-label for="username" :value="__('Username')" />
                                <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                                    :value="old('username')" required autofocus />
                            </p>

                            <p>
                                <x-label for="password" :value="__('Password')" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                    autocomplete="current-password" />
                            </p>
                            <p>
                                <x-button class="ml-3">
                                    {{ __('se connecter') }}
                                </x-button>
                            </p>
                        </form>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endif
