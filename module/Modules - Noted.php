<?php
/*
 * @Author: ogi.setiawan 
 * @Date: 2023-11-01 09:44:31 
 * @Last Modified by: ogi.setiawan
 * @Last Modified time: 2023-12-01 22:38:04
 */
//fastcgi_pass 127.0.0.1:90 00; # Pastikan PHP-FPM berjalan di port 9000


//@ Automation Testing
//? unit testing: Unit yang diuji dapat berupa fungsi, objek, ataupun sebuah modul. 
//? intergration test: pengujian tidak terfokus pada satu unit yang diuji saja, melainkan banyak unit yang terlibat dalam membentuk sebuah fitur.
//? functional test (E2E): merupakan pengujian yang dilakukan untuk memastikan aplikasi berjalan dengan baik dari hulu ke hilir (postman)
//~ Framework Automation Testing
//? Jest; framework javascript
//~ Alur Test Driven Development (TDD)
//? Membuat code test
//? Menjalankan test dengan hasil yang gagal
//? Menulis kode apa adanya untuk membuat tes menjadi lulus
//? Menjalankan test dengan hasil yang lulus
//? Refactor kode sebelumnya dan pastikan pengujian tetap lulus (Memecah kode menjadi fungsi-fungsi kecil/Mengoptimasi logika yang dituliskan)
//? Ulangi
//~ Menulis Skenario Test
//? Tulis skenario test dari hasil Requirement Analysis, client adalah domain expert ( paling tahu ) 
//? Dari diskusi tersebut biasanya menghasilkan sebuah acceptance scenario yang mendeskripsikan behavior dari fitur yang hendak dibangun
//? see format ( Acceptance Scenario dan Features Files) ditulis dengan bahasa Gherkin

//~ Menulis Skenario Test 
//? describe digunakan untuk mengelompokkan serangkaian pengujian yang berkaitan atau serupa. Ini membantu dalam mengorganisasi dan mengelompokkan pengujian yang berhubungan.
//? it digunakan untuk mendefinisikan pengujian individu. Ia menjelaskan satu spesifikasi atau perilaku yang diharapkan dari kode yang sedang diuji.

//@ Clean Architecture
//~ Design Pattern 
//? Creational Pattern : Berhubungan dengan penciptaan suatu objek (instantiation).
/// penulisan pada sebuah tujuan yg sama di buat minimalisir dengan class
//? Structural Pattern : Berhubungan dengan komposisi suatu objek (relationships).
//? Behavioral Pattern : Berhubungan dengan komunikasi antar objek (communications).
//~ Struktur Proyek (Domain Driver Design)
//? Domains; Merupakan Enterprise Business Layer, di dalam folder ini terdapat model domain (entities) dan abstract/interface repository
//? Applications; terdapat alur bisnis yang kita definisikan dalam bentuk use case ( services, helper, tools)
//? Interface; Merupakan adapter atau jembatan penghubung antara use case dengan agen eksternal, seperti HTTP server ( hapi plugin)
//? Infrastructures; Merupakan letak agen eksternal seperti framework, HTTP Server, Database, JWT Token, Bcrypt dan sebagainya
//? Commons; shared folder yang berisi class, function, atau apa pun yang boleh digunakan oleh ke-empat folder tersebut
//~ Custom Error
//? ClientError; Custom error yang mengindikasikan eror karena masalah yang terjadi pada client
//? InvariantError; Custom error yang mengindikasikan eror karena kesalahan bisnis logic pada data yang dikirimkan oleh client. Kesalahan validasi data merupakan salah satu InvariantError
//? AuthenticationError; Custom error yang mengindikasikan eror karena masalah autentikasi. Contohnya password yang diberikan salah dan refresh token yang diberikan tidak valid.
//? NotFoundError; Custom error yang mengindikasikan eror karena resource yang diminta client tidak ditemukan

//@ CI / CD
//? CI (Continuous Integration); proses terintegrasinya sebuah aksi ketika developer mengirim (push) kode barunya ataupun melakukan pull request (PR) e branch utama pada repository 
//? CD (Continuous Deployment). proses deployment aplikasi secara otomatis yang hanya akan dijalankan bila pengujian aplikasi berstatus passed
//? Tools; travis CI, Jenkins, GitHub Action

//@ Security
//~ SQL Injection
//? SQL Injection; merupakan serangan yang dilakukan melalui inputan atau payload dalam memanipulasi SQL
/// SQL injection dalam bypass otentikasi
//? menambahkan " or " pada user dan password
//? SELECT * FROM users WHERE username = "" or ""="" AND password = "" or ""="" LIMIT 1;
/// SQL injection Pencurian dan manipulasi
//? menambahkan perintah query lainya dengan ditutup ;
//? SELECT * FROM product WHERE category = "food; SELECT username, password FROM users; --
/// Mencegah SQL Injection
//? validasi input atau payload yang dikirimkan user sebelum diproses ke database
//? Parameterized Statements dan Object Relational Mapping (ORM) 
/// Parameterized Query
//? merupakan teknik yang dapat mencegah terjadinya SQL injections. Karena melalui teknik tersebut, parameter atau variabel yang dilibatkan dalam membangun SQL akan diperlakukan secara aman
//#   const sql = {
//#     text: 'SELECT * from users WHERE username = $1 AND password = $2',
//#     values: [username, password],
//#   };
/// Object Relational Mapping (ORM)
//? menerjemahkan SQL dalam bentuk object dan cepat
//~ Browser Security (CORS)
//? kebijakan suatu website yang hanya dapat diakses dengan origin yang sama (protocol,host dan port)
//? agar website tidak berinteraksi secara ilegal terhadap resource yang bukan haknya.
//? contoh untuk web transaksi agar tdk di post ke origin lain (cross-origin)
/// CORS dari Sisi Client
//? response yang mengandung header Access-Control-Allow-Origin dengan nilai origin yang sama
/// CORS dari Sisi Server
//? tambahkan properti Access-Control-Allow-Origin dengan nilai origin yang diijinkan pada response header.
//? jadi jika memang web membutuhkan origin yg sama, kita dapat set beberapa origin secara default.
//~ Serangan Denial-of-Service (DoS)
//? penyerang membanjiri aplikasi Anda dengan traffic jaringan yang masif sehingga membuatnya kewalahan dan tak lagi dapat merespons permintaan pengguna
/// Distributed Denial-of-Service (DDoS)
//? serangan DDoS menggunakan beberapa sumber untuk melakukan serangan, jika kita memblock ip pada DOS
/// Langkah Preventif terhadap Serangan DDoS
//? melimitasi request yang masuk atau request rate limit. Masing-masing client hanya dapat melakukan sejumlah request saja selama kurun waktu tertentu.
/// Reverse proxy server
//? sebagai perantara terhadap web server atau HTTP server lain.
//? Tak hanya security, ia juga bisa meningkatkan kinerja, memudahkan scaling dan mengatur traffic masuk pada aplika
//~  Man In The Middle
//? serangan menyadap, tak hanya memantau, serangan ini dapat mencegat dan mengubah pesan yang dikirim atau pesan yang diterima
/// IP spoofing atau ARP spoofing
//?  karena korban dan penyerang berada di dalam jaringan yang sama. Biasanya disebabkan oleh korban yang tidak hati-hati ketika menggunakan WiFi hotspot publik
