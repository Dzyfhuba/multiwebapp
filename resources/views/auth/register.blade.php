@extends('layouts.app')

@section('content')
<div class="container mx-auto sm:px-4">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-2/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">{{ __('Register') }}</div>

                <div class="flex-auto p-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="md:grid md:grid-cols-9 md:gap-4">
                            <label for="name" class="pt-2 md:col-start-1 md:col-span-2 leading-normal md:text-right">{{ __('Name') }}</label>

                            <div class="mb-4 md:col-span-7 md:col-end-10">
                                <input id="name" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('name') bg-red-700 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="hidden mt-1 text-sm text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                            <label for="email" class="pt-2 md:col-start-1 md:col-span-2 leading-normal md:text-right">{{ __('E-Mail Address') }}</label>

                            <div class="mb-4 md:col-span-7 md:col-end-10">
                                <input id="email" type="email" class=" block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="hidden mt-1 text-sm text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                            <label for="password" class="pt-2 md:col-start-1 md:col-span-2 leading-normal md:text-right">{{ __('Password') }}</label>

                            <div class="mb-4 md:col-span-7 md:col-end-10">
                                <input id="password" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('password') bg-red-700 @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="hidden mt-1 text-sm text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                            <label for="password-confirm" class="pt-2 md:col-start-1 md:col-span-2 leading-normal md:text-right">{{ __('Confirm Password') }}</label>

                            <div class="md:col-span-7 md:col-end-10">
                                <input id="password-confirm" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="password_confirmation" required autocomplete="new-password">
                            </div>




                            <div class="md:col-span-1 md:col-end-9">
                                <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
