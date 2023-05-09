@extends('layout.admin')

<div name="detail-head" id="detail-head" class="flex flex-row justify-between p-20 max-md:p-5 items-start">
    <button class="group" onclick="goBack()">
        <svg class="w-[53px] h-[51px] max-md:w-[25px] max-md:h-[24px]" viewBox="0 0 53 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect class="fill-[#D9AA63] group-hover:fill-[#25130B]" width="53" height="50.0645" rx="25.0323"/>
            <path class="fill-[#25130B] group-hover:fill-[#F9F3EE]" d="M30.6176 36.4735L20.025 25.9123C19.8992 25.7866 19.8104 25.6504 19.7584 25.5037C19.7056 25.357 19.6792 25.1998 19.6792 25.0322C19.6792 24.8645 19.7056 24.7074 19.7584 24.5607C19.8104 24.414 19.8992 24.2778 20.025 24.1521L30.6176 13.5595C30.9109 13.2661 31.2776 13.1194 31.7177 13.1194C32.1577 13.1194 32.5349 13.2766 32.8493 13.5909C33.1636 13.9052 33.3207 14.2719 33.3207 14.691C33.3207 15.1101 33.1636 15.4768 32.8493 15.7911L23.6082 25.0322L32.8493 34.2732C33.1426 34.5666 33.2893 34.9279 33.2893 35.357C33.2893 35.787 33.1321 36.1592 32.8178 36.4735C32.5035 36.7878 32.1368 36.945 31.7177 36.945C31.2986 36.945 30.9319 36.7878 30.6176 36.4735Z"/>
        </svg>    
    </button>

    <span class="text-[70px] max-md:text-xl font-bold text-center font-yeseva max-w-[760px] max-md:max-w-[200px] leading-none">
        Add Book
    </span>

    <span type="submit" value="add" class="bg-transparent text-transparent rounded-full py-1 px-5 font-medium" name="submit" id="btn-publish">
        Publish
    </span>
</div>

<div class="container">
    @if(session('status'))
      <div class="bg-green-500 text-white px-4 py-2 rounded">
        {{ session('status') }}
      </div>
    @endif
</div>

<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col p-20 max-md:p-5 gap-2">
        <p class="font-bold font-yeseva text-3xl max-md:text-xl">
        Title
        </p>
        <input class="h-20 px-5 rounded-3xl bg-[#F9F3EE] border-2 border-[#25130B]" type="text" name="name" value="{{ old('name') }}" required="">
    </div>
    
    <div class="flex flex-col px-20 max-md:px-5 gap-2">
        <p class="font-bold font-yeseva text-3xl max-md:text-xl">Upload Cover</p>
        <label for="upload"
            class="w-1/4 h-2/3 p-5 max-2xl:w-1/2 max-md:w-full border-2 border-[#25130B] rounded-xl overflow-clip cursor-pointer object-cover" required="">
            <input type="file" id="cover" target="uploadedImage" name="cover" required="" value="{{ old('cover') }}">
        </label>
    </div>
    
    <div class="flex flex-col p-20 max-md:p-5 gap-2">
        <p class="font-bold font-yeseva text-3xl max-md:text-xl">Upload Book ( .pdf )</p>
        <label for="upload"
            class="w-1/4 h-2/12 p-5 max-2xl:w-1/2 max-md:w-full border-2 border-[#25130B] rounded-xl overflow-clip cursor-pointer object-cover" required="">
            <input type="file" id="pdf" target="uploadedPDF" name="pdf" required="" accept=".pdf" value="{{ old('pdf') }}">
        </label>
    </div>
    
    
    <div class="flex flex-col px-20 max-md:p-5 gap-2">
        <label class="font-bold font-yeseva text-3xl max-md:text-xl">
            Sinopsis / Book Description
        </label>
        <textarea class="w-full h-40 py-3 px-3 min-h-[160px] rounded-3xl border-[2px] border-[#25130B] leading-tight focus:outline-none text-sm bg-[#F9F3EE]" required="" id="w3review" name="sinopsis" >{{ old('sinopsis') }}</textarea>
    </div>


    <div class="flex flex-col p-20 max-md:p-5 gap-2">
        <button type="submit" value="add" class="w-1/4 max-lg:w-1/2 max-md:w-full bg-[#D9AA63] text-[#F9F3EE] rounded-full py-3 px-5 font-medium hover:bg-[#25130B] text-xl" name="submit" id="btn-publish">
            Publish
        </button>
    </div>

</form>