Task Management System


Deskripsi singkat aplikasi
Fitur utama:
1. Autentikasi pengguna (Login & Register) menggunakan JWT
2. CRUD task (Create, Read, Update, Delete)
3. Filter dan sorting task berdasarkan status dan deadline
4. Frontend responsif dengan Bootstrap
5. Keamanan: user hanya dapat mengakses task milik mereka sendiri


Langkah menjalankan sistem (Laravel)
1. Clone repository
git clone https://github.com/khoirulanam5/task_management.git

2. Install dependencies
composer install

3. Copy file environment
cp .env.example .env

4. Generate key
php artisan key:generate
php artisan jwt:secret

5. Migrasi database
php artisan migrate

6. Jalankan serve
php artisan serve


Teknologi yang digunakan
Backend: Laravel 12
Frontend: Bootstrap
Database: MySQL
Authentikasi: JWT (JSON Web Token)
ORM: Eloquent


Informasi login dummy
Nama: Khoirul Anam
Username: anam
Email: anam@gmail.com
Password: anam


Struktur Tabel
Tabel users
| Field    | Tipe    | Keterangan        |
| -------- | ------- | ----------------- |
| user_id  | int     | Primary key       |
| name     | varchar | Nama pengguna     |
| username | varchar | Username          |
| email    | varchar | Email             |
| password | varchar | Password (hashed) |

Tabel Tasks
| Field       | Tipe    | Keterangan                 |
| ----------- | ------- | -------------------------- |
| task_id     | int     | Primary key                |
| user_id     | int     | Foreign key ke users       |
| title       | varchar | Judul task                 |
| description | text    | Deskripsi task             |
| status      | enum    | To Do / In Progress / Done |
| deadline    | date    | Tanggal selesai task       |
| created_by  | varchar | Nama pembuat task          |


Screenshot tampilan utama
screenshots/login.JPG - Halaman Login
screenshots/dashboard.JPG - Halaman Dashboard
screenshots/task_index.JPG - Menu task
screenshots/task_create.JPG - Form create task
screenshots/task_edit.JPG - Form edit task

