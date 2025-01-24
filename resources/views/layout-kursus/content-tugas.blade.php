<div class="container my-4">
    <!-- Header -->
    <h3 class="custom-heading">Tugas 1: Membuat Sistem Manajemen Toko Sederhana</h3>

   <!-- Deskripsi -->
    <div class="deskripsi mb-4">
        <h5>Deskripsi</h5>
        <p>
            Buatlah sistem manajemen toko sederhana menggunakan konsep Object-Oriented Programming (OOP) yang mencakup:
        </p>
        <ul>
            <li>Kelas untuk merepresentasikan barang.</li>
            <li>Kelas untuk pengelola stok barang.</li>
            <li>Fitur untuk menambah barang, memperbarui stok, dan menampilkan daftar barang.</li>
        </ul>
    </div>
    <!-- Status Pengumpulan -->
    <div class="pengumpulan mb-4">
        <h5>Status pengumpulan</h5>
        <p>
            <strong class="label">Status pengumpulan</strong>
            <span class="status-text">Belum di kumpulkan</span>
        </p>
        <p>
            <strong class="label">Nilai</strong>
            <span class="status-text">Tidak ada nilai</span>
        </p>
        <p>
            <strong class="label">File</strong>
            <div class="upload">
                 <!-- Add File Button -->
                 <button class="btn btn-outline-secondary upload-btn" onclick="document.getElementById('fileInput').click();">
                    <i class="bi bi-upload upload-icon"></i>
                    Add file
                </button>
                <div class="upload-section mb-4" id="file-upload" onclick="document.getElementById('fileInput').click();">
                    <i class="bi bi-upload"></i>
                    <p>Drag and drop file</p>
                    <input type="file" class="d-none" id="fileInput">
                </div>
            </div>
        </p>
    </div>
</div>
<style>
.upload-section {
    border: 2px dashed #ccc;
    border-radius: 10px;
    padding: 40px;
    text-align: center;
    color: #666;
    background-color: #fff;
    cursor: pointer;
    width: 600px;
    height: 150px; /* Tinggi elemen */
    margin-left: 240px;
}
.upload-section:hover {
    border-color: #007bff;
    color: #007bff;
}
.upload-btn {
    border: none;
    font-size: 14px;
    font-weight: 400;
    margin-left: 230px;
}
.upload {
    margin-top: -50px; /* Menggeser elemen ke atas */
}
.upload-btn:hover,
.upload-btn:focus {
    background-color: transparent; /* Warna latar tetap sama */
    border-color: #CBD5E0; /* Warna border tetap */
    color: #2D3748; /* Warna teks tetap sama */
}
.custom-heading {
    font-size: 24px;
    font-weight: 600;
    color: var(--Neutral-400, #2D3748);
    margin-bottom: 22px;
}

.deskripsi h5 {
    font-size: 16px;
    font-weight: 600;
    color: var(--Neutral-400, #2D3748);
}

.deskripsi p {
    font-size: 14px;
    font-weight: 400;
    color: var(--Neutral-400, #2D3748);
}
.deskripsi ul {
    font-size: 14px;
    font-weight: 400;
    color: var(--Neutral-400, #2D3748);
}
.pengumpulan {
    margin-top: 60px;
}
.pengumpulan h5{
    font-size: 20px;
    font-weight: 600;
    color: var(--Neutral-400, #2D3748);
    margin-bottom: 50px;
}
.pengumpulan p {
    font-size: 16px;
    font-weight: 400;
    color: #4A5568;
    margin-bottom: 30px;
}

.pengumpulan p strong {
    font-weight: 600;
    color: #2D3748;
}

/* File Upload Section */


.upload-section i {
    font-size: 24px;
    color: #718096;
}

.upload-section p {
    font-size: 14px;
    margin-top: 10px;
}

/* Button */
.btn-primary {
    background-color: #2D3748;
    border: none;
    font-size: 14px;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #1A202C;
}
.status-text {
    margin-left: 60px; /* Tambahkan jarak antara teks dan konten */
    color: #2D3748;
    font-size: 12px;
    font-weight: 300;
}
.label {
    display: inline-block;
    width: 178px; /* Sesuaikan dengan ukuran yang diinspeksi */
    font-weight: 600;
    color: #2D3748; /* Warna teks */
}

</style>
