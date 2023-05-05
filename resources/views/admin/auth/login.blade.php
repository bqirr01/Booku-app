@extends('layout.app')

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

@csrf

<section class="flex flex-col">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <img src="/images/logo.png" alt="Logo Booku" class="mx-[60px] max-lg:mx-0">
                
                <form class="flex flex-col gap-[15px]" method="POST" action="{{ route('adminLogin.post') }}">

                    @csrf

                    <input type="username" placeholder="Input your username..." id="username"
                        class="bg-white  text-gray-900 sm:text-sm rounded-full block w-full p-[24px] dark:placeholder-gray-400"
                        name="username" required autofocus>
                    @if ($errors->has('username'))
                        <span class="text-red-500">{{ $errors->first('username') }}</span>
                    @endif

                    <input type="password" placeholder="Input your password..." id="password"
                        class="bg-white  text-gray-900 sm:text-sm rounded-full block w-full p-[24px] dark:placeholder-gray-400"
                        name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @endif

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="w-full text-black hover:text-[#F9F3EE] bg-transparent hover:bg-[#25130B] border-[1px] border-[#25130B] rounded-full hover:bg-primary-700 font-medium text-sm px-5 py-2.5 text-center">Sign
                            In</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
  </section>