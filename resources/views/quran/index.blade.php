<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

<style>
.juz-card {
    background-color: #6ea2b3;
    color: #001d39;
    transition: all 0.3s ease;
    cursor: pointer;
}

/* Hover */
.juz-card:hover {
    background-color: #5c93a3;
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2),
                0 0 15px #6ea2b3; /* glow digabung di sini */
}

/* Klik */
.juz-card:active {
    transform: scale(0.97);
    background-color: #4a7f8d;
}
</style>

<!-- Image and text -->
<nav class="navbar navbar-light d-flex justify-content-between" style="background-color:#6ea2b3; ">
    
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center ms-3" href="#">
        <img src="{{ asset('images/logo.png') }}" width="200" height="65" class="me-3" alt="">
    </a>
</nav>


<div id="carouselQuran" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    
    <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <div class="carousel-item active">
            <div style="background-image: url('{{ asset('images/desktop1.jpg') }}'); 
                        height: 80vh; 
                        background-size: cover; 
                        background-position: center;
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        color: white; 
                        text-align: center;
                        font-family: amiri, serif;">
                
                <div>
                    <h1 class="fw-bold">Bacalah Al-Qur'an</h1>
                    <p>اُتْلُ مَآ اُوْحِيَ اِلَيْكَ مِنَ الْكِتٰبِ وَاَقِمِ الصَّلٰوةَۗ اِنَّ الصَّلٰوةَ تَنْهٰى عَنِ الْفَحْشَاۤءِ وَالْمُنْكَرِۗ وَلَذِكْرُ اللّٰهِ اَكْبَرُۗ وَاللّٰهُ يَعْلَمُ مَا تَصْنَعُوْنَ</p>
                    <p>Bacalah (Nabi Muhammad) Kitab (Al-Qur’an) yang telah diwahyukan kepadamu dan tegakkanlah salat. Sesungguhnya salat itu mencegah dari (perbuatan) keji dan mungkar. Sungguh, mengingat Allah (salat) itu lebih besar (keutamaannya daripada ibadah yang lain). Allah mengetahui apa yang kamu kerjakan.</p>
                    <p>QS. Al-Ankabut : 45</p>
                </div>

            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item">
            <div style="background-image: url('{{ asset('images/desktop2.jpg') }}'); 
                        height: 80vh; 
                        background-size: cover; 
                        background-position: center;
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        color: white; 
                        text-align: center;
                        font-family: amiri, serif;">
                
                <div>
                    <h1 class="fw-bold">Al-Qur’an Sebagai Penawar dan Rahmat</h1>
                    <p>وَنُنَزِّلُ مِنَ الْقُرْآنِ مَا هُوَ شِفَاءٌ وَرَحْمَةٌ لِلْمُؤْمِنِينَ وَلَا يَزِيدُ الظَّالِمِينَ إِلَّا خَسَارًا</p>
                    <p>Dan Kami turunkan dari Al-Qur’an suatu yang menjadi penawar dan rahmat bagi orang-orang yang beriman dan Al-Qur’an itu tidaklah menambah kepada orang-orang yang zalim selain kerugian</p>
                    <p>(QS. Al-Isra’ : 82)</p>
                </div>

            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item">
            <div style="background-image: url('{{ asset('images/desktop3.jpg') }}'); 
                        height: 80vh; 
                        background-size: cover; 
                        background-position: center;
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        color: white; 
                        text-align: center;
                        font-family: amiri, serif;">
                
                <div>
                    <h1 class="fw-bold">Al-Qur'an Sebagai Petunjuk</h1>
                    <p>اِنَّ هٰذَا الْقُرْاٰنَ يَهْدِيْ لِلَّتِيْ هِيَ اَقْوَمُ وَيُبَشِّرُ الْمُؤْمِنِيْنَ الَّذِيْنَ يَعْمَلُوْنَ الصّٰلِحٰتِ اَنَّ لَهُمْ اَجْرًا كَبِيْرًاۙ</p>
                    <p>Sesungguhnya Al-Qur'an ini memberikan petunjuk kepada (jalan) yang paling lurus dan memberi kabar gembira kepada orang-orang mukmin yang mengerjakan kebajikan bahwa bagi mereka ada pahala yang besar</p>
                    <p>QS. Al-Isra' : 9</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol kiri -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselQuran" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <!-- Tombol kanan -->
    <button class="carousel-control-next" type="button" data-bs-target="#carouselQuran" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>


        

    </div>
</div>

<div class="container mt-4">

    <!-- Pilihan -->
    <ul class="nav nav-tabs justify-content-center" id="quranTab">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#surah" style="font-family: amiri, serif; font-size:24px; font-weight:bold">Surah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#juz" style="font-family: amiri, serif; font-size:24px; font-weight:bold">Juz</a>
        </li>
    </ul>
        <div class="tab-content mt-3">

        @php
            function angkaArab($angka) {
            $arab = ['0'=>'٠','1'=>'١','2'=>'٢','3'=>'٣','4'=>'٤','5'=>'٥','6'=>'٦','7'=>'٧','8'=>'٨','9'=>'٩'];
            return strtr($angka, $arab);
            }
        @endphp

<!-- SURAH -->
<div class="tab-pane fade show active" id="surah" style="color:#001d39">
    <div class="row">
        @foreach($surahs as $surah)
            <div class="col-md-4 mb-3">
                <a href="{{ url('/surah/' . $surah['number']) }}" class="text-decoration-none">
                    <div class="card p-3 juz-card text-center" style="font-family: amiri, serif;">
                        <strong>
                            {{ $surah['name'] }}
                        </strong>
                        <span>
                            {{ angkaArab($surah['number']) }}
                        </span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

        <!-- JUZ -->
        <div class="tab-pane fade" id="juz">
            <div class="row">
                @for($i = 1; $i <= 30; $i++)
                    <div class="col-md-4 mb-3">
                        <div class="card p-3 juz-card text-center" style="font-family: amiri, serif;">
                            <a href="{{ url('/juz/' . $i) }}" class="text-decoration-none fw-bold text-dark">
                            Juz {{ $i }}
                            </a>
                        </div>
                        
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>