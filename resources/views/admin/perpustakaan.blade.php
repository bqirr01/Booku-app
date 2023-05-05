@extends('layout.admin')

{{-- sidenav --}}
<aside
    class="fixed top-0 left-0 w-[344px] max-[400px]:w-[50px] max-md:w-[75px] h-full bg-[#D9AA63] text-black flex flex-col justify-center items-center z-50">
    <nav class="text-center">
        <ul>
            <li class="mb-4">
                <a href="/admin/perpustakaan"
                    class="flex flex-row items-center gap-2 my-14 py-3 px-0 border-b-2 border-[#25130B] max-md:justify-center max-md:bg-[#25130B] max-md:rounded-full">
                    <span>
                        <svg class="w-5 h-[21] fill-[#25130B] max-md:fill-[#D9AA63]" viewBox="0 0 20 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.38519 18.5885H7.38519V20.5885H2.38519C1.27519 20.5885 0.385193 19.6985 0.385193 18.5885V2.5885C0.385193 2.05807 0.595906 1.54936 0.970979 1.17429C1.34605 0.799215 1.85476 0.588501 2.38519 0.588501H14.3852C14.9156 0.588501 15.4243 0.799215 15.7994 1.17429C16.1745 1.54936 16.3852 2.05807 16.3852 2.5885V8.8885C16.1652 9.0085 15.9552 9.1485 15.7752 9.3285L14.3852 10.7185V2.5885H9.38519V10.5885L6.88519 8.3385L4.38519 10.5885V2.5885H2.38519V18.5885ZM19.2352 12.0585L17.9152 10.7385C17.7152 10.5385 17.3852 10.5385 17.1952 10.7385L16.2152 11.7185L18.2552 13.7585L19.2352 12.7785C19.4352 12.5885 19.4352 12.2585 19.2352 12.0585ZM9.38519 18.5485V20.5885H11.4252L17.5552 14.4685L15.5152 12.4185L9.38519 18.5485Z" />
                        </svg>
                    </span>
                    <span class="font-bold text-[20px] max-md:hidden">
                        Perpustakaan
                    </span>
                </a>
            </li>
            <li class="mb-4">
                <a href="/admin/setting"
                    class="flex flex-row items-center gap-2 my-14 py-3 px-4 max-md:px-3 hover:bg-[#BF9960] rounded-full">
                    <span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.38519 8.34448C7.28519 8.34448 6.34353 7.95282 5.56019 7.16948C4.77686 6.38615 4.38519 5.44448 4.38519 4.34448C4.38519 3.24448 4.77686 2.30282 5.56019 1.51948C6.34353 0.736149 7.28519 0.344482 8.38519 0.344482C9.48519 0.344482 10.4269 0.736149 11.2102 1.51948C11.9935 2.30282 12.3852 3.24448 12.3852 4.34448C12.3852 5.44448 11.9935 6.38615 11.2102 7.16948C10.4269 7.95282 9.48519 8.34448 8.38519 8.34448ZM0.385193 16.3445V13.5445C0.385193 12.9778 0.531193 12.4568 0.823193 11.9815C1.11519 11.5061 1.50253 11.1438 1.98519 10.8945C3.01853 10.3778 4.06853 9.99015 5.13519 9.73148C6.20186 9.47282 7.28519 9.34382 8.38519 9.34448C9.48519 9.34448 10.5685 9.47381 11.6352 9.73248C12.7019 9.99115 13.7519 10.3785 14.7852 10.8945C15.2685 11.1445 15.6562 11.5071 15.9482 11.9825C16.2402 12.4578 16.3859 12.9785 16.3852 13.5445V16.3445H0.385193Z"
                                fill="#25130B" />
                        </svg>
                    </span>
                    <span class="font-normal text-[20px] max-md:hidden">
                        Admin Setting
                    </span>
                </a>
            </li>
        </ul>
    </nav>

    @auth('admin')
        <a href="{{ route('signout') }}"
            class="flex flex-row items-center gap-2 my-14 py-3 px-10 max-md:px-3 bg-[#EB4335] hover:bg-[#25130B] rounded-full">
            <span>
                <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.21426 0.755981V3.0417H16.3571V14.4703H7.21426V16.756H18.6428V0.755981H7.21426ZM4.92855 5.32741L0.357117 8.75598L4.92855 12.1846V9.89884H14.0714V7.61312H4.92855V5.32741Z"
                        fill="#F9F3EE" />
                </svg>
            </span>
            <span class="text-[#F9F3EE] text-[20px] max-md:hidden">
                Logout
            </span>
        </a>
    @endauth


</aside>

<div class="flex flex-col py-28 ml-96 max-sm:ml-20 max-md:ml-20 gap-12">

    <div
        class="flex flex-row-reverse max-2xl:flex-col gap-[100px] max-2xl:gap-[15px] items-start pt-10 justify-between px-[272px] max-2xl:px-2 max-lg:justify-center">

        <form class="flex items-center justify-center w-4/5">
            <label for="simple-search" class="sr-only">Search</label>
            <input type="text" id="simple-search"
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

        <a name="btn-add" id="btn-add"
            class="flex flex-row group items-center gap-2 justify-center border-2 border-[#25130B] hover:bg-[#25130B] rounded-full h-12 w-1/4"
            href="/admin/perpustakaan/tambah">

            <span class="text-sm max-sm:hidden group-hover:text-[#F9F3EE]">
                Add Book
            </span>
            <svg class="w-[15px] h-[15px] stroke-[#25130B] group-hover:stroke-[#F9F3EE]" viewBox="0 0 15 16"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 1.75V14.25M1 7.75H13.5" stroke-width="2" stroke-linecap="round" />
            </svg>
        </a>
    </div>


    <div class="flex flex-wrap gap-[100px] pt-12 justify-between px-[272px] max-lg:px-3 max-lg:justify-center">
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover2.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover2.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover2.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover.png',
            'bookname' => 'Filosofi Teras',
        ])
        @include('admin.components.admin-book-card', [
            'cover' => '/images/cover.png',
            'bookname' => 'Filosofi Teras',
        ])
    </div>
</div>
