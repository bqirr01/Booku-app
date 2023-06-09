<div class="flex flex-col w-[258.76px]">
    <div class="w-[258.76px] h-[322.3px] bg-white" name="admin-book-card" id="admin-book-card">
        <img class="object-contain w-[258.76px] h-[322.3px]" src="{{ $cover }}" alt="{{ $bookname }}">
    </div>
    <div class="flex flex-row justify-between bg-[#D9AA63]">
        <a href="{{ route("updateBook", ["id" => $id]) }}" method="POST" id="edit" class="py-3 px-[50px] bg-[#D9AA63] hover:bg-[#B89867]">
            <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M27.2731 10.1507L20.2868 3.24658L22.5882 0.945206C23.2183 0.315069 23.9926 0 24.9109 0C25.8293 0 26.603 0.315069 27.232 0.945206L29.5334 3.24658C30.1635 3.87671 30.4923 4.63726 30.5197 5.52822C30.5471 6.41918 30.2457 7.17918 29.6156 7.80822L27.2731 10.1507ZM24.8896 12.5753L7.46491 30H0.478607V23.0137L17.9033 5.58904L24.8896 12.5753Z"
                    fill="#25130B" />
            </svg>
        </a>

        <form action="{{ route("deleteBook", ["id" => $id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" name="btn-delete" id="btn-delete"
                class="py-3 px-[50px] bg-[#D9AA63] hover:bg-[#B89867]">
                <svg width="27" height="30" viewBox="0 0 27 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.5 6C25.8823 6.00042 26.2501 6.14682 26.5281 6.40927C26.8061 6.67173 26.9734 7.03043 26.9958 7.41209C27.0182 7.79375 26.894 8.16957 26.6486 8.46275C26.4032 8.75593 26.0551 8.94434 25.6755 8.9895L25.5 9H25.3785L24 25.5C24.0001 26.6478 23.5615 27.7523 22.7741 28.5874C21.9866 29.4225 20.9098 29.9252 19.764 29.9925L19.5 30H7.5C5.103 30 3.144 28.1265 3.012 25.875L3.0045 25.6245L1.62 9H1.5C1.11768 8.99958 0.749953 8.85318 0.471949 8.59073C0.193945 8.32827 0.0266489 7.96957 0.00424326 7.58791C-0.0181624 7.20625 0.106013 6.83043 0.351399 6.53725C0.596784 6.24407 0.944858 6.05566 1.3245 6.0105L1.5 6H25.5ZM16.5 0C17.2957 0 18.0587 0.31607 18.6213 0.87868C19.1839 1.44129 19.5 2.20435 19.5 3C19.4996 3.38232 19.3532 3.75005 19.0907 4.02805C18.8283 4.30606 18.4696 4.47335 18.0879 4.49576C17.7062 4.51816 17.3304 4.39399 17.0373 4.1486C16.7441 3.90322 16.5557 3.55514 16.5105 3.1755L16.5 3H10.5L10.4895 3.1755C10.4443 3.55514 10.2559 3.90322 9.96275 4.1486C9.66957 4.39399 9.29376 4.51816 8.91209 4.49576C8.53043 4.47335 8.17173 4.30606 7.90927 4.02805C7.64682 3.75005 7.50043 3.38232 7.5 3C7.49976 2.24314 7.78561 1.51415 8.30025 0.959178C8.81488 0.404206 9.52027 0.064265 10.275 0.00750017L10.5 0H16.5Z"
                        fill="#CD4E44" />
                </svg>
            </button>
        </form>
    </div>
</div>
