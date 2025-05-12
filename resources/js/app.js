import "./bootstrap";
import.meta.glob(["../images/**"]);



// Kursus Terbaru
const trackTerbaru = document.querySelector('#cardSliderTerbaru .carousel-track');
const prevBtnTerbaru = document.querySelector('.kursus-terbaru-prev-btn');
const nextBtnTerbaru = document.querySelector('.kursus-terbaru-next-btn');
const cardsTerbaru = document.querySelectorAll('#cardSliderTerbaru .card');
const cardWidthTerbaru = cardsTerbaru[0].getBoundingClientRect().width;
let currentIndexTerbaru = 0;

// Fungsi Navigasi Kursus Terbaru
nextBtnTerbaru.addEventListener('click', () => {
    if (currentIndexTerbaru < cardsTerbaru.length - 1) {
        currentIndexTerbaru++;
        trackTerbaru.style.transform = `translateX(-${currentIndexTerbaru * cardWidthTerbaru}px)`;
    }
});

prevBtnTerbaru.addEventListener('click', () => {
    if (currentIndexTerbaru > 0) {
        currentIndexTerbaru--;
        trackTerbaru.style.transform = `translateX(-${currentIndexTerbaru * cardWidthTerbaru}px)`;
    }
});

// Kursus Populer
const trackPopuler = document.querySelector('#cardSliderPopuler .carousel-track');
const prevBtnPopuler = document.querySelector('.kursus-populer-prev-btn');
const nextBtnPopuler = document.querySelector('.kursus-populer-next-btn');
const cardsPopuler = document.querySelectorAll('#cardSliderPopuler .card');
const cardWidthPopuler = cardsPopuler[0].getBoundingClientRect().width;
let currentIndexPopuler = 0;

// Fungsi Navigasi Kursus Populer
nextBtnPopuler.addEventListener('click', () => {
    if (currentIndexPopuler < cardsPopuler.length - 1) {
        currentIndexPopuler++;
        trackPopuler.style.transform = `translateX(-${currentIndexPopuler * cardWidthPopuler}px)`;
    }
});

prevBtnPopuler.addEventListener('click', () => {
    if (currentIndexPopuler > 0) {
        currentIndexPopuler--;
        trackPopuler.style.transform = `translateX(-${currentIndexPopuler * cardWidthPopuler}px)`;
    }
});






document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.carousel-track');
    const leftArrow = document.querySelector('.arrow.left');
    const rightArrow = document.querySelector('.arrow.right');
    const cards = document.querySelectorAll('.card');

    // Lebar kartu termasuk gap
    const cardWidth = cards[0].offsetWidth + 20; // 20 adalah gap antar kartu
    let currentPosition = 0; // Awal posisi track

    // Fungsi untuk memperbarui posisi track
    function updateTrackPosition() {
      track.style.transform = `translateX(-${currentPosition}px)`;

      // Nonaktifkan tombol jika di awal atau akhir
      leftArrow.disabled = currentPosition === 0;
      rightArrow.disabled =
        currentPosition >= cards.length * cardWidth - track.offsetWidth;
    }

    // Event listener untuk tombol panah
    leftArrow.addEventListener('click', () => {
      currentPosition -= cardWidth;
      updateTrackPosition();
    });

    rightArrow.addEventListener('click', () => {
      currentPosition += cardWidth;
      updateTrackPosition();
    });

    // Inisialisasi pertama
    updateTrackPosition();
  });
