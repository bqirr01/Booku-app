@extends('layout.app')

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<section class="flex flex-col">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <img src="/images/logo.png" alt="Logo Booku" class="mx-[60px] max-lg:mx-0">
                <form class="flex flex-col gap-[15px]" method="POST" action="{{ route('register.post') }}">
                  @csrf
                    <input type="username" name="username" id="username" class="bg-white  text-gray-900 sm:text-sm rounded-full block w-full p-[24px] dark:placeholder-gray-400" placeholder="Input your username..." required autofocus>
                    <input type="email" name="email" id="email" class="bg-white  text-gray-900 sm:text-sm rounded-full block w-full p-[24px] dark:placeholder-gray-400" placeholder="Input your email..." required autofocus>
                    <input placeholder="Input your password..." id="password" name="password" type="password" class="bg-white  text-gray-900 sm:text-sm rounded-full block w-full p-[24px] dark:placeholder-gray-400" required>
                    <input placeholder="Confirm your password..." id="password_confirm" name="password_confirm" type="password" class="bg-white  text-gray-900 sm:text-sm rounded-full block w-full p-[24px] dark:placeholder-gray-400" required>
                    
                    <button type="submit" class="w-full text-black hover:text-[#F9F3EE] bg-transparent hover:bg-[#25130B] border-[1px] border-[#25130B] rounded-full hover:bg-primary-700 font-medium text-sm px-5 py-2.5 text-center">Register</button>
                </form>
            </div>
        </div>
    </div>
  </section>
