@extends('layout-hasilujian.app')
@section('content')

<!-- Container Utama -->
<div class="container-fluid">
    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-md-9 main-content">
            <div class="container-kuis">
                <div class="question-section  px-4 py-4 position-relative">
                    <!-- Pojok Hijau -->
                    <div class="corner-green"></div>

                    <!-- Nomor dan Pertanyaan -->
                    <h6 class="nomor-soal">
                        <span class="question-number">1.</span>
                        <span class="question-text">Manakah dari tipe data berikut yang merupakan tipe data primitif di Java?</span>
                    </h6>

                    <!-- Pilihan Jawaban -->
                    <div class="jawaban mt-3">
                        <p class="text-muted mb-3">Pilih jawaban:</p>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="jawabanA" checked>
                            <label class="form-check-label d-flex align-items-center" for="jawabanA">
                                <span>A. Char</span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. String</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C. Array</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. Integer</label>
                        </div>
                    </div>
                </div>

                <div class="question-section px-4 py-4 position-relative">
                    <div class="corner-red"></div>
                    <h6 class="nomor-soal">
                        <span class="question-number">2.</span>
                        <span class="question-text">Apa fungsi dari `System.out.println("Hello, World!");` di Java?</span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. Menghentikan program</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. Menjalankan program</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="jawabanC" checked>
                            <label class="form-check-label" for="jawabanC">C. Membaca dari data pengguna</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">
                                <span>D. Menampilkan text "Hello, World!" ke layar</span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question-section px-4 py-4 position-relative">

                    <div class="corner-green"></div>
                    <h6 class="nomor-soal">
                        <span class="question-number">3.</span>
                        <span class="question-text">Apa fungsi utama dari JDK dalam pengembangan aplikasi Java?  </span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal3" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. Menyediakan alat untuk debugging.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal3" id="jawabanB" checked>
                            <label class="form-check-label" for="jawabanB">
                                <span> B. Mengompilasi dan menjalankan program Java.</span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal3" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C. Menyimpan data aplikasi Java.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal3" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. Mengelola memori aplikasi Java.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question-section px-4 py-4 position-relative">
                    <div class="corner-green"></div>
                    <h6 class="nomor-soal">
                        <span class="question-number">4.</span>
                        <span class="question-text">Mana di antara nama variabel berikut yang **tidak valid** di Java?
                        </span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal4" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. `namaPengguna`
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal4" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. `_totalNilai`
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal4" id="jawabanC" checked>
                            <label class="form-check-label" for="jawabanC">
                                <span> C. `3hasil`</span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal4" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. `jumlahMaksimum`
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question-section px-4 py-4 position-relative">
                    <div class="corner-green"></div>
                    <h6 class="nomor-soal">
                        <span class="question-number">5.</span>
                        <span class="question-text">Apa peran utama metode public static void main(String[] args) di Java?</span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal5" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. Menyimpan data variabel.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal5" id="jawabanB" checked>
                            <label class="form-check-label" for="jawabanB">
                                <span> B. Sebagai titik awal eksekusi program. </span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal5" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C. Menampilkan teks ke layar.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal5" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. Mengkompilasi program.
                            </label>
                        </div>
                    </div>
                </div>

                <div class="question-section px-4 py-4 position-relative">
                    <div class="corner-green"></div>
                    <h6 class="nomor-soal">
                        <span class="question-number">6.</span>
                        <span class="question-text">Tipe data mana yang digunakan untuk menyimpan bilangan pecahan?</span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal6" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. int
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal6" id="jawabanB" checked>
                            <label class="form-check-label" for="jawabanB">
                                <span> B. float </span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal6" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C. char
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal6" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. boolean
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question-section px-4 py-4 position-relative">
                    <div class="corner-green"></div>
                    <h6 class="nomor-soal">
                        <span class="question-number">7.</span>
                        <span class="question-text">Berapa ukuran memori yang digunakan oleh tipe data int di Java?</span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal7" id="jawabanA" checked>
                            <label class="form-check-label" for="jawabanA">
                                <span> 4 byte </span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal7" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. 8 byte
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal7" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C. 2 byte
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal7" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. 1 byte
                            </label>
                        </div>
                    </div>
                </div>

                <div class="question-section px-4 py-4 position-relative">
                    <div class="corner-green"></div>
                    <h6 class="nomor-soal">
                        <span class="question-number">8.</span>
                        <span class="question-text">Apa tujuan dari keyword public dalam deklarasi kelas di Java? </span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal8" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. Menandakan bahwa kelas tersebut hanya dapat diakses dalam paket yang sama
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal8" id="jawabanB" checked>
                            <label class="form-check-label" for="jawabanB">
                                <span> B. Menandakan bahwa kelas tersebut dapat diakses dari mana saja </span>
                                <span class="ms-3 text-success fw-bold">Benar</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal8" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C.   Membaca data dari pengguna
                                Menandakan bahwa kelas tersebut tidak dapat diubah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal8" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. Menandakan bahwa kelas tersebut adalah kelas abstrak

                            </label>
                        </div>
                    </div>
                </div>

                <!-- Tombol Navigasi -->

            </div>
        </div>
        <!-- Kolom Kanan -->
        <div class="col-md-3 sidebar">
            <div class="p-2">
                <!-- Time Left -->
                <h6 class="time-left-title">Durasi Pengerjaan</h6>
                <div class="timer text-center mb-3">
                    <div class="time-box">
                        <div class="custom-timer text-center">
                            <span class="time-value hours">00</span>
                            <div class="time-label">hours</div>
                        </div>
                        <div class="custom-timer text-center">
                            <span class="time-value minutes">31</span>
                            <div class="time-label">minutes</div>
                        </div>
                        <div class="custom-timer text-center">
                            <span class="time-value seconds">12</span>
                            <div class="time-label">seconds</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
 /* Custom Styles */
 .main-content {
    height: 100vh; /* Tinggi penuh */
}
.sidebar {
    display: flex;
    margin-top: 90px;
    height: 200px; /* Tinggi penuh */
    background-color: #FFFFFF; /* Warna pink */
    border-radius: 40px;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
    justify-content: center;
    align-items: center;
    width: 370px;
}
.nomor-soal {
    display: flex; /* Mengatur elemen menjadi satu baris */
    align-items: center; /* Menyelaraskan teks secara vertikal */
    gap: 8px; /* Memberikan jarak antara angka dan teks */
    font-weight: bold; /* Membuat teks tebal */
    font-size: 16px; /* Ukuran font */
}

