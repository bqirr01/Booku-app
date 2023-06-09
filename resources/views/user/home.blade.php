@extends('layout.app')

<div class="flex flex-row items-center justify-between max-sm:justify py-12 px-[272px] max-lg:px-10">


    @auth('user')
        <a class="group max-sm:hidden" href="{{ route('signout') }}">
            <svg width="47" height="44" viewBox="0 0 47 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect class="group-hover:fill-[#25130B] fill-[#EB4335]" width="47" height="43.739" rx="21.8695" />
                <path class=" fill-[#F9F3EE]"
                    d="M21 13.1194V15.6194H31V28.1194H21V30.6194H33.5V13.1194H21ZM18.5 18.1194L13.5 21.8694L18.5 25.6194V23.1194H28.5V20.6194H18.5V18.1194Z" />
            </svg>
        </a>
    @endauth

    <div class="flex flex-col gap-[40px] max-lg:gap-5">
        <div class="flex items-center justify-center">
            <img src="/images/logo.png" alt="logo-booku">
        </div>
        <form method="get" class="flex items-center justify-center">
            <label for="search" class="sr-only">Search</label>
            <input type="text" id="search" name="search"
                class="relative w-full shadow-sm bg-white text-[#25130B] text-sm rounded-full block pl-5 py-[14px]"
                placeholder="Cari buku..." required>
            <button type="submit"
                class="p-3 ml-3 text-sm font-medium text-white bg-[#D9AA63] shadow-md rounded-full  hover:bg-[#25130B] focus:ring-4 focus:outline-none focus:ring-[#D9AA63]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>

    <div class="max-lg:hidden ">

    </div>

</div>

<div class="flex flex-wrap gap-[100px] pt-12 max-sm:pt-0 justify-between px-[272px] max-lg:px-3 max-lg:justify-center">
    
    @foreach ($bukus as $book)
            @include('user.components.book-card', [
                'cover' => $book->cover,
                'bookname' => $book->name,
                'id' => $book->id
            ])    
    @endforeach

</div>
