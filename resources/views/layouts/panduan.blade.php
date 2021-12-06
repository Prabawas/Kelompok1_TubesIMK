@extends('layouts/main')

@section('content')
         
        <div class="content">
                <div class="judul">
                        <br><br>
                        <h1>Panduan Pemakaian Web Rekap Data</h1>
                        <hr>
                </div>
                <div class="login">
                        <br><br>
                        <h3>Cara Login Petugas dan Pemilik</h3>
                        <p>Untuk para petugas atau pun pemilik yang ingin login kedalam web
                                bisa menggunakan akun yang sudah dibuat sebelumnya. 
                           Berikut tata cara login :
                           <ol>
                                   <li>Masuk ke halaman login dengan klik button profil, lalu klik login pada navbar <br><img src="{{ asset('guest/img/panduan/login-1.png')}}" alt="" width="600px" height="400px"></li>
                                   <li>Setelah masuk ke halaman Login. Scroll kebawah lalu masukkan email dan password dengan benar. <img src="{{ asset('guest/img/panduan/login-2.png')}}" alt="" width="700px" height="400px"></li>
                                   <li>Jika email dan password benar maka anda bisa masuk ke halaman selanjutnya, jika gagal anda bisa input ulang <img src="{{ asset('guest/img/panduan/login-3.png')}}" alt="" width="700px" height="400px"></li>
                                   <li>Jika anda lupa dengan password. Bisa klik lupa password</li>
                           </ol>     
                        </p>
                </div>

                <div class="rekap-pasien">
                        <br><br>
                        <h3>Cara Rekap Pasien</h3>
                        <p>
                                <strong>Note</strong> Untuk rekap data pasien hanya bisa dilakukan jika anda sudah melakukakan login. 
                                Jika sudah login maka anda sudah bisa akses button pelayanan untuk rekap data pasien. Dan untuk semua data 
                                pasien pada button data pasien.
                                <br><br>
                                Beberapa penjelasan tentang rekap data pasien :
                                <ol>
                                        <li><strong>EDIT</strong> pasien bisa pada halaman data pasien. Lalu <strong>SEARCH</strong> pada kolom searc
                                        nama pasien lalu klik button pensil yang tertera disebelah nama pasien yang anda inginkan. <img src="{{ asset('guest/img/panduan/pasien-1.png')}}" alt="" width="750px" height="400px"> <br> <hr> <img src="{{ asset('guest/img/panduan/pasien-4.png')}}" alt="" width="750px" height="400px"> </li>
                                        <li><strong>PRINT</strong> Untuk fitur print anda bisa masuk ke halaman <strong>data-pasien</strong> lalu cari nam pasien yang anda cari 
                                                lalu klik button mata yang ada di sebelah kanan nama pasien.Anda akan diarahkan ke halaman detail pasien. <br><img src="{{ asset('guest/img/panduan/pasien-2.png')}}" alt="" width="750px" height="400px"> <br> <hr> <img src="{{ asset('guest/img/panduan/pasien-5.png')}}" alt="" width="750px" height="400px"></li>
                                        <li><strong>DELETE</strong> Untuk fitur ini dilakukan ketika ada nama pasien yang ingin di hapus. Caranya bisa ke halaman data-pasien -> 
                                        cari nama pasien -> klik buttondengan tanda sampah maka ada alert akan muncul. <br><img src="{{ asset('guest/img/panduan/pasien-3.png')}}" alt="" width="750px" height="400px"><br></li>
                                </ol>
                        </p>
                </div>

                <div class="petugas">
                        <br><br>
                        <h3>Pengaturan Profil</h3>
                        <p>Pada pengaturan profil ini hanya bisa dilakukan oleh Admin/petugas klinik saja. Untuk petugas hanya bisa melakukan cek pada menu profil.</p>
                        <p>Pada Admin/Pemilik Klinik bisa mengedit profil sendiri dan juga edit para petugas nya yang bekerja pada kliniknya.</p>
                </div>

                <div class="register-petugas">
                        <br><br>
                        <h3>Registrasi Petugas Oleh Admin</h3>
                        <p>
                                Ketika suatu saat ada penambahan jumlah petugas atau pengurangan jumlah petugas.Yang berhak untuk melakukan sistem ini adalah Pemilik Klinik
                                Hanya Pemilik klinik lah yang berwenang untuk bisa mengubah, mengedit, dan menghapus para petugasnya.

                                <br>
                                <br>
                                <h5>Cara menambahkan Petugas : </h5>
                                <ol>
                                        <li>Yang pertama yaitu <strong>LOGIN</strong> sebagai pemilik klinik <br><img src="{{ asset('guest/img/panduan/petugas-1.png')}}" alt="" width="750px" height="400px"></li>
                                        <li>Lalu Klik Profil yang ada di kiri atas, klik pada menu register.Maka pemilik Klinik akan diarahkan ke halaman register petugas <br><img src="{{ asset('guest/img/panduan/petugas-2.png')}}" alt="" width="750px" height="400px"></li>
                                        <li>selanjutnya Pemilik Klinik sudah bisa menambahkan petugas klinik nya dengan memasukkan data-data yang di perlukan <br><img src="{{ asset('guest/img/panduan/petugas-3.png')}}" alt="" width="400px" height="800px"></li>
                                </ol>
                        </p>
                </div>
        </div>

@endsection