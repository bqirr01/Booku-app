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
            class="w-2/12 h-2/12 max-2xl:w-1/2 max-md:w-full border-2 border-[#25130B] rounded-3xl overflow-clip cursor-pointer object-cover" required="">
            <img src="/images/addcover.png" id="uploadedImage" class="w-full h-full object-cover ">
            <input type="file" id="cover" target="uploadedImage" name="cover" required="" value="{{ old('cover') }}">
        </label>
    </div>
    
    <div class="flex flex-col p-20 max-md:p-5 gap-2">
        <p class="font-bold font-yeseva text-3xl max-md:text-xl">Upload Book .pdf</p>
        <div class="flex flex-row p-3 gap-5 items-center border-2 w-2/12 max-2xl:w-1/2 max-md:w-full rounded-3xl border-[#25130B]">
            <label for="pdf" class="cursor-pointer">
                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.3749 29.0416V18.7916L11.9583 22.2083" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.375 18.7916L18.7917 22.2083" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M37.5834 17.0833V25.625C37.5834 34.1666 34.1667 37.5833 25.6251 37.5833H15.3751C6.83341 37.5833 3.41675 34.1666 3.41675 25.625V15.375C3.41675 6.83329 6.83341 3.41663 15.3751 3.41663H23.9167" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M37.5834 17.0833H30.7501C25.6251 17.0833 23.9167 15.375 23.9167 10.25V3.41663L37.5834 17.0833Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
            </label>
            <input type="file" id="pdf" name="pdf" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf" style="display:none;" value="{{ old('pdf') }}">
            <p id="file_name" class="mt-2">{{ old('pdf') }}</p>
        
            <script>
                document.querySelector('svg').addEventListener('click', function() {
                    const fileInput = document.getElementById('file');
                    fileInput.style.display = 'block';
                    fileInput.focus();
                });
        
                document.getElementById('pdf').addEventListener('change', function() {
                    const fileInput = document.getElementById('pdf');
                    const file = fileInput.files[0];
                    const fileNameElement = document.getElementById('fileName');
                    fileNameElement.innerHTML = file.name;
                });
            </script>
        </div>
    </div>
    
    
    <div class="flex flex-col px-20 pb-20 max-md:p-5 gap-2">
        <label class="font-bold font-yeseva text-3xl max-md:text-xl">
            Sinopsis / Book Description
        </label>
        <textarea class="w-full h-40 py-3 px-3 min-h-[160px] rounded-3xl border-[2px] border-[#25130B] leading-tight focus:outline-none text-sm bg-[#F9F3EE]" required="" id="w3review" name="sinopsis" >{{ old('sinopsis') }}</textarea>
    </div>

    <button type="submit" value="add" class="bg-[#D9AA63] text-[#F9F3EE] rounded-full py-1 px-5 font-medium hover:bg-[#25130B]" name="submit" id="btn-publish">
        Publish
    </button>

</form>