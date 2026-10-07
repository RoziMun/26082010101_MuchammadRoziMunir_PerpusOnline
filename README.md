# 📚 Web Sederhana Perpustakaan Online

Project website perpustakaan sederhana yang dibangun menggunakan bahasa pemrograman PHP dan basis data MySQL.

---

## 🚀 Fitur & Ketentuan Website
* **Koneksi Database:** PHP terhubung secara dinamis ke database MySQL.
* **Query Dinamis:** Menggunakan query `SELECT` dengan perintah `JOIN` untuk menggabungkan data dari 3 tabel.
* **Fungsi PHP:** Menggunakan perulangan `while` dan `fetch_assoc()` untuk menampilkan data hasil query ke dalam tabel HTML.
* **Desain Visual:** Dilengkapi dengan 1 warna brand yang konsisten, struktur card dengan padding/border/shadow, serta tata letak menggunakan Flexbox dan Grid yang responsif untuk Desktop maupun Mobile.

---

## 📂 Struktur Project
```text
nama-project/
│
├── services/
│   └── config.php         # Menyimpan konfigurasi dan koneksi database
│
├── database/
│   └── schema.sql         # Berisi struktur database dan tabel yang dibuat
│
├── index.php              # Halaman utama untuk mengambil dan menampilkan data dari database
├── style.css              # Mengatur tampilan halaman PHP[cite: 1]
└── README.md              # Dokumentasi project[cite: 1]