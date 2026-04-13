<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

<nav class="navbar navbar-light d-flex justify-content-between"
     style="background-color:#001d39; color:white; padding:10px; border-radius:20px;">
    <h1 style="text-align: center; font-family: amiri, serif;" >Juz {{ $juz['number'] }}</h1>
</nav>

@php
    $grouped = collect($juz['ayahs'])->groupBy('surah.name');

    function angkaArab($angka) {
        $arab = [
            '0'=>'٠','1'=>'١','2'=>'٢','3'=>'٣','4'=>'٤',
            '5'=>'٥','6'=>'٦','7'=>'٧','8'=>'٨','9'=>'٩'
        ];
        return strtr($angka, $arab);
    }
@endphp

<div class="container mt-3">

    @foreach($grouped as $surahName => $ayahs)
    <h2 style="text-align:center; font-size:24px; font-family: amiri, serif;">
        ﴿{{ $surahName }}﴾
    </h2>

    <div style="background:#6ea2b3; padding:15px; color:white; direction:rtl; font-size:24px; border-radius:20px; font-family: amiri, serif;">
        @foreach($ayahs as $ayah)
            <p>
                {{ $ayah['text'] }}
                <strong style="margin-right:8px;">
                    ﴿{{ angkaArab($ayah['numberInSurah']) }}﴾
                </strong>
                
            </p>
        @endforeach
    </div>

    <hr>
@endforeach

</div>