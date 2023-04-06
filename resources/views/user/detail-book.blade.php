@extends('layout.app')

<div name="detail-head" id="detail-head" class="flex flex-row justify-between p-20 max-md:p-5 items-start">
    <button class="group" onclick="goBack()">
        <svg class="w-[53px] h-[51px] max-md:w-[25px] max-md:h-[24px]" viewBox="0 0 53 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect class="fill-[#D9AA63] group-hover:fill-[#25130B]" width="53" height="50.0645" rx="25.0323"/>
            <path class="fill-[#25130B] group-hover:fill-[#F9F3EE]" d="M30.6176 36.4735L20.025 25.9123C19.8992 25.7866 19.8104 25.6504 19.7584 25.5037C19.7056 25.357 19.6792 25.1998 19.6792 25.0322C19.6792 24.8645 19.7056 24.7074 19.7584 24.5607C19.8104 24.414 19.8992 24.2778 20.025 24.1521L30.6176 13.5595C30.9109 13.2661 31.2776 13.1194 31.7177 13.1194C32.1577 13.1194 32.5349 13.2766 32.8493 13.5909C33.1636 13.9052 33.3207 14.2719 33.3207 14.691C33.3207 15.1101 33.1636 15.4768 32.8493 15.7911L23.6082 25.0322L32.8493 34.2732C33.1426 34.5666 33.2893 34.9279 33.2893 35.357C33.2893 35.787 33.1321 36.1592 32.8178 36.4735C32.5035 36.7878 32.1368 36.945 31.7177 36.945C31.2986 36.945 30.9319 36.7878 30.6176 36.4735Z"/>
        </svg>    
    </button>

    <span class="text-[70px] max-md:text-xl font-bold text-center font-yeseva max-w-[760px] max-md:max-w-[200px] leading-none">
        Sebuah Seni Untuk Bersifat Bodo Amat
    </span>

    <button class="group" name="btn-love" id="btn-love">
        <svg class="w-[53px] h-[51px] max-md:w-[25px] max-md:h-[24px]" viewBox="0 0 59 53" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="58.1111" height="53" rx="26.5" fill="#D9AA63"/>
            <path class="group-hover:fill-[#25130B]" d="M28.2119 18.9869L29.0556 20.3126L29.8992 18.9869C31.0564 17.1685 33.1013 16 35.4444 16C39.1088 16 42.1111 19.0023 42.1111 22.6667C42.1111 24.2825 41.3652 25.9919 40.1085 27.7055C38.8595 29.4088 37.1723 31.0253 35.4501 32.4344C33.7328 33.8394 32.0106 35.0141 30.7149 35.8386C30.068 36.2503 29.5298 36.5731 29.1549 36.7922C29.1211 36.812 29.0886 36.8309 29.0574 36.849C29.026 36.8306 28.9931 36.8113 28.9589 36.7912C28.5838 36.5704 28.0455 36.2453 27.3985 35.8311C26.1025 35.0015 24.3798 33.8206 22.6621 32.4113C20.9394 30.9979 19.2516 29.3789 18.0021 27.6779C16.7444 25.9658 16 24.2648 16 22.6667C16 19.0023 19.0023 16 22.6667 16C25.0099 16 27.0547 17.1685 28.2119 18.9869Z" stroke="#25130B" stroke-width="2"/>
        </svg>
    </button>
</div>

<div class="flex flex-col items-center gap-10 max-md:gap-5 py-3">
    <div class="bg-white shadow-lg py-6">
        <img class="object-contain w-[517.54px] h-[644.65px] max-md:w-[258.76px] max-md:h-[322.3px]" src="images/cover2.png" alt="nama Bukunya">
    </div>
    <a href="#" class="w-[20%] max-2xl:w-1/2 rounded-full border-2 border-[#25130B] font-bold text-center py-5 hover:bg-[#25130B] hover:text-[#F9F3EE]">
        Baca
    </a>
    <p class="text-xl max-md:text-sm max-w-xl max-md:max-w-xs text-center">
        ! Disarankan untuk mendownload extension browser yang bernama <a href="https://chrome.google.com/webstore/detail/dearpdf/bbbnbmpdkfkndckfmcndgabefnmdedfp" class="font-bold text-[#0B5077] hover:border-b-2 hover:border-[#0B5077]">DearPDF</a> untuk Pengalaman membaca yang lebih baik
    </p>
</div>

{{-- Sinopsis --}}
<div class="flex justify-center py-10 max-md:pb-3">
    <svg width="900" height="56" viewBox="0 0 900 56" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M898.056 29.3685L2.05566 29.3684" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <rect width="154" height="55" transform="translate(373.056 0.368408)" fill="#F9F3EE"/>
        <path d="M391.906 38.8184C390.486 38.8184 389.156 38.4984 387.916 37.8584C387.356 37.5784 386.886 37.2484 386.506 36.8684C386.226 37.3284 385.876 37.7384 385.456 38.0984C385.096 38.3584 384.896 38.4984 384.856 38.5184H384.106V32.8184H385.306C385.606 33.7984 386.026 34.6784 386.566 35.4584C387.786 37.1984 389.366 38.0684 391.306 38.0684C392.446 38.0684 393.356 37.7284 394.036 37.0484C394.716 36.3684 395.056 35.4584 395.056 34.3184C395.056 33.6584 394.856 33.0684 394.456 32.5484C394.076 32.0284 393.596 31.5684 393.016 31.1684C392.436 30.7684 391.626 30.2684 390.586 29.6684C389.266 28.9284 388.196 28.2584 387.376 27.6584C386.556 27.0584 385.856 26.3084 385.276 25.4084C384.696 24.4884 384.406 23.4084 384.406 22.1684C384.406 21.1884 384.676 20.3084 385.216 19.5284C385.776 18.7284 386.606 18.0984 387.706 17.6384C388.806 17.1584 390.156 16.9184 391.756 16.9184C392.916 16.9184 394.076 17.2484 395.236 17.9084C395.676 18.1484 396.116 18.4684 396.556 18.8684C396.896 18.3484 397.246 17.9384 397.606 17.6384C397.966 17.3784 398.166 17.2384 398.206 17.2184H398.956V22.9184H397.756C397.496 21.9584 397.106 21.0884 396.586 20.3084C396.106 19.5484 395.506 18.9184 394.786 18.4184C394.086 17.9184 393.276 17.6684 392.356 17.6684C391.576 17.6684 390.906 17.9784 390.346 18.5984C389.786 19.2184 389.506 20.0084 389.506 20.9684C389.506 21.7084 389.716 22.3784 390.136 22.9784C390.576 23.5584 391.106 24.0684 391.726 24.5084C392.366 24.9484 393.226 25.4784 394.306 26.0984C395.566 26.8184 396.586 27.4584 397.366 28.0184C398.146 28.5784 398.806 29.2784 399.346 30.1184C399.886 30.9384 400.156 31.8884 400.156 32.9684C400.156 34.0484 399.846 35.0384 399.226 35.9384C398.606 36.8184 397.676 37.5184 396.436 38.0384C395.196 38.5584 393.686 38.8184 391.906 38.8184ZM402.997 37.9184L404.797 37.4684V24.2684L402.997 23.8184V23.3684H406.897C408.697 23.3684 409.597 24.2684 409.597 26.0684V37.4684L411.397 37.9184V38.3684H402.997V37.9184ZM406.897 21.5684C406.297 21.5684 405.797 21.3684 405.397 20.9684C404.997 20.5684 404.797 20.0684 404.797 19.4684C404.797 18.8684 404.997 18.3684 405.397 17.9684C405.797 17.5684 406.297 17.3684 406.897 17.3684C407.497 17.3684 407.997 17.5684 408.397 17.9684C408.797 18.3684 408.997 18.8684 408.997 19.4684C408.997 20.0684 408.797 20.5684 408.397 20.9684C407.997 21.3684 407.497 21.5684 406.897 21.5684ZM414.093 37.9184L415.893 37.4684V24.2684L414.093 23.8184V23.3684H416.793C417.973 23.3684 418.903 23.7484 419.583 24.5084C419.843 24.8084 420.063 25.1784 420.243 25.6184C420.523 25.0984 420.853 24.6484 421.233 24.2684C422.133 23.3684 423.253 22.9184 424.593 22.9184C425.713 22.9184 426.713 23.1584 427.593 23.6384C428.493 24.0984 429.193 24.7084 429.693 25.4684C430.193 26.2284 430.443 27.0284 430.443 27.8684V37.4684L432.243 37.9184V38.3684H428.343C426.543 38.3684 425.643 37.4684 425.643 35.6684V27.8684C425.643 26.6084 425.413 25.6484 424.953 24.9884C424.513 24.3084 423.993 23.9684 423.393 23.9684C422.633 23.9684 421.953 24.3684 421.353 25.1684C421.093 25.5084 420.873 25.9084 420.693 26.3684V37.4684L422.493 37.9184V38.3684H414.093V37.9184ZM442.894 38.8184C440.414 38.8184 438.464 38.1184 437.044 36.7184C435.644 35.2984 434.944 33.3484 434.944 30.8684C434.944 28.3884 435.644 26.4484 437.044 25.0484C438.464 23.6284 440.414 22.9184 442.894 22.9184C445.374 22.9184 447.314 23.6284 448.714 25.0484C450.134 26.4484 450.844 28.3884 450.844 30.8684C450.844 33.3484 450.134 35.2984 448.714 36.7184C447.314 38.1184 445.374 38.8184 442.894 38.8184ZM442.894 38.2184C443.694 38.2184 444.364 37.6584 444.904 36.5384C445.464 35.4184 445.744 33.5284 445.744 30.8684C445.744 28.2084 445.464 26.3184 444.904 25.1984C444.364 24.0784 443.694 23.5184 442.894 23.5184C442.094 23.5184 441.414 24.0784 440.854 25.1984C440.314 26.3184 440.044 28.2084 440.044 30.8684C440.044 33.5284 440.314 35.4184 440.854 36.5384C441.414 37.6584 442.094 38.2184 442.894 38.2184ZM453.854 43.9184L455.654 43.4684V24.2684L453.854 23.8184V23.3684H456.554C457.734 23.3684 458.664 23.7484 459.344 24.5084C459.604 24.8084 459.824 25.1784 460.004 25.6184C460.264 25.0984 460.594 24.6484 460.994 24.2684C461.894 23.3684 463.014 22.9184 464.354 22.9184C465.534 22.9184 466.584 23.2284 467.504 23.8484C468.424 24.4484 469.154 25.3484 469.694 26.5484C470.234 27.7284 470.504 29.1684 470.504 30.8684C470.504 33.4284 469.904 35.3984 468.704 36.7784C467.524 38.1384 465.924 38.8184 463.904 38.8184C462.944 38.8184 462.104 38.6184 461.384 38.2184C461.084 38.0784 460.774 37.8784 460.454 37.6184V43.4684L462.254 43.9184V44.3684H453.854V43.9184ZM462.704 37.9184C463.564 37.9184 464.224 37.4184 464.684 36.4184C465.164 35.4184 465.404 33.5684 465.404 30.8684C465.404 28.2884 465.184 26.4984 464.744 25.4984C464.324 24.4784 463.794 23.9684 463.154 23.9684C462.394 23.9684 461.714 24.3684 461.114 25.1684C460.854 25.5084 460.634 25.9084 460.454 26.3684V36.7184C460.734 36.9984 460.954 37.1984 461.114 37.3184C461.654 37.7184 462.184 37.9184 462.704 37.9184ZM480.854 38.8184C479.614 38.8184 478.504 38.5484 477.524 38.0084C477.044 37.7484 476.654 37.4684 476.354 37.1684C476.034 37.6084 475.684 37.9484 475.304 38.1884C475.124 38.3084 474.924 38.4184 474.704 38.5184H473.954V33.4184H475.154C475.414 34.2584 475.794 35.0384 476.294 35.7584C477.354 37.2984 478.674 38.0684 480.254 38.0684C481.094 38.0684 481.724 37.8684 482.144 37.4684C482.584 37.0484 482.804 36.4484 482.804 35.6684C482.804 35.0084 482.504 34.4584 481.904 34.0184C481.324 33.5584 480.404 32.9984 479.144 32.3384C478.064 31.7984 477.184 31.3184 476.504 30.8984C475.844 30.4584 475.274 29.9184 474.794 29.2784C474.334 28.6184 474.104 27.8484 474.104 26.9684C474.104 25.7684 474.614 24.7984 475.634 24.0584C476.674 23.2984 478.264 22.9184 480.404 22.9184C481.464 22.9184 482.444 23.1984 483.344 23.7584C483.784 24.0184 484.164 24.2884 484.484 24.5684C484.744 24.2084 485.094 23.8684 485.534 23.5484C485.874 23.3484 486.074 23.2384 486.134 23.2184H486.884V28.3184H485.684C485.384 27.4584 485.014 26.6884 484.574 26.0084C483.574 24.4484 482.384 23.6684 481.004 23.6684C480.464 23.6684 480.004 23.8684 479.624 24.2684C479.244 24.6684 479.054 25.1684 479.054 25.7684C479.054 26.5284 479.374 27.1684 480.014 27.6884C480.654 28.1884 481.624 28.7684 482.924 29.4284C483.984 29.9684 484.824 30.4484 485.444 30.8684C486.084 31.2684 486.624 31.7684 487.064 32.3684C487.524 32.9684 487.754 33.6684 487.754 34.4684C487.754 37.3684 485.454 38.8184 480.854 38.8184ZM490.906 37.9184L492.706 37.4684V24.2684L490.906 23.8184V23.3684H494.806C496.606 23.3684 497.506 24.2684 497.506 26.0684V37.4684L499.306 37.9184V38.3684H490.906V37.9184ZM494.806 21.5684C494.206 21.5684 493.706 21.3684 493.306 20.9684C492.906 20.5684 492.706 20.0684 492.706 19.4684C492.706 18.8684 492.906 18.3684 493.306 17.9684C493.706 17.5684 494.206 17.3684 494.806 17.3684C495.406 17.3684 495.906 17.5684 496.306 17.9684C496.706 18.3684 496.906 18.8684 496.906 19.4684C496.906 20.0684 496.706 20.5684 496.306 20.9684C495.906 21.3684 495.406 21.5684 494.806 21.5684ZM509.051 38.8184C507.811 38.8184 506.701 38.5484 505.721 38.0084C505.241 37.7484 504.851 37.4684 504.551 37.1684C504.231 37.6084 503.881 37.9484 503.501 38.1884C503.321 38.3084 503.121 38.4184 502.901 38.5184H502.151V33.4184H503.351C503.611 34.2584 503.991 35.0384 504.491 35.7584C505.551 37.2984 506.871 38.0684 508.451 38.0684C509.291 38.0684 509.921 37.8684 510.341 37.4684C510.781 37.0484 511.001 36.4484 511.001 35.6684C511.001 35.0084 510.701 34.4584 510.101 34.0184C509.521 33.5584 508.601 32.9984 507.341 32.3384C506.261 31.7984 505.381 31.3184 504.701 30.8984C504.041 30.4584 503.471 29.9184 502.991 29.2784C502.531 28.6184 502.301 27.8484 502.301 26.9684C502.301 25.7684 502.811 24.7984 503.831 24.0584C504.871 23.2984 506.461 22.9184 508.601 22.9184C509.661 22.9184 510.641 23.1984 511.541 23.7584C511.981 24.0184 512.361 24.2884 512.681 24.5684C512.941 24.2084 513.291 23.8684 513.731 23.5484C514.071 23.3484 514.271 23.2384 514.331 23.2184H515.081V28.3184H513.881C513.581 27.4584 513.211 26.6884 512.771 26.0084C511.771 24.4484 510.581 23.6684 509.201 23.6684C508.661 23.6684 508.201 23.8684 507.821 24.2684C507.441 24.6684 507.251 25.1684 507.251 25.7684C507.251 26.5284 507.571 27.1684 508.211 27.6884C508.851 28.1884 509.821 28.7684 511.121 29.4284C512.181 29.9684 513.021 30.4484 513.641 30.8684C514.281 31.2684 514.821 31.7684 515.261 32.3684C515.721 32.9684 515.951 33.6684 515.951 34.4684C515.951 37.3684 513.651 38.8184 509.051 38.8184Z" fill="black"/>
    </svg>
</div>

<div class="flex justify-center">
    <p class="text-base max-md:text-xs max-w-4xl max-md:px-5 text-center">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non lacinia augue. Fusce est lacus, tincidunt quis tincidunt in, semper eget quam. Ut at neque nulla. Sed fermentum ligula sit amet dui convallis, eu sagittis felis viverra. In semper pharetra scelerisque. Sed at libero non ligula sollicitudin lobortis. Phasellus pulvinar dolor sed euismod pretium.
        Nam dolor nisi, fermentum sed semper maximus, posuere eu mi. Aliquam lobortis justo tortor, nec suscipit metus aliquam eu. Morbi consectetur vitae justo at egestas. Praesent condimentum iaculis viverra. In et lorem sed lorem egestas iaculis nec sed ipsum. In non elit fermentum, consectetur lectus quis, auctor arcu. Proin et vestibulum tortor.
        </p>
</div>
    

{{-- Forum Diskusi --}}
<div class="flex justify-center py-10 max-md:pb-3">
    <svg width="900" height="56" viewBox="0 0 900 56" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M898.056 29.3685L2.05566 29.3684" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <rect width="250" height="55" transform="translate(325.056 0.368408)" fill="#F9F3EE"/>
        <path d="M336.556 37.9184L338.356 37.4684V18.2684L336.556 17.8184V17.3684H352.606V22.7684H351.706C351.326 22.4684 350.996 22.0884 350.716 21.6284C350.076 20.5484 349.756 19.3784 349.756 18.1184H343.306V27.5684H346.756C346.896 26.8084 347.156 26.0984 347.536 25.4384C347.696 25.1384 347.886 24.8484 348.106 24.5684H349.006V31.3184H348.106C347.886 31.0384 347.696 30.7484 347.536 30.4484C347.156 29.7884 346.896 29.0784 346.756 28.3184H343.306V37.4684L345.106 37.9184V38.3684H336.556V37.9184ZM362.215 38.8184C359.735 38.8184 357.785 38.1184 356.365 36.7184C354.965 35.2984 354.265 33.3484 354.265 30.8684C354.265 28.3884 354.965 26.4484 356.365 25.0484C357.785 23.6284 359.735 22.9184 362.215 22.9184C364.695 22.9184 366.635 23.6284 368.035 25.0484C369.455 26.4484 370.165 28.3884 370.165 30.8684C370.165 33.3484 369.455 35.2984 368.035 36.7184C366.635 38.1184 364.695 38.8184 362.215 38.8184ZM362.215 38.2184C363.015 38.2184 363.685 37.6584 364.225 36.5384C364.785 35.4184 365.065 33.5284 365.065 30.8684C365.065 28.2084 364.785 26.3184 364.225 25.1984C363.685 24.0784 363.015 23.5184 362.215 23.5184C361.415 23.5184 360.735 24.0784 360.175 25.1984C359.635 26.3184 359.365 28.2084 359.365 30.8684C359.365 33.5284 359.635 35.4184 360.175 36.5384C360.735 37.6584 361.415 38.2184 362.215 38.2184ZM373.476 37.9184L375.276 37.4684V24.2684L373.476 23.8184V23.3684H376.176C377.356 23.3684 378.286 23.7484 378.966 24.5084C379.226 24.8084 379.446 25.1784 379.626 25.6184C379.926 25.1784 380.296 24.7784 380.736 24.4184C381.736 23.6184 382.856 23.2184 384.096 23.2184C385.156 23.2184 385.946 23.4684 386.466 23.9684C387.006 24.4484 387.276 25.1484 387.276 26.0684C387.276 26.7484 387.066 27.2984 386.646 27.7184C386.246 28.1184 385.706 28.3184 385.026 28.3184C384.746 28.3184 384.466 28.2984 384.186 28.2584L383.826 28.1684V23.9684C382.806 23.9684 381.876 24.3684 381.036 25.1684C380.636 25.5684 380.316 25.9684 380.076 26.3684V37.4684L381.876 37.9184V38.3684H373.476V37.9184ZM396.722 38.8184C395.602 38.8184 394.592 38.5884 393.692 38.1284C392.812 37.6484 392.122 37.0284 391.622 36.2684C391.122 35.5084 390.872 34.7084 390.872 33.8684V24.2684L389.072 23.8184V23.3684H392.972C394.772 23.3684 395.672 24.2684 395.672 26.0684V33.8684C395.672 35.1284 395.892 36.0984 396.332 36.7784C396.792 37.4384 397.322 37.7684 397.922 37.7684C398.662 37.7684 399.332 37.3684 399.932 36.5684C400.152 36.2684 400.382 35.8684 400.622 35.3684V24.2684L398.822 23.8184V23.3684H407.222V23.8184L405.422 24.2684V38.5184H405.122C403.662 38.5184 402.552 38.1184 401.792 37.3184C401.452 36.9584 401.212 36.5584 401.072 36.1184C400.792 36.6184 400.462 37.0684 400.082 37.4684C399.182 38.3684 398.062 38.8184 396.722 38.8184ZM409.934 37.9184L411.734 37.4684V24.2684L409.934 23.8184V23.3684H412.634C413.814 23.3684 414.744 23.7484 415.424 24.5084C415.684 24.8084 415.904 25.1784 416.084 25.6184C416.384 25.0584 416.704 24.6084 417.044 24.2684C417.944 23.3684 418.974 22.9184 420.134 22.9184C421.294 22.9184 422.314 23.1784 423.194 23.6984C424.074 24.1984 424.754 24.8884 425.234 25.7684C425.534 25.1884 425.854 24.7184 426.194 24.3584C427.114 23.3984 428.144 22.9184 429.284 22.9184C430.344 22.9184 431.294 23.1384 432.134 23.5784C432.994 24.0184 433.654 24.6184 434.114 25.3784C434.594 26.1384 434.834 26.9684 434.834 27.8684V37.4684L436.634 37.9184V38.3684H432.734C430.934 38.3684 430.034 37.4684 430.034 35.6684V27.8684C430.034 26.5684 429.834 25.5984 429.434 24.9584C429.034 24.2984 428.584 23.9684 428.084 23.9684C427.504 23.9684 426.914 24.3684 426.314 25.1684C426.074 25.5484 425.864 25.9484 425.684 26.3684V37.4684L427.484 37.9184V38.3684H419.084V37.9184L420.884 37.4684V27.8684C420.884 26.5684 420.684 25.5984 420.284 24.9584C419.884 24.2984 419.434 23.9684 418.934 23.9684C418.354 23.9684 417.764 24.3684 417.164 25.1684C416.924 25.5484 416.714 25.9484 416.534 26.3684V37.4684L418.334 37.9184V38.3684H409.934V37.9184ZM448.948 37.9184L450.748 37.4684V18.2684L448.948 17.8184V17.3684H456.598C460.178 17.3684 462.918 18.2884 464.818 20.1284C466.738 21.9684 467.698 24.5484 467.698 27.8684C467.698 31.1884 466.738 33.7684 464.818 35.6084C462.918 37.4484 460.178 38.3684 456.598 38.3684H448.948V37.9184ZM456.598 37.6184C458.458 37.6184 459.898 36.8684 460.918 35.3684C461.938 33.8484 462.448 31.3484 462.448 27.8684C462.448 24.3884 461.938 21.8984 460.918 20.3984C459.898 18.8784 458.458 18.1184 456.598 18.1184H455.698V37.6184H456.598ZM470.993 37.9184L472.793 37.4684V24.2684L470.993 23.8184V23.3684H474.893C476.693 23.3684 477.593 24.2684 477.593 26.0684V37.4684L479.393 37.9184V38.3684H470.993V37.9184ZM474.893 21.5684C474.293 21.5684 473.793 21.3684 473.393 20.9684C472.993 20.5684 472.793 20.0684 472.793 19.4684C472.793 18.8684 472.993 18.3684 473.393 17.9684C473.793 17.5684 474.293 17.3684 474.893 17.3684C475.493 17.3684 475.993 17.5684 476.393 17.9684C476.793 18.3684 476.993 18.8684 476.993 19.4684C476.993 20.0684 476.793 20.5684 476.393 20.9684C475.993 21.3684 475.493 21.5684 474.893 21.5684ZM489.138 38.8184C487.898 38.8184 486.788 38.5484 485.808 38.0084C485.328 37.7484 484.938 37.4684 484.638 37.1684C484.318 37.6084 483.968 37.9484 483.588 38.1884C483.408 38.3084 483.208 38.4184 482.988 38.5184H482.238V33.4184H483.438C483.698 34.2584 484.078 35.0384 484.578 35.7584C485.638 37.2984 486.958 38.0684 488.538 38.0684C489.378 38.0684 490.008 37.8684 490.428 37.4684C490.868 37.0484 491.088 36.4484 491.088 35.6684C491.088 35.0084 490.788 34.4584 490.188 34.0184C489.608 33.5584 488.688 32.9984 487.428 32.3384C486.348 31.7984 485.468 31.3184 484.788 30.8984C484.128 30.4584 483.558 29.9184 483.078 29.2784C482.618 28.6184 482.388 27.8484 482.388 26.9684C482.388 25.7684 482.898 24.7984 483.918 24.0584C484.958 23.2984 486.548 22.9184 488.688 22.9184C489.748 22.9184 490.728 23.1984 491.628 23.7584C492.068 24.0184 492.448 24.2884 492.768 24.5684C493.028 24.2084 493.378 23.8684 493.818 23.5484C494.158 23.3484 494.358 23.2384 494.418 23.2184H495.168V28.3184H493.968C493.668 27.4584 493.298 26.6884 492.858 26.0084C491.858 24.4484 490.668 23.6684 489.288 23.6684C488.748 23.6684 488.288 23.8684 487.908 24.2684C487.528 24.6684 487.338 25.1684 487.338 25.7684C487.338 26.5284 487.658 27.1684 488.298 27.6884C488.938 28.1884 489.908 28.7684 491.208 29.4284C492.268 29.9684 493.108 30.4484 493.728 30.8684C494.368 31.2684 494.908 31.7684 495.348 32.3684C495.808 32.9684 496.038 33.6684 496.038 34.4684C496.038 37.3684 493.738 38.8184 489.138 38.8184ZM499.19 37.9184L500.99 37.4684V18.2684L499.19 17.8184V17.3684H503.09C504.89 17.3684 505.79 18.2684 505.79 20.0684V30.5684L511.34 24.7184L509.09 23.8184V23.3684H514.79V23.8184L512.39 24.7184L508.94 28.3184L514.79 37.4684L516.29 37.9184V38.3684H512.39C511.43 38.3684 510.65 38.1584 510.05 37.7384C509.45 37.3184 508.88 36.6784 508.34 35.8184L505.79 31.7684V37.4684L507.59 37.9184V38.3684H499.19V37.9184ZM525.278 38.8184C524.158 38.8184 523.148 38.5884 522.248 38.1284C521.368 37.6484 520.678 37.0284 520.178 36.2684C519.678 35.5084 519.428 34.7084 519.428 33.8684V24.2684L517.628 23.8184V23.3684H521.528C523.328 23.3684 524.228 24.2684 524.228 26.0684V33.8684C524.228 35.1284 524.448 36.0984 524.888 36.7784C525.348 37.4384 525.878 37.7684 526.478 37.7684C527.218 37.7684 527.888 37.3684 528.488 36.5684C528.708 36.2684 528.938 35.8684 529.178 35.3684V24.2684L527.378 23.8184V23.3684H535.778V23.8184L533.978 24.2684V38.5184H533.678C532.218 38.5184 531.108 38.1184 530.348 37.3184C530.008 36.9584 529.768 36.5584 529.628 36.1184C529.348 36.6184 529.018 37.0684 528.638 37.4684C527.738 38.3684 526.618 38.8184 525.278 38.8184ZM545.54 38.8184C544.3 38.8184 543.19 38.5484 542.21 38.0084C541.73 37.7484 541.34 37.4684 541.04 37.1684C540.72 37.6084 540.37 37.9484 539.99 38.1884C539.81 38.3084 539.61 38.4184 539.39 38.5184H538.64V33.4184H539.84C540.1 34.2584 540.48 35.0384 540.98 35.7584C542.04 37.2984 543.36 38.0684 544.94 38.0684C545.78 38.0684 546.41 37.8684 546.83 37.4684C547.27 37.0484 547.49 36.4484 547.49 35.6684C547.49 35.0084 547.19 34.4584 546.59 34.0184C546.01 33.5584 545.09 32.9984 543.83 32.3384C542.75 31.7984 541.87 31.3184 541.19 30.8984C540.53 30.4584 539.96 29.9184 539.48 29.2784C539.02 28.6184 538.79 27.8484 538.79 26.9684C538.79 25.7684 539.3 24.7984 540.32 24.0584C541.36 23.2984 542.95 22.9184 545.09 22.9184C546.15 22.9184 547.13 23.1984 548.03 23.7584C548.47 24.0184 548.85 24.2884 549.17 24.5684C549.43 24.2084 549.78 23.8684 550.22 23.5484C550.56 23.3484 550.76 23.2384 550.82 23.2184H551.57V28.3184H550.37C550.07 27.4584 549.7 26.6884 549.26 26.0084C548.26 24.4484 547.07 23.6684 545.69 23.6684C545.15 23.6684 544.69 23.8684 544.31 24.2684C543.93 24.6684 543.74 25.1684 543.74 25.7684C543.74 26.5284 544.06 27.1684 544.7 27.6884C545.34 28.1884 546.31 28.7684 547.61 29.4284C548.67 29.9684 549.51 30.4484 550.13 30.8684C550.77 31.2684 551.31 31.7684 551.75 32.3684C552.21 32.9684 552.44 33.6684 552.44 34.4684C552.44 37.3684 550.14 38.8184 545.54 38.8184ZM555.591 37.9184L557.391 37.4684V24.2684L555.591 23.8184V23.3684H559.491C561.291 23.3684 562.191 24.2684 562.191 26.0684V37.4684L563.991 37.9184V38.3684H555.591V37.9184ZM559.491 21.5684C558.891 21.5684 558.391 21.3684 557.991 20.9684C557.591 20.5684 557.391 20.0684 557.391 19.4684C557.391 18.8684 557.591 18.3684 557.991 17.9684C558.391 17.5684 558.891 17.3684 559.491 17.3684C560.091 17.3684 560.591 17.5684 560.991 17.9684C561.391 18.3684 561.591 18.8684 561.591 19.4684C561.591 20.0684 561.391 20.5684 560.991 20.9684C560.591 21.3684 560.091 21.5684 559.491 21.5684Z" fill="black"/>
    </svg>    
</div>

<div class="flex flex-col gap-[30px] items-start px-[32rem] max-2xl:px-[19rem] max-xl:px-[12rem] max-lg:px-[20]">
    @include('user.components.comment-card', ['username'=>'Baqir Syafi', 'comment'=>'Aku anak indoensia sehat dan kuat karena mama memberi sakatonik abc'])
    @include('user.components.comment-card', ['username'=>'Sungkoenoe', 'comment'=>'akuasauhasdhakj akjd kjadkja sdkjhsa lkjdasjk hdlksajhdlkjadkja dkjsh dkajsd kjasdkj hsalkjdas daskhdksaj dakjsd afkajdsf gksg ksahdgfkhdsag  gfkgdsafkdsaf '])
    @include('user.components.comment-card', ['username'=>'Simon Subroto', 'comment'=>'Aku anak indoensia sehat dan kuat karena mama memberi sakatonik abc'])
    @include('user.components.comment-card', ['username'=>'Celline', 'comment'=>'Aku anak afdsasadasdfa dsa sa fsadasd  sehat dan kuat karena mama memberi sakatonik abc'])
</div>

{{-- Input komentar --}}
<div class="flex flex-col gap-5 px-[32rem] max-2xl:px-[19rem] max-xl:px-[12rem] max-lg:px-[20] py-20">
    <label class="text-lg font-yeseva font-bold">
        Komentar Anda
    </label>
    <textarea class="w-full h-40 py-3 px-3 min-h-[160px] rounded-lg border-[2px] border-[#25130B] leading-tight focus:outline-none text-sm bg-[#F9F3EE]" placeholder="Ketik komentar anda..."></textarea>
    <button id="btn-comment" name="btn-comment" typle="submit" class="h-10 w-1/4 border-[2px] border-[#25130B] rounded-full hover:bg-[#25130B] hover:text-[#F9F3EE] self-end">
        Posting
    </button>
</div>

