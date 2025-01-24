@extends('layout-ujian.app')
@section('content')

<!-- Container Utama -->
<div class="container-fluid">
    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-md-9 main-content">
            <div class="container-kuis">
                <div class="question-section" id="soal1">
                    <h6 class="nomor-soal">
                        <span class="question-number">1.</span>
                        <span class="question-text">Manakah dari tipe data berikut yang merupakan tipe data primitif di Java?</span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal1" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. Char</label>
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
                <div class="question-section" id="soal2" style="display: none;">
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
                            <input class="form-check-input" type="radio" name="soal2" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C. Membaca dari data pengguna</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal2" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. Menampilkan text "Hello, World!" ke layar</label>
                        </div>
                    </div>
                </div>
                <div class="question-section" id="soal3" style="display: none;">
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
                            <input class="form-check-input" type="radio" name="soal3" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. Mengompilasi dan menjalankan program Java.
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
                <div class="question-section" id="soal4" style="display: none;">
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
                            <input class="form-check-input" type="radio" name="soal4" id="jawabanC">
                            <label class="form-check-label" for="jawabanC">C. `3hasil`
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal4" id="jawabanD">
                            <label class="form-check-label" for="jawabanD">D. `jumlahMaksimum`
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question-section" id="soal5" style="display: none;">
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
                            <input class="form-check-input" type="radio" name="soal5" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. Sebagai titik awal eksekusi program.
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

                <div class="question-section" id="soal6" style="display: none;">
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
                            <input class="form-check-input" type="radio" name="soal6" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. float
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
                <div class="question-section" id="soal7" style="display: none;">
                    <h6 class="nomor-soal">
                        <span class="question-number">7.</span>
                        <span class="question-text">Berapa ukuran memori yang digunakan oleh tipe data int di Java?</span>
                    </h6>

                    <div class="jawaban">
                        <!-- Pilihan Jawaban -->
                        <p class="text-muted mb-3">Pilih jawaban:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal7" id="jawabanA">
                            <label class="form-check-label" for="jawabanA">A. 4 byte
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

                <div class="question-section" id="soal8" style="display: none;">
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
                            <input class="form-check-input" type="radio" name="soal8" id="jawabanB">
                            <label class="form-check-label" for="jawabanB">B. Menandakan bahwa kelas tersebut dapat diakses dari mana saja
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
                <div class="mt-4 mb-4 d-flex justify-content-between align-items-center">

                    <!-- Tombol Tandai Soal -->
                    <button class="btn btn-warning btn-flag d-flex align-items-center" id="flagButton" data-question="soal1">
                        <i class="bi bi-flag me-2"></i>
                        Tandai Soal
                    </button>

                    <!-- Wrapper untuk Tombol Previous dan Next -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary btn-prev d-flex align-items-center" id="prevBtn" disabled>
                            <i class="bi bi-chevron-left"></i>
                            <span class="ms-2">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next d-flex align-items-center"  id="nextBtn">
                            <span class="me-2">Next</span>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kolom Kanan -->
        <div class="col-md-3 sidebar">
            <div class="p-3">
                <!-- Time Left -->
                <h6 class="time-left-title">Time Left</h6>
                <div class="timer text-center mb-3">
                    <div class="time-box">
                        <div class="custom-timer text-center">
                            <span class="time-value hours">00</span>
                            <div class="time-label">hours</div>
                        </div>
                        <div class="custom-timer text-center">
                            <span class="time-value minutes">33</span>
                            <div class="time-label">minutes</div>
                        </div>
                        <div class="custom-timer text-center">
                            <span class="time-value seconds">00</span>
                            <div class="time-label">seconds</div>
                        </div>
                    </div>
                </div>

                <hr>
                <!-- List of Questions -->
                <!-- List of Questions -->
                <h6 class="custom-margin">List of Questions</h6>
                <div class="question-number">
                    <button class="question-btn" id="question-1" data-target="soal1">1</button>
                    <button class="question-btn" id="question-2" data-target="soal2">2</button>
                    <button class="question-btn" id="question-3" data-target="soal3">3</button>
                    <button class="question-btn" id="question-4" data-target="soal4">4</button>
                    <button class="question-btn" id="question-5" data-target="soal5">5</button>
                    <button class="question-btn" id="question-6" data-target="soal6">6</button>
                    <button class="question-btn" id="question-7" data-target="soal7">7</button>
                    <button class="question-btn" id="question-8" data-target="soal8">8</button>
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
    height: 100vh; /* Tinggi penuh */
    background-color: #FFFFFF; /* Warna pink */
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
    padding: 20px;
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
document.addEventListener("DOMContentLoaded", () => {
    const questions = document.querySelectorAll(".question-section");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const flagButton = document.getElementById("flagButton");
    const questionButtons = document.querySelectorAll(".question-btn");
    let currentIndex = 0;
    function areAllQuestionsAnswered() {
        return Array.from(questions).every((question) => {
            const inputs = question.querySelectorAll('input[type="radio"]');
            return Array.from(inputs).some((input) => input.checked);
        });
    }

    // Fungsi untuk menampilkan soal berdasarkan indeks
    function showQuestion(index) {
        if (index < 0 || index >= questions.length) return;

        questions.forEach((question, i) => {
            question.style.display = i === index ? "block" : "none";
        });

        prevBtn.disabled = index === 0;

        if (index === questions.length - 1) {
            nextBtn.innerHTML = `<span class="me-2">Finish</span><i class="bi bi-check"></i>`;
            nextBtn.classList.remove("btn-primary");
            nextBtn.classList.add("btn-success");


            nextBtn.disabled = !areAllQuestionsAnswered(); // Disable jika belum semua dijawab

            nextBtn.onclick = function () {
                if (areAllQuestionsAnswered()) {
                    // Arahkan ke halaman kursus.java-pemula
                    window.location.href = '{{ route('kursus.java-pemula', ['show' => 'content-kuis']) }}';
                } else {
                    alert('Harap selesaikan semua pertanyaan sebelum menyelesaikan kuis.');
                }
            };

        } else {
            nextBtn.innerHTML = `<span class="me-2">Next</span><i class="bi bi-chevron-right"></i>`;
            nextBtn.classList.remove("btn-success");
            nextBtn.classList.add("btn-primary");
            nextBtn.disabled = false; // Pastikan tombol Next selalu aktif kecuali di soal terakhir
        }

        questionButtons.forEach((btn, i) => {
            btn.classList.toggle("active", i === index);
        });

        currentIndex = index;
    }

    questions.forEach((question) => {
        const inputs = question.querySelectorAll('input[type="radio"]');
        inputs.forEach((input) => {
            input.addEventListener("change", () => {
                if (currentIndex === questions.length - 1) {
                    // Perbarui tombol Finish jika di soal terakhir
                    nextBtn.disabled = !areAllQuestionsAnswered();
                }
            });
        });
    });


    // Fungsi untuk memeriksa apakah soal sudah dijawab
    function checkAnswered() {
        questions.forEach((question, index) => {
            const inputs = question.querySelectorAll('input[type="radio"]');
            const isAnswered = Array.from(inputs).some((input) => input.checked);

            // Tambahkan kelas "answered" pada tombol daftar soal jika dijawab
            questionButtons[index].classList.toggle("answered", isAnswered);
        });
    }

    // Fungsi untuk menangani tombol tandai soal
    function toggleFlag() {
        const questionButton = questionButtons[currentIndex];
        if (questionButton) {
            // Periksa apakah soal sudah dijawab
            const isAnswered = questionButton.classList.contains("answered");

            // Jika soal belum dijawab
            if (!isAnswered) {
                // Toggle kelas "marked-unanswered"
                questionButton.classList.toggle("marked-unanswered");

                // Pastikan kelas "marked-answered" tidak ada
                questionButton.classList.remove("marked-answered");
            } else {
                // Jika soal sudah dijawab
                // Toggle kelas "marked-answered"
                questionButton.classList.toggle("marked-answered");

                // Pastikan kelas "marked-unanswered" tidak ada
                questionButton.classList.remove("marked-unanswered");
            }
        }
    }

    // Event listener tombol Next
    nextBtn.addEventListener("click", () => {
        if (currentIndex < questions.length - 1) {
            showQuestion(currentIndex + 1);
        } else {
            
        }
    });

    // Event listener tombol Previous
    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            showQuestion(currentIndex - 1);
        }
    });

    // Event listener tombol daftar soal
    questionButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
            showQuestion(index);
        });
    });

    // Event listener tombol tandai soal
    flagButton.addEventListener("click", () => {
        checkAnswered(); // Pastikan status soal diperbarui
        toggleFlag();
    });


    // Event listener untuk mendeteksi perubahan pada jawaban
    questions.forEach((question) => {
        const inputs = question.querySelectorAll('input[type="radio"]');
        inputs.forEach((input) => {
            input.addEventListener("change", checkAnswered);
        });
    });

    // Panggil checkAnswered() saat halaman dimuat
    checkAnswered();

    // Tampilkan soal pertama saat halaman dimuat
    showQuestion(0);
});


