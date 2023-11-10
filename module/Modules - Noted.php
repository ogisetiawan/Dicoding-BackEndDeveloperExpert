<?php
/*
 * @Author: ogi.setiawan 
 * @Date: 2023-11-01 09:44:31 
 * @Last Modified by: ogi.setiawan
 * @Last Modified time: 2023-11-10 23:54:33
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


//~  
//~ Menulis Skenario Test 
//? describe digunakan untuk mengelompokkan serangkaian pengujian yang berkaitan atau serupa. Ini membantu dalam mengorganisasi dan mengelompokkan pengujian yang berhubungan.
//? it digunakan untuk mendefinisikan pengujian individu. Ia menjelaskan satu spesifikasi atau perilaku yang diharapkan dari kode yang sedang diuji.