@php
    $show = request()->query('show', '');
@endphp


<div class="container mt-5">
    <!-- Quiz Box -->
    <div class="quiz-container d-flex justify-content-between align-items-center">
        <!-- Quiz Detail -->
        <div class="quiz-detail d-flex flex-column">
            <h5 class="detail-title">Detail kuis</h5>
            <div class="d-flex">
                <div class="me-5">
                    <p class="detail-title mb-0">Batas waktu</p>
                    <p class="detail-text">26 Feb pukul 23.59</p>
                </div>
                <div>
                    <p class="detail-title mb-0">Percobaan</p>
                    <p class="detail-text">1 percobaan</p>
                </div>
            </div>
        </div>
        <!-- Button -->
        <button class="quiz-button {{ $show === 'content-kuis' ? 'selesai' : '' }}"
                onclick="window.location.href='{{ route('ujian.kuis') }}'"
                @if($show === 'content-kuis') disabled @endif>
            {{ $show === 'content-kuis' ? 'Selesai' : 'Mulai' }}
        </button>


    </div>


    @if(request()->query('show') === 'content-kuis')
        <div class="nilai-container d-flex justify-content-between align-items-center" id="nilai-container">
            <div class="quiz-detail d-flex flex-column">
                <h5 class="nilai-title">Nilai</h5>
                <p class="jawaban-detail">7 dari 8 jawaban anda benar.</p>
                <p class="nilai-score">80</p>
                <a href="{{ route('ujian.hasilkuis') }}" class="answer-button btn btn-primary">Lihat Jawaban</a>
            </div>
        </div>
    @endif
</div>
<style>
    /* Custom Styling */
    .quiz-container {
        border: 1px solid #0056D2; /* Border berwarna biru */
        border-radius: 20px; /* Membuat pojok melengkung */
        background-color: #E6F0FF; /* Background biru terang */
        padding: 24px; /* Padding di dalam container */
    }

    .quiz-button {
        background-color: #0056D2; /* Warna biru untuk tombol */
        color: white; /* Warna teks putih */
        border-radius: 20px; /* Tombol melengkung */
        border: none; /* Hilangkan border */
        padding: 8px 20px; /* Padding untuk tombol */
        font-weight: 600; /* Tebal */
        text-align: center;
        font-size: 20px;

    }
    .quiz-button.selesai {
        background-color: #4A5568;
        color: white;
        cursor: not-allowed;

    }
    .quiz-button.selesai:hover {
        background-color: #4A5568; /* Tetap warna sama saat hover */
        color: white;
    }

    .quiz-button:hover {
        background-color: #002661; /* Hover warna lebih gelap */
    }

    .detail-title {
        font-weight: 600; /* Judul tebal */
        color: #000; /* Warna teks abu tua */
        font-size: 16px;
        margin-bottom: 40px;
    }

    .detail-text {
        color: #4A5568; /* Warna teks abu */
        font-size: 12px;
    }

    .nilai-container {
        margin-top: 40px;
        border: 1px solid #2D3748; /* Border berwarna biru */
        border-radius: 20px; /* Membuat pojok melengkung */
        background-color: #ffffff; /* Background biru terang */
        padding: 24px; /* Padding di dalam container */
    }

    .nilai-title {
        font-weight: 600; /* Judul tebal */
        color: #000; /* Warna teks abu tua */
        font-size: 16px;
        margin-bottom: 20px;
    }

    .nilai-score {
        font-size: 28px;
        font-weight: 600;
        color: #28a745; /* warna hijau */
    }

    .answer-button {
        background-color: #0056D2; /* Warna biru untuk tombol */
        color: white; /* Warna teks putih */
        border-radius: 20px; /* Tombol melengkung */
        border: none; /* Hilangkan border */
        padding: 8px 20px; /* Padding untuk tombol */
        font-weight: 600; /* Tebal */
        text-align: center;
        font-size: 14px;

    }
    .jawaban-detail {
        font-size: 12px;
        font-weight: 400;
        margin-bottom: 5px; /* opsional, untuk jarak antar elemen */
    }

</style>

<script>
    function startQuiz() {
        window.location.href = '{{ route('ujian.kuis') }}';
    }

    function finishQuiz() {
        document.getElementById('nilai-container').style.display = 'block';
    }
</script>
