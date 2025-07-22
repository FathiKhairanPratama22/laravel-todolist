📝 Laravel ToDoList – Mini Project

![GitHub Repo stars](https://img.shields.io/github/stars/FathiKhairanPratama22/laravel-todolist?style=social)
![GitHub forks](https://img.shields.io/github/forks/FathiKhairanPratama22/laravel-todolist?style=social)

Ini adalah Mini Project Aplikasi ToDoList berbasis Laravel, dibuat untuk memenuhi Mini Project KSM Sahabat PNJ - Divisi Web Profesional.  
Aplikasi ini memungkinkan pengguna untuk membuat, mengedit, dan menghapus daftar tugas harian mereka dengan sistem autentikasi dan tampilan yang user-friendly.

👨‍💻 Developer

- Nama  : Fathi Khairan Pratama  
- NIM   : 2407412024  
- Kelas : TI2A - CCIT

🔧 Fitur Utama

- ✅ Registrasi & Login pengguna  
- ✅ Dashboard ToDo untuk pengguna terautentikasi  
- ✅ CRUD ToDo:
  - Tambah tugas
  - Edit tugas
  - Tandai tugas selesai/belum
  - Hapus tugas  
- ✅ Editor deskripsi menggunakan Trix Editor  
- ✅ Validasi data input  
- ✅ Pagination daftar tugas  


📁 Struktur Folder Penting

├── app/
├── resources/
│ └── views/
│ ├── layouts/
│ ├── login/
│ ├── register/
│ └── todo/
├── routes/
│ └── web.php
├── database/
│ └── migrations/
├── public/
└── .env.example


⚙️ Teknologi yang Digunakan

- Laravel 10+
- PHP 8+
- Bootstrap 5.3
- Trix Editor
- Git & GitHub

🚀 Cara Menjalankan Project Secara Lokal

```bash
git clone https://github.com/FathiKhairanPratama22/laravel-todolist.git
cd laravel-todolist
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
