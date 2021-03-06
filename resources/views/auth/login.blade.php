@extends('layouts.app')

@section('content')
<div class="container mx-auto sm:mt-16 sm:px-4">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-2/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">{{ __('Login') }}</div>

                <div class="flex-auto p-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 flex flex-wrap grid-cols-6">
                            <label for="email" class="md:w-1/6 pt-2 pb-2 mb-0 leading-normal md:text-right">{{ __('E-Mail Address') }}</label>

                            <div class="md:w-4/5 md:pl-4 w-full">
                                <input id="email" type="email" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="hidden mt-1 text-sm text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap ">
                            <label for="password" class="md:w-1/6 pt-2 pb-2 mb-0 leading-normal md:text-right">{{ __('Password') }}</label>

                            <div class="md:w-4/5 md:pl-4 w-full">
                                <input id="password" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('password') bg-red-700 @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="hidden mt-1 text-sm text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap ">
                            <div class="md:w-full pl-12 md:mx-1/3 grid grid-cols-6">
                                <div class="col-start-1 col-span-4">
                                    <input class="absolute mt-1 -ml-6" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-gray-700 pl-2 mb-0" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="col-end-7 right-0">
                                    <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap  mb-0">
                            <div class="md:w-2/3 pr-4 pl-4 md:mx-1/3">


                                @if (Route::has('password.request'))
                                <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
