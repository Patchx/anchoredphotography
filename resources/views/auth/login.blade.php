<div
    style="
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
    "
>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <img
                    src="/images/site_images/anchored_photography_white_outline_logo.png"
                    style="width: 100%"
                />
            </x-slot>
            <br>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label 
                        for="email" 
                        value="{{ __('Email') }}"
                        style="margin-right: 10px"
                    />
                    
                    <x-jet-input 
                        id="email" 
                        class="block mt-1 w-full" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus
                    />
                </div>
                <br>

                <div class="mt-4">
                    <x-jet-label 
                        for="password" 
                        value="{{ __('Password') }}"
                        style="margin-right: 10px"
                    />
                    
                    <x-jet-input 
                        id="password" 
                        class="block mt-1 w-full" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="current-password"
                    />
                </div>
                <br>

                {{-- <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <br> --}}

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <br><br>

                    <x-jet-button 
                        class="ml-4"
                        style="
                            width: 100%;
                            padding: 5px;
                        "
                    >
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>