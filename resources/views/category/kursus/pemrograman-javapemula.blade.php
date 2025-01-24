@extends('layout-kursus.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar">
            <h5>Modul</h5>
            <div class="accordion custom-accordion" id="modul1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseModul1"
                      aria-expanded="true"
                      aria-controls="collapseModul1"
                    >
                      Modul 1 : Pengantar dan Dasar-dasar Pemrograman Java
                    </button>
                  </h2>
                  <div
                    id="collapseModul1"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#modul1"
                  >
                    <div class="accordion-body">

                        @php
                            $showContent = request('show', 'content-video'); // Default ke content-video
                        @endphp

                      <ul class="list-unstyled modul-list">
                        <li class="modul-item {{ $showContent === 'content-video' ? 'active' : '' }}">
                            <input type="checkbox"  id="pengantar-java" class="form-check-input modul-progress" />
                            <div class="modul-content" data-target="content-video">
                              <label class="modul-label">Pengenalan Java</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                  </svg>
                                  6 Menit
                              </span>
                            </div>
                        </li>

                        <li class="modul-item {{ $showContent === 'content-video2' ? 'active' : '' }}">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress" />
                            <div class="modul-content" data-target="content-video2">
                              <label class="modul-label">Instalasi JDK dan pengaturan IDE (NetBeans, Eclipse, IntelliJ)</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                  </svg>
                                  10 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item {{ $showContent === 'content-materippt2' ? 'active' : '' }}">
                            <input type="checkbox"  id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt2">
                              <label class="modul-label">Menjalankan program pertama: “Hello, World!”
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                8 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item {{ $showContent === 'content-materippt' ? 'active' : '' }}">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt">
                              <label class="modul-label">Variabel dan konvensi penamaan</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                18 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item {{ $showContent === 'content-materippt3' ? 'active' : '' }}">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt3">
                              <label class="modul-label">Tipe data primitif (int, double, char, boolean)</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                </svg>
                                21 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item {{ $showContent === 'content-kuis' ? 'active' : '' }}">
                            <input type="checkbox" id="kuis-1" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-kuis">
                              <label class="modul-label">Kuis 1</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" fill="none">
                                    <path d="M2.625 4.0625H4.875M2.625 8H9.375M2.625 10.25H9.375M2.625 12.5H4.875M1.5 15.3125H10.5C10.7984 15.3125 11.0845 15.194 11.2955 14.983C11.5065 14.772 11.625 14.4859 11.625 14.1875V1.8125C11.625 1.51413 11.5065 1.22798 11.2955 1.017C11.0845 0.806026 10.7984 0.6875 10.5 0.6875H1.5C1.20163 0.6875 0.915483 0.806026 0.704505 1.017C0.493526 1.22798 0.375 1.51413 0.375 1.8125V14.1875C0.375 14.4859 0.493526 14.772 0.704505 14.983C0.915483 15.194 1.20163 15.3125 1.5 15.3125Z" stroke="#4A5568" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.375 4.34375C9.53033 4.34375 9.65625 4.21783 9.65625 4.0625C9.65625 3.90717 9.53033 3.78125 9.375 3.78125C9.21967 3.78125 9.09375 3.90717 9.09375 4.0625C9.09375 4.21783 9.21967 4.34375 9.375 4.34375Z" stroke="#4A5568" stroke-width="0.7"/>
                                  </svg>
                                8 Soal
                              </span>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <div class="accordion custom-accordion" id="modul2">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseModul2"
                      aria-expanded="true"
                      aria-controls="collapseModul2"
                    >
                    Modul 2 : Ekspresi dan Kontrol Alur Program
                    </button>
                  </h2>
                  <div
                    id="collapseModul2"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#modul2"
                  >
                    <div class="accordion-body">
                      <ul class="list-unstyled modul-list">
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content"  data-target="content-video">
                              <label for="pengantar-java" class="modul-label">Operator aritmatika, relasional, dan logika
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                  </svg>
                                19 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Prioritas operator</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                </svg>
                                  19 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content"  data-target="content-video2">
                              <label for="pengantar-java" class="modul-label">Struktur kontrol if-else dan switch-case</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.6881V6.31212C6.75011 6.24486 6.76831 6.17886 6.8027 6.12105C6.83708 6.06324 6.88638 6.01574 6.94543 5.98353C7.00448 5.95132 7.07111 5.93559 7.13833 5.93798C7.20555 5.94037 7.27089 5.9608 7.3275 5.99712L11.5095 8.68437C11.5625 8.7183 11.606 8.765 11.6362 8.82017C11.6664 8.87535 11.6822 8.93723 11.6822 9.00012C11.6822 9.06301 11.6664 9.12489 11.6362 9.18007C11.606 9.23524 11.5625 9.28194 11.5095 9.31587L7.3275 12.0039C7.27089 12.0402 7.20555 12.0606 7.13833 12.063C7.07111 12.0654 7.00448 12.0497 6.94543 12.0175C6.88638 11.9852 6.83708 11.9377 6.8027 11.8799C6.76831 11.8221 6.75011 11.7561 6.75 11.6889V11.6881Z" fill="#4A5568"/>
                                  </svg>
                                21 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Looping: for, while, do-while
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                18 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Studi kasus sederhana menggunakan kontrol alur
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                </svg>
                                21 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-kuis">
                              <label for="pengantar-java" class="modul-label">Kuis 2</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" fill="none">
                                    <path d="M2.625 4.0625H4.875M2.625 8H9.375M2.625 10.25H9.375M2.625 12.5H4.875M1.5 15.3125H10.5C10.7984 15.3125 11.0845 15.194 11.2955 14.983C11.5065 14.772 11.625 14.4859 11.625 14.1875V1.8125C11.625 1.51413 11.5065 1.22798 11.2955 1.017C11.0845 0.806026 10.7984 0.6875 10.5 0.6875H1.5C1.20163 0.6875 0.915483 0.806026 0.704505 1.017C0.493526 1.22798 0.375 1.51413 0.375 1.8125V14.1875C0.375 14.4859 0.493526 14.772 0.704505 14.983C0.915483 15.194 1.20163 15.3125 1.5 15.3125Z" stroke="#4A5568" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.375 4.34375C9.53033 4.34375 9.65625 4.21783 9.65625 4.0625C9.65625 3.90717 9.53033 3.78125 9.375 3.78125C9.21967 3.78125 9.09375 3.90717 9.09375 4.0625C9.09375 4.21783 9.21967 4.34375 9.375 4.34375Z" stroke="#4A5568" stroke-width="0.7"/>
                                </svg>
                                10 Soal
                              </span>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <div class="accordion custom-accordion" id="modul3">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseModul3"
                      aria-expanded="true"
                      aria-controls="collapseModul3"
                    >
                    Modul 3 : Fungsi, Metode, dan Pengenalan OOP
                    </button>
                  </h2>
                  <div
                    id="collapseModul3"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#modul3"
                  >
                    <div class="accordion-body">
                      <ul class="list-unstyled modul-list">
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-video">
                              <label for="pengantar-java" class="modul-label">Deklarasi dan penggunaan fungsi/method
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                  </svg>
                                19 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Parameter, nilai pengembalian, dan scope variable</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                24 halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-kuis">
                              <label for="pengantar-java" class="modul-label">Kuis 3</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                8 Soal
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Looping: for, while, do-while
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                18 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Konsep dasar OOP: Kelas dan Objek
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                18 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress"/>
                            <div class="modul-content" data-target="content-tugas">
                              <label for="pengantar-java" class="modul-label">Tugas 1</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9 16.375C7.54137 16.375 6.11548 15.9425 4.90267 15.1321C3.68986 14.3217 2.74459 13.1699 2.18639 11.8223C1.6282 10.4747 1.48215 8.99182 1.76671 7.56121C2.05128 6.1306 2.75368 4.8165 3.78509 3.78509C4.8165 2.75368 6.1306 2.05128 7.56121 1.76671C8.99182 1.48215 10.4747 1.6282 11.8223 2.18639C13.1699 2.74459 14.3217 3.68986 15.1321 4.90267C15.9425 6.11548 16.375 7.54137 16.375 9C16.375 10.956 15.598 12.8318 14.2149 14.2149C12.8318 15.598 10.956 16.375 9 16.375ZM9 1.75C7.56609 1.75 6.16438 2.17521 4.97212 2.97185C3.77986 3.76849 2.85061 4.90078 2.30188 6.22555C1.75314 7.55031 1.60957 9.00804 1.88931 10.4144C2.16905 11.8208 2.85955 13.1126 3.87348 14.1265C4.88741 15.1405 6.17924 15.831 7.5856 16.1107C8.99196 16.3904 10.4497 16.2469 11.7745 15.6981C13.0992 15.1494 14.2315 14.2201 15.0282 13.0279C15.8248 11.8356 16.25 10.4339 16.25 9C16.25 7.07718 15.4862 5.23312 14.1265 3.87348C12.7669 2.51384 10.9228 1.75 9 1.75Z" fill="#4A5568" stroke="#4A5568"/>
                                    <path d="M11.5819 12.375L8.4375 9.23062V3.9375H9.5625V8.76375L12.375 11.5819L11.5819 12.375Z" fill="#4A5568"/>
                                  </svg>
                                13 Des 2024
                              </span>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <div class="accordion custom-accordion" id="modul4">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseModul4"
                      aria-expanded="true"
                      aria-controls="collapseModul4"
                    >
                    Modul 4 : Array, Koleksi, dan Penanganan Kesalahan
                    </button>
                  </h2>
                  <div
                    id="collapseModul4"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#modul4"
                  >
                    <div class="accordion-body">
                      <ul class="list-unstyled modul-list">
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress" />
                            <div class="modul-content" data-target="content-video">
                              <label for="pengantar-java" class="modul-label">Pengenalan dan manipulasi array
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                </svg>
                                12 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input modul-progress" />
                            <div class="modul-content" data-target="content-video">
                              <label for="pengantar-java" class="modul-label">Koleksi dasar di Java (List, Set, Map) dan penggunaannya
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                </svg>
                                  23 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input progress-item" />
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Pengertian dan jenis exception</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                </svg>
                                13 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input progress-item" />
                            <div class="modul-content" data-target="content-tugas">
                              <label for="pengantar-java" class="modul-label">Tugas 2
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9 16.875C7.44248 16.875 5.91992 16.4131 4.62489 15.5478C3.32985 14.6825 2.32049 13.4526 1.72445 12.0136C1.12841 10.5747 0.972461 8.99127 1.27632 7.46367C1.58018 5.93607 2.3302 4.53288 3.43154 3.43154C4.53288 2.3302 5.93607 1.58018 7.46367 1.27632C8.99127 0.972461 10.5747 1.12841 12.0136 1.72445C13.4526 2.32049 14.6825 3.32985 15.5478 4.62489C16.4131 5.91992 16.875 7.44248 16.875 9C16.875 11.0886 16.0453 13.0916 14.5685 14.5685C13.0916 16.0453 11.0886 16.875 9 16.875ZM9 2.25C7.66498 2.25 6.35994 2.64588 5.2499 3.38758C4.13987 4.12928 3.27471 5.18349 2.76382 6.41689C2.25293 7.65029 2.11925 9.00749 2.3797 10.3169C2.64015 11.6262 3.28303 12.829 4.22703 13.773C5.17104 14.717 6.37377 15.3599 7.68314 15.6203C8.99252 15.8808 10.3497 15.7471 11.5831 15.2362C12.8165 14.7253 13.8707 13.8601 14.6124 12.7501C15.3541 11.6401 15.75 10.335 15.75 9C15.75 7.20979 15.0388 5.4929 13.773 4.22703C12.5071 2.96116 10.7902 2.25 9 2.25Z" fill="#4A5568"/>
                                    <path d="M11.5819 12.375L8.4375 9.23062V3.9375H9.5625V8.76375L12.375 11.5819L11.5819 12.375Z" fill="#4A5568"/>
                                  </svg>
                                24 Des 2024
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Penanganan kesalahan menggunakan try-catch-finally
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                18 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-video">
                              <label for="pengantar-java" class="modul-label">Studi kasus penggunaan koleksi dengan penanganan error</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                </svg>
                                24 Menit
                              </span>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <div class="accordion custom-accordion" id="modul5">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseModul4"
                      aria-expanded="true"
                      aria-controls="collapseModul4"
                    >
                    Modul 5 : Praktik dan Proyek Akhir
                    </button>
                  </h2>
                  <div
                    id="collapseModul4"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#modul4"
                  >
                    <div class="accordion-body">
                      <ul class="list-unstyled modul-list">
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-video">
                              <label for="pengantar-java" class="modul-label">Konsep dan operasi dasar pada file CRUD
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.312C6.75011 6.24474 6.76831 6.17874 6.8027 6.12093C6.83708 6.06312 6.88638 6.01562 6.94543 5.98341C7.00448 5.9512 7.07111 5.93547 7.13833 5.93786C7.20555 5.94025 7.27089 5.96068 7.3275 5.997L11.5095 8.68425C11.5625 8.71818 11.606 8.76488 11.6362 8.82005C11.6664 8.87523 11.6822 8.93711 11.6822 9C11.6822 9.06289 11.6664 9.12477 11.6362 9.17994C11.606 9.23512 11.5625 9.28182 11.5095 9.31575L7.3275 12.0037C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0495 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6887V11.688Z" fill="#4A5568"/>
                                  </svg>
                                25 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Studi kasus aplikasi sederhana berbasis file</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                </svg>
                                  24 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-tugas">
                              <label for="pengantar-java" class="modul-label">Tugas 3</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9 16.875C7.44248 16.875 5.91992 16.4131 4.62489 15.5478C3.32985 14.6825 2.32049 13.4526 1.72445 12.0136C1.12841 10.5747 0.972461 8.99127 1.27632 7.46367C1.58018 5.93607 2.3302 4.53288 3.43154 3.43154C4.53288 2.3302 5.93607 1.58018 7.46367 1.27632C8.99127 0.972461 10.5747 1.12841 12.0136 1.72445C13.4526 2.32049 14.6825 3.32985 15.5478 4.62489C16.4131 5.91992 16.875 7.44248 16.875 9C16.875 11.0886 16.0453 13.0916 14.5685 14.5685C13.0916 16.0453 11.0886 16.875 9 16.875ZM9 2.25C7.66498 2.25 6.35994 2.64588 5.2499 3.38758C4.13987 4.12928 3.27471 5.18349 2.76382 6.41689C2.25293 7.65029 2.11925 9.00749 2.3797 10.3169C2.64015 11.6262 3.28303 12.829 4.22703 13.773C5.17104 14.717 6.37377 15.3599 7.68314 15.6203C8.99252 15.8808 10.3497 15.7471 11.5831 15.2362C12.8165 14.7253 13.8707 13.8601 14.6124 12.7501C15.3541 11.6401 15.75 10.335 15.75 9C15.75 7.20979 15.0388 5.4929 13.773 4.22703C12.5071 2.96116 10.7902 2.25 9 2.25Z" fill="#4A5568"/>
                                    <path d="M11.5819 12.375L8.4375 9.23062V3.9375H9.5625V8.76375L12.375 11.5819L11.5819 12.375Z" fill="#4A5568"/>
                                </svg>
                                04 Jan 2025
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-materippt3">
                              <label for="pengantar-java" class="modul-label">Merancang proyek aplikasi sederhana menggunakan Java
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.28875 9.231H11.7112V8.481H6.28875V9.231ZM6.28875 11.3077H11.7112V10.5577H6.28875V11.3077ZM6.28875 13.3853H9.46125V12.6353H6.28875V13.3853ZM4.96125 15.75C4.61625 15.75 4.32825 15.6345 4.09725 15.4035C3.86625 15.1725 3.7505 14.8843 3.75 14.5388V3.46125C3.75 3.11625 3.86575 2.82825 4.09725 2.59725C4.32875 2.36625 4.617 2.2505 4.962 2.25H10.875L14.25 5.625V14.5388C14.25 14.8838 14.1345 15.172 13.9035 15.4035C13.6725 15.635 13.384 15.7505 13.038 15.75H4.96125ZM10.5 6V3H4.962C4.8465 3 4.7405 3.048 4.644 3.144C4.5475 3.24 4.4995 3.34575 4.5 3.46125V14.5388C4.5 14.6538 4.548 14.7595 4.644 14.856C4.74 14.9525 4.84575 15.0005 4.96125 15H13.0388C13.1538 15 13.2595 14.952 13.356 14.856C13.4525 14.76 13.5005 14.654 13.5 14.538V6H10.5Z" fill="#4A5568"/>
                                  </svg>
                                20 Halaman
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content"  data-target="content-video">
                              <label for="pengantar-java" class="modul-label">Menggabungkan semua konsep yang telah dipelajari
                            </label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.31201C6.75011 6.24475 6.76831 6.17876 6.8027 6.12095C6.83708 6.06313 6.88638 6.01564 6.94543 5.98343C7.00448 5.95122 7.07111 5.93548 7.13833 5.93787C7.20555 5.94026 7.27089 5.96069 7.3275 5.99701L11.5095 8.68426C11.5625 8.71819 11.606 8.76489 11.6362 8.82007C11.6664 8.87524 11.6822 8.93712 11.6822 9.00001C11.6822 9.0629 11.6664 9.12478 11.6362 9.17996C11.606 9.23514 11.5625 9.28184 11.5095 9.31576L7.3275 12.0038C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0496 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6888V11.688Z" fill="#4A5568"/>
                                  </svg>
                                23 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-kuis">
                              <label for="pengantar-java" class="modul-label">Kuis 4</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" fill="none">
                                    <path d="M2.625 4.0625H4.875M2.625 8H9.375M2.625 10.25H9.375M2.625 12.5H4.875M1.5 15.3125H10.5C10.7984 15.3125 11.0845 15.194 11.2955 14.983C11.5065 14.772 11.625 14.4859 11.625 14.1875V1.8125C11.625 1.51413 11.5065 1.22798 11.2955 1.017C11.0845 0.806026 10.7984 0.6875 10.5 0.6875H1.5C1.20163 0.6875 0.915483 0.806026 0.704505 1.017C0.493526 1.22798 0.375 1.51413 0.375 1.8125V14.1875C0.375 14.4859 0.493526 14.772 0.704505 14.983C0.915483 15.194 1.20163 15.3125 1.5 15.3125Z" stroke="#4A5568" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.375 4.34375C9.53033 4.34375 9.65625 4.21783 9.65625 4.0625C9.65625 3.90717 9.53033 3.78125 9.375 3.78125C9.21967 3.78125 9.09375 3.90717 9.09375 4.0625C9.09375 4.21783 9.21967 4.34375 9.375 4.34375Z" stroke="#4A5568" stroke-width="0.7"/>
                                  </svg>
                                12 Soal
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content"  data-target="content-video2">
                              <label for="pengantar-java" class="modul-label">Debugging aplikasi</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M0 3.5625C0 2.838 0.588 2.25 1.3125 2.25H16.6875C17.412 2.25 18 2.838 18 3.5625V14.4375C18 14.7856 17.8617 15.1194 17.6156 15.3656C17.3694 15.6117 17.0356 15.75 16.6875 15.75H1.3125C0.964403 15.75 0.630564 15.6117 0.384422 15.3656C0.138281 15.1194 0 14.7856 0 14.4375L0 3.5625ZM1.3125 3.375C1.26277 3.375 1.21508 3.39475 1.17992 3.42992C1.14475 3.46508 1.125 3.51277 1.125 3.5625V14.4375C1.125 14.541 1.209 14.625 1.3125 14.625H16.6875C16.7372 14.625 16.7849 14.6052 16.8201 14.5701C16.8552 14.5349 16.875 14.4872 16.875 14.4375V3.5625C16.875 3.51277 16.8552 3.46508 16.8201 3.42992C16.7849 3.39475 16.7372 3.375 16.6875 3.375H1.3125Z" fill="#4A5568"/>
                                    <path d="M6.75 11.688V6.31201C6.75011 6.24475 6.76831 6.17875 6.8027 6.12094C6.83708 6.06313 6.88638 6.01563 6.94543 5.98342C7.00448 5.95121 7.07111 5.93548 7.13833 5.93787C7.20555 5.94026 7.27089 5.96069 7.3275 5.99701L11.5095 8.68426C11.5625 8.71819 11.606 8.76489 11.6362 8.82006C11.6664 8.87524 11.6822 8.93712 11.6822 9.00001C11.6822 9.0629 11.6664 9.12478 11.6362 9.17996C11.606 9.23513 11.5625 9.28183 11.5095 9.31576L7.3275 12.0038C7.27089 12.0401 7.20555 12.0605 7.13833 12.0629C7.07111 12.0653 7.00448 12.0496 6.94543 12.0173C6.88638 11.9851 6.83708 11.9376 6.8027 11.8798C6.76831 11.822 6.75011 11.756 6.75 11.6888V11.688Z" fill="#4A5568"/>
                                  </svg>
                                14 Menit
                              </span>
                            </div>
                        </li>
                        <li class="modul-item">
                            <input type="checkbox" id="pengantar-java" class="form-check-input" />
                            <div class="modul-content" data-target="content-kuis">
                              <label for="pengantar-java" class="modul-label">Ujian</label>
                              <span class="modul-detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" fill="none">
                                    <path d="M2.625 4.0625H4.875M2.625 8H9.375M2.625 10.25H9.375M2.625 12.5H4.875M1.5 15.3125H10.5C10.7984 15.3125 11.0845 15.194 11.2955 14.983C11.5065 14.772 11.625 14.4859 11.625 14.1875V1.8125C11.625 1.51413 11.5065 1.22798 11.2955 1.017C11.0845 0.806026 10.7984 0.6875 10.5 0.6875H1.5C1.20163 0.6875 0.915483 0.806026 0.704505 1.017C0.493526 1.22798 0.375 1.51413 0.375 1.8125V14.1875C0.375 14.4859 0.493526 14.772 0.704505 14.983C0.915483 15.194 1.20163 15.3125 1.5 15.3125Z" stroke="#4A5568" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.375 4.34375C9.53033 4.34375 9.65625 4.21783 9.65625 4.0625C9.65625 3.90717 9.53033 3.78125 9.375 3.78125C9.21967 3.78125 9.09375 3.90717 9.09375 4.0625C9.09375 4.21783 9.21967 4.34375 9.375 4.34375Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.7"/>
                                  </svg>
                                15 Soal
                              </span>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        @php
            $showContent = request('show', 'content-video'); // Default ke content-video jika tidak ada query parameter
        @endphp
        <!-- Main Content -->
        <div class="col-md-9 main-content">
            <div id="content-video" class="content {{ $showContent === 'content-video' ? '' : 'd-none' }}">
              @include('layout-kursus.content-video')
            </div>
            <div id="content-video2" class="content {{ $showContent === 'content-video2' ? '' : 'd-none' }}">
                @include('layout-kursus.content-video2')
            </div>


            <div id="content-materippt" class="content {{ $showContent === 'content-materippt' ? '' : 'd-none' }}">
              @include('layout-kursus.content-materippt')
            </div>

            <div id="content-materippt2" class="content {{ $showContent === 'content-materippt2' ? '' : 'd-none' }}">
                @include('layout-kursus.content-materippt2')
            </div>

            <div id="content-materippt3" class="content {{ $showContent === 'content-materippt3' ? '' : 'd-none' }}">
                @include('layout-kursus.content-materippt3')
            </div>

            <div id="content-tugas" class="content {{ $showContent === 'content-tugas' ? '' : 'd-none' }}">
              @include('layout-kursus.content-tugas')
            </div>

            <div id="content-kuis" class="content {{ $showContent === 'content-kuis' ? '' : 'd-none' }}">
              @include('layout-kursus.content-kuis')
            </div>
        </div>

    </div>
</div>

<style>


.row {
    display: flex; /* Membuat row sebagai flexbox */
}

.sidebar {
    overflow-y: auto; /* Scroll jika konten lebih panjang dari tinggi kontainer */
    max-height: 100%; /* Sesuaikan tinggi dengan induk */
    height: 265vh;
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 3px 4px 10px 0px rgba(0, 0, 0, 0.25);
}
.sidebar h5{
    font-size: 20px;
    font-weight: 600;
    color: var(--Neutral-400, #2D3748);
    margin-top: 30px;
    margin-bottom: 50px;

}
.d-none {
  display: none;
}


.main-content {
    padding: 10px;
    margin-top: -30px;
    height: auto;
    min-height: 100vh; /* Tambahkan jika ingin minimal memenuhi layar */
}

.nav-tabs .nav-link {
    color: #6c757d; /* Warna teks default */
    font-weight: 500; /* Berat font */
    margin-right: 40px; /* Jarak antar tombol */
}

.nav-tabs .nav-link.active {
    color: #0d6efd; /* Warna teks aktif (biru) */
    font-weight: 600; /* Teks aktif dibuat tebal */
    border-bottom: 1px solid #0d6efd; /* Garis bawah biru */
    background-color: transparent; /* Hilangkan background putih */
}

.nav-tabs {
    border-bottom: none; /* Menghapus garis bawah default */
}
.custom-accordion .accordion-button {
  font-weight: 600;
  font-size: 18px;
  color: #2D3748;
  background-color: transparent;
  box-shadow: none;
  padding: 0px;

}
.custom-accordion {
    margin-bottom: 30px;
}
.accordion-header .accordion-button {
    font-size: 16px; /* Ukuran font 16px */
    font-weight: 600; /* Tebal font semibold */
    color: #2D3748; /* Warna teks opsional */
}

.custom-accordion .accordion-button:focus {
  box-shadow: none;
}

.custom-accordion .accordion-item {
border: none; /* Menghapus border */
border-radius: 8px;
margin-bottom: 10px;
}

.accordion-button::after {
    border-width: 5px; /* Menebalkan panah */

}
.accordion-body {
  padding: 10px; /* Mengatur padding menjadi 0 */
}


/*
sidebar */
.modul-item {
    display: flex;
    min-height: 80px;   /* Atur tinggi minimal agar seragam */
    box-sizing: border-box; /* Memastikan padding tidak mempengaruhi ukuran */
    gap: 10px;
    margin-bottom: 10px;
}

.form-check-input {
    margin-left: 20px; /* Menghapus margin default dari checkbox */
    margin-top: 20px;
}
.modul-item.active {
    background-color: #E6F0FF;
    border-left: 5px solid #003D94;
}

.modul-content {
    flex: 1; /* Konten mengisi ruang yang tersedia */
    display: flex;
    flex-direction: column;
    margin-top: 10px;
}
.form-check-input {
  margin-right: 10px; /* Beri jarak antara checkbox dan konten */
  border: 1.5px solid #000000; /* Ubah border menjadi warna hitam */

}
.modul-label {
    font-weight: 500;
    margin-bottom: 5px;
    font-size: 12px;
    width: 210px !important;
}
.modul-detail {
    font-size: 12px;
    color: #6c757d; /* Bootstrap's muted color */
    display: flex;
    align-items: center;
    gap: 5px;
}
.modul-detail svg {
    width: 16px;
    height: 16px;
}
.d-none {
    display: none;
}
.content-section {
    display: none;
}
.content-section.active {
    display: block;
}



</style>
<script>
// Event Listeners for Dropdown Changes
document.getElementById('materiFilter').addEventListener('change', filterCards);
document.getElementById('waktuFilter').addEventListener('change', filterCards);

function filterCards() {
    // Get filter values
    const selectedMateri = document.getElementById('materiFilter').value;
    const selectedWaktu = document.getElementById('waktuFilter').value;

    // Get all cards
    const cards = document.querySelectorAll('#card-container .card');

    cards.forEach(card => {
        // Get data attributes
        const materi = card.getAttribute('data-materi');
        const waktu = card.getAttribute('data-waktu');

        // Determine if card should be shown
        const materiMatch = selectedMateri === 'semua' || materi === selectedMateri;
        const waktuMatch = selectedWaktu === 'terbaru' || waktu === selectedWaktu;

        // Show/Hide card
        if (materiMatch && waktuMatch) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

document.querySelectorAll('input[name="materi"]').forEach((input) => {
    input.addEventListener('change', function () {
        // Sembunyikan semua konten
        document.querySelectorAll('.content-section').forEach((section) => {
            section.classList.remove('active');
        });

        // Tampilkan konten yang sesuai dengan pilihan
        const targetId = this.getAttribute('data-target');
        const targetContent = document.getElementById(targetId);
        if (targetContent) {
            targetContent.classList.add('active');
        }
    });
});


document.querySelectorAll('.modul-content').forEach((item) => {
  item.addEventListener('click', function () {
    // Sembunyikan semua konten di main-content
    document.querySelectorAll('.main-content .content').forEach((content) => {
      content.classList.add('d-none');
    });

    // Tampilkan konten yang sesuai dengan data-target
    const targetId = this.getAttribute('data-target');
    const targetContent = document.getElementById(targetId);
    if (targetContent) {
      targetContent.classList.remove('d-none');
    }
  });
});


document.querySelectorAll('.modul-item').forEach(item => {
  item.addEventListener('click', function (e) {
    const checkbox = this.querySelector('input[type="checkbox"]');

    // Jika klik terjadi pada checkbox, jangan hapus atau tambahkan kelas 'active'
    if (e.target === checkbox) {
      checkbox.checked = !checkbox.checked; // Tetap ubah status checkbox
      return;
    }

    // Jika klik terjadi pada modul-item, ubah status active
    document.querySelectorAll('.modul-item').forEach(el => {
      el.classList.remove('active');
    });
    this.classList.add('active');
  });
});

document.querySelectorAll('.modul-item input[type="checkbox"]').forEach(checkbox => {
  checkbox.addEventListener('click', function (e) {
    e.stopPropagation(); // Hindari event checkbox mempengaruhi elemen parent
    // Tidak perlu mengubah status active di sini, biarkan tetap seperti semula
  });
});


document.addEventListener("DOMContentLoaded", function () {
    // Tetapkan modul-item aktif secara default
    const defaultModulItem = document.querySelector(".modul-item[data-target='content-video']");
    const defaultContent = document.getElementById("content-video");

    if (defaultModulItem && defaultContent) {
        // Tambahkan class active ke modul-item
        defaultModulItem.classList.add("active");

        // Tampilkan konten default
        defaultContent.classList.remove("d-none");
    }

    // Tambahkan interaksi klik untuk setiap modul-item
    document.querySelectorAll(".modul-item .modul-content").forEach((item) => {
        item.addEventListener("click", function () {
            // Hapus semua active dari modul-item
            document.querySelectorAll(".modul-item").forEach((modul) => {
                modul.classList.remove("active");
            });

            // Tambahkan class active ke modul-item yang diklik
            const parentItem = this.closest(".modul-item");
            if (parentItem) parentItem.classList.add("active");

            // Sembunyikan semua konten
            document.querySelectorAll(".main-content .content").forEach((content) => {
                content.classList.add("d-none");
            });

            // Tampilkan konten yang sesuai
            const targetId = this.getAttribute("data-target");
            const targetContent = document.getElementById(targetId);
            if (targetContent) targetContent.classList.remove("d-none");
        });
    });
});

// Ambil semua checkbox
const checkboxes = document.querySelectorAll('.modul-progress');

// Ambil elemen progress bar
const progressBar = document.getElementById('progressBar');

// Fungsi untuk menghitung progres
function updateProgress() {
    const total = checkboxes.length; // Total materi
    const checked = document.querySelectorAll('.modul-progress:checked').length; // Materi yang sudah selesai
    const progress = (checked / total) * 100; // Hitung progres dalam persen

    // Update progress bar
    progressBar.style.width = `${progress}%`;
    progressBar.setAttribute('aria-valuenow', progress.toFixed(0));
}

// Tambahkan event listener ke setiap checkbox
checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', updateProgress);
});

// Jalankan fungsi saat halaman dimuat untuk memastikan progress sesuai dengan status awal
updateProgress();









</script>
@endsection