document.addEventListener("DOMContentLoaded", () => {
    // Ambil elemen waktu
    const hoursElement = document.querySelector(".time-value.hours");
    const minutesElement = document.querySelector(".time-value.minutes");
    const secondsElement = document.querySelector(".time-value.seconds");

    // Atur waktu awal (dalam detik)
    let totalSeconds = (0 * 60 * 60) + (33 * 60) + 0; // 0 jam, 33 menit, 0 detik

    // Fungsi untuk memperbarui tampilan waktu
    function updateTimerDisplay() {
        const hours = Math.floor(totalSeconds / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;

        hoursElement.textContent = String(hours).padStart(2, "0");
        minutesElement.textContent = String(minutes).padStart(2, "0");
        secondsElement.textContent = String(seconds).padStart(2, "0");
    }

    // Fungsi untuk menjalankan timer
    function startTimer() {
        const timerInterval = setInterval(() => {
            if (totalSeconds <= 0) {
                clearInterval(timerInterval); // Hentikan timer jika mencapai 0
                alert("Waktu habis!");
                return;
            }

            totalSeconds--; // Kurangi total detik
            updateTimerDisplay(); // Perbarui tampilan waktu
        }, 1000);
    }

    // Perbarui tampilan pertama kali
    updateTimerDisplay();

    // Mulai timer
    startTimer();
});

</script>

@endsection
