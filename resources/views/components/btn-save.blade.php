
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-xs btn-success btn-outline']) }} >
    {{ $slot }}
    <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" class="size-4" viewBox="0 0 32 32" xml:space="preserve">
        <style type="text/css">
            .pictogram_een {
                fill: #F4D6B0;
            }

            .pictogram_vier {
                fill: #E54D2E;
            }

            .pictogram_zes {
                fill: #0C6667;
            }

            .st0 {
                fill: #01A59C;
            }

            .st1 {
                fill: #F8AD89;
            }

            .st2 {
                fill: #F27261;
            }

            .st3 {
                fill: none;
            }

            .st4 {
                clip-path: url(#SVGID_2_);
                fill: #F27261;
            }

            .st5 {
                clip-path: url(#SVGID_2_);
                fill: none;
            }

            .st6 {
                clip-path: url(#SVGID_6_);
                fill: #F4D6B0;
            }

            .st7 {
                clip-path: url(#SVGID_8_);
                fill: #F27261;
            }

            .st8 {
                clip-path: url(#SVGID_8_);
                fill: none;
            }

            .st9 {
                clip-path: url(#SVGID_10_);
                fill: #F27261;
            }

            .st10 {
                clip-path: url(#SVGID_10_);
                fill: none;
            }

            .st11 {
                fill: #F4D6B0;
            }
        </style>
        <g>
            <path class="pictogram_zes"
                d="M32,29c0,1.65-1.35,3-3,3H3c-1.65,0-3-1.35-3-3V3c0-1.65,1.35-3,3-3h26c1.65,0,3,1.35,3,3V29z" />
            <path class="pictogram_een"
                d="M21,8V0h5v8H21z M6,0v8h12V0H6z M25,16H7c-1.65,0-3,1.35-3,3v7h24v-7C28,17.35,26.65,16,25,16z" />
            <rect x="4" y="26" class="pictogram_vier" width="24" height="6" />
        </g>
    </svg>
</button>