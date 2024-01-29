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

//@ Scalability
/// Pencegahan Kehilangan Data
//? Selalu lakukan backup untuk mencegah kehilangan data pada database
//? Jangan menyimpan hasil backup di lokasi yang sam
//? Agar backup dilakukan secara rutin, manfaatkanlah job scheduler seperti CRON.
/// Menganalisis Kegagalan
//?  menuliskan log pada berkas atau Anda bisa memanfaatkan stack ELK supaya sistem logging dan analisis lebih komprehensif.
/// Go Global
//? Untuk mengurangi latency, terapkan beberapa teknik caching seperti memanfaatkan Content Delivery Network dan Server-Side Caching.



//@ AWS EC2, IAM ROLE, SECURITY GROUP, RDS ETC
/// REGISTER
//? buat card debit jago, dan darftarkan nomor debit card ke aws ( tunggu 1 -3 hari ) dengan saldo mengendap min. 1 USD
/// IAM ROLE
//? buatkan role dan users IAM group, karena lebih baik tdk menggunakan root account aws ( https://www.dicoding.com/academies/261/tutorials/15555 )
/// SECURITY GROUP
//? buat Security Group firewall pada EC2 instance yang dapat mengontrol lalu lintas masuk (inbound) dan keluar (outbound) di Virtual Private Cloud (VPC) ( https://www.dicoding.com/academies/261/tutorials/35213?from=15555 )
/// RDS
//? buat cluster database https://www.dicoding.com/academies/276/tutorials/19042
/// CREATE DATABASE
//? https://www.dicoding.com/academies/276/tutorials/19047?from=19042
/// CONNECT TO EC2
//? DNS = Public IPv4 address, name is ubuntu/OSnya,  https://www.dicoding.com/academies/276/tutorials/19057?from=19052
//? install nodejs, github pull repo etc
//? create env dan masukan host == Endpoint RDS forumapi.cj2iygo8emmu.ap-southeast-......
//@ RDS
/// endpoint: forumapi.cj2iygo8emmu.ap-southeast-1.rds.amazonaws.com
/// username: postgress
/// password: supersecretpassword
//@ EC2
/// public DNS : ec2-47-128-235-95.ap-southeast-1.compute.amazonaws.com
/// public ip : http://47.128.235.95:5000/
/// dns : https://fresh-parents-mate-mysteriously.a276.dcdg.xyz/
/// ssh : ssh -i "forum-api-webserver.pem" ubuntu@47.128.235.95
//@ ACC
/// ogisetiawan21@gmail.com