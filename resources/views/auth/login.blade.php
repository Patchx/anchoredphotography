@extends('layouts.marketing-layout')

@section('content')
<div
    class="mx-auto"
    style="
        max-width: 300px;
        min-height: 58vh;
        margin-left: auto;
        margin-right: auto;
    "
>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo"></x-slot>

            <x-jet-validation-errors class="mb-4 alert alert-danger" />

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
                        class="block mt-1 w-full float-right" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus
                    />
                </div>
                <br>

                <div>
                    <x-jet-label 
                        for="password" 
                        value="{{ __('Password') }}"
                        style="margin-right: 10px"
                    />
                    
                    <x-jet-input 
                        id="password" 
                        class="block mt-1 w-full float-right" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="current-password"
                    />
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <p class="text-center">
                            <a 
                                class="underline text-sm text-gray-600 hover:text-gray-900" 
                                href="{{ route('password.request') }}"
                            >{{ __('Forgot your password?') }}</a>
                        </p>
                    @endif

                    <br>
                    <x-jet-button 
                        class="ml-4 btn btn-info"
                        style="
                            width: 100%;
                            padding: 5px;
                        "
                    >
                        {{ __('Login') }}
                    </x-jet-button>
                    <br><br>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
@endsection