@extends('layouts.marketing-layout')

@section('content')
<div
    class="mx-auto"
    style="
        max-width: 400px;
        min-height: 58vh;
        margin-left: auto;
        margin-right: auto;
    "
>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo"></x-slot>

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            <br>

            <div
                class="mx-auto"
                style="max-width: 300px"
            >
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600 alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4 alert alert-danger" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-jet-label 
                            for="email" 
                            value="{{ __('Email') }}"
                            class="mr-10"
                        />

                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="btn btn-info">
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
@endsection