.question-number{
    font-size: 16px;
    font-weight: 400;
}
.question-text{
    font-size: 16px;
    font-weight: 400;
    margin-left: 10px;
}
.corner-green {
    width: 40px;
    height: 40px;
    background-color: #009900; /* Warna hijau */
    position: absolute;
    top: 0;
    right: 0;
    clip-path: polygon(100% 0, 0 0, 100% 100%);
    border-top-right-radius: 19px; /* Membuat sudut kanan atas rounded */
    border-bottom-left-radius: 0; /* Pastikan sisi lain tidak rounded */
}
.corner-red {
    width: 40px;
    height: 40px;
    background-color: #FF1C1C; /* Warna hijau */
    position: absolute;
    top: 0;
    right: 0;
    clip-path: polygon(100% 0, 0 0, 100% 100%);
    border-top-right-radius: 19px; /* Membuat sudut kanan atas rounded */
    border-bottom-left-radius: 0; /* Pastikan sisi lain tidak rounded */
}
.jawaban {
    margin-top: 40px;
    margin-left: 28px;
}
.jawaban p{
    font-size: 12px;
    font-weight: 400;
}
.custom-margin {
    margin-bottom: 35px; /* Menetapkan margin bawah 35px */
    margin-top: 40px;
    font-size: 16px;
    font-weight: 600;
    color: var(--primary-300-default, #0056D2);
}

/* Time Box Styling */
.time-left-title {
    color: #0056D2; /* Warna biru (sesuai dengan text-primary Bootstrap) */
    font-weight: 600; /* Teks tebal */
    margin-bottom: 40px; /* Margin bawah 16px (mb-3) */
    font-size: 1rem; /* Ukuran font (opsional jika ingin disesuaikan) */
    margin-top: 40px;
}
.time-box .time-value {
    font-size: 20px;
    font-weight: 600;
    color: #000;

}

.time-box .time-label {
    font-size: 14px;
    color: #000;
    font-weight: 400;
}
.time-label {
    margin-top: 15px;
}
.time-box {
    margin-bottom: 40px;
}
.custom-timer {
    margin: 0 17px; /* Memberikan jarak horizontal 54px total */
    display: inline-block;
    text-align: center;
}

.container-kuis {
    margin-top: 90px !important;
    margin-left: 60px;
}

.question-section {
    border: 2px solid #007bff; /* Border biru */
    border-radius: 20px; /* Sudut membulat */
    background-color: #fff; /* Latar belakang putih */
    position: relative; /* Untuk elemen hijau di pojok */
    margin-bottom: 35px;

}
.question-btn {
    width: 40px;
    height: 40px;
    border: 3px solid #6c757d; /* Border color (gray) */
    border-radius: 50%; /* Makes buttons circular */
    background-color: transparent;
    color: #6c757d; /* Text color (gray) */
    font-weight: bold;
    text-align: center;
    line-height: 36px; /* Centering the text inside */
    cursor: pointer;
    transition: all 0.3s ease;
}

.question-number {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 31px; /* Jarak antar tombol */
}

.question-btn.active {
    color: #000;
    border-color: #4A5568; /* Border matches background */
}

.question-btn:hover {
    background-color: #e7f1ff; /* Light blue on hover */
    color: #0d6efd;
    border-color: #0d6efd;
}

.gap-2 {
    gap: 10px; /* Adds space between buttons */
}


/* Tombol Previous */
.btn-prev {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 115px;
    border-radius: 28px;
    padding: 8px 10px;
    font-weight: 600;
    margin-right: 8px;

    font-size: 14px;
    font-weight: 400;
}

/* Tombol Tandai Soal */
.btn-flag {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 148px;
    border-radius: 50px;
    padding: 8px 10px; /* Tambahkan padding horizontal lebih besar */
    font-weight: 600;
    text-align: center;
    background-color: #FFD966; /* Warna tombol */
    border: none;

    font-size: 14px;
    font-weight: 400;
}


/* Tombol Next */
.btn-next {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 115px;
    border-radius: 28px;
    padding: 8px 8px;
    font-weight: 600;

    font-size: 14px;
    font-weight: 400;
}

/* Ikon dan teks align tengah */
.d-flex.align-items-center {
    display: inline-flex;
    align-items: center;
}

/* Untuk memberi spasi ikon dan teks */
.ms-2 {
    margin-left: 8px;
}
.me-2 {
    margin-right: 8px;
}

.mt-4 {
    margin-top: 205px !important;
}
.form-check {
    margin-bottom: 10px;
}


/* Tombol ketika sudah dijawab */
.question-btn.answered {
    background-color: #003D94;
    color: white;
    border-color: #003D94;
}

/* Tombol ketika belum dijawab tetapi ditandai */
.question-btn.marked-unanswered {
    border-color: #FF8000;

}

/* Tombol ketika sudah dijawab dan ditandai */
.question-btn.marked-answered.answered {
    border-color: #FF8000;
    color: #FFF;
    background-color: #003D94; /* Prioritas warna tandai */
}

.question-btn.answered.marked-answered   {
    border-color: #FF8000;
    color: #FFF;
    background-color: #003D94; /* Prioritas warna tandai */
}



</style>
<script>


</script>

@endsection
