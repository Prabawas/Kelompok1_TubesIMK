<div class="container mt-3">
    <h3 align="text-center">Klinik Ora Et Labora</h3>
    <p align="text-center"> Petugas {{ $pasien->user->nama}}</p>
    <p align="text-center"> Tanggal {{ $pasien->created_at}}</p>
    <p align="text-center"> {{ $pasien->created_at->diffForHumans()}}</p>
</div>

<form>
  <fieldset>
  <legend>Riwayat Pasien</legend>
  <table>
   <tr>
     <td><h5>Nama Lengkap</h5></td>
     <td> : </td>
     <td> {{$pasien->nama}}</td>
   </tr>
   <tr>
     <td><h5>Tanggal Lahir</h5></td>
     <td> : </td>
     <td> {{$pasien->tgl_lahir}} </td>
   </tr>
   <tr>
     <td><h5>Umur</h5></td>
     <td> : </td>
     <td> {{$pasien->umur}} </td>
   </tr>
   <tr>
     <td><h5>Jenis Kelamin</h5></td>
     <td> : </td>
     <td> {{$pasien->jenisKelamin}} </td>
   </tr>
   <tr>
     <td><h5>Telepon</h5></td>
     <td> : </td>
     <td> {{$pasien->telepon}} </td>
   </tr>
   <tr>
     <td><h5>Alamat</h5></td>
     <td> : </td>
     <td> {{$pasien->alamat}} </td>
   </tr>
   <tr>
     <td><h5>Riwayat Penyakit</h5></td>
     <td> : </td>
     <td> {{$pasien->riwayat}} </td>
   </tr>
   <tr>
     <td><h5>Gejala yang dialami</h5></td>
     <td> : </td>
     <td> {{$pasien->gejala}} </td>
   </tr>
  </table>
</fieldset>
</form>

