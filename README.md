Praktikum 1–3: Fondasi & Environment
Proses ini difokuskan pada penyiapan ekosistem pengembangan agar aplikasi berjalan dengan standar CI4.

Instalasi: Menggunakan Composer sebagai dependency manager untuk mengunduh library inti CI4.

Konfigurasi: Melakukan environment mapping pada file .env untuk mengatur koneksi database dan mode debugging.

Struktur: Memahami alur kerja direktori; memisahkan file publik (assets) di public/ dan logika inti aplikasi di app/ untuk menjaga keamanan sistem.

Server: Menggunakan Spark CLI untuk menjalankan server internal, yang mempercepat pengujian tanpa perlu konfigurasi web server (Apache/Nginx) yang kompleks di awal.

Praktikum 4: Arsitektur MVC
Proses ini adalah implementasi alur logika sistem berbasis Model-View-Controller (MVC).

Routing: Mendefinisikan endpoint URL pada Routes.php yang berfungsi sebagai pintu masuk (entry point) setiap permintaan pengguna.

Controller: Membangun controller untuk memproses logika bisnis; menerima data dari request dan memutuskan view mana yang harus dimuat.

Views: Menyusun antarmuka menggunakan HTML/CSS dan Vue.js untuk memberikan pengalaman pengguna yang reaktif, dengan struktur layout yang modular agar mudah dikelola dan dikembangkan kembali.
