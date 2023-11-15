<?php
/*
 * @Author: ogi.setiawan 
 * @Date: 2023-11-01 09:44:31 
 * @Last Modified by: ogi.setiawan
 * @Last Modified time: 2023-11-15 11:11:07
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