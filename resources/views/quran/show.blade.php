<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

<nav class="navbar navbar-light d-flex justify-content-between"
     style="background-color:#001d39; color:white; padding:10px;">
    <h1 style="width:100%; text-align:center; font-family: amiri, serif">
        ﴿{{ $surah['name'] }}﴾
    </h1>
</nav>

@php
    function angkaArab($angka) {
        $arab = [
            '0'=>'٠','1'=>'١','2'=>'٢','3'=>'٣','4'=>'٤',
            '5'=>'٥','6'=>'٦','7'=>'٧','8'=>'٨','9'=>'٩'
        ];
        return strtr($angka, $arab);
    }
@endphp

<div class="container mt-3">

    <!-- BOX AYAT -->
    <div style="
        background-color:#6ea2b3;
        padding:20px;
        border-radius:12px;
        color:white;
        direction:rtl;
        text-align:right;
        line-height:2.2;
        font-size:22px;
        font-family: amiri, serif;
    ">

        @foreach($surah['ayahs'] as $ayat)
            <span style="display:block; margin-bottom:12px;">
                
                {{ $ayat['text'] }}

                <strong style="margin-right:8px;">
                   ﴿ {{ angkaArab($ayat['numberInSurah']) }} ﴾
                </strong>

            </span>
        @endforeach

    </div>

</div>