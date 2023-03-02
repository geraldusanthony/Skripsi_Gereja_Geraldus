<!DOCTYPE html>
<html>
<head>
<title>Gereja Santa Maria Assumpta Gamping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="asset/images/logo2.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body class="w3-light-grey">

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:200px;margin-top:43px;margin-right:200px">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Edit Data Umat</b></h2>
    <div class="modal-body">
        <form action="{{route('editumat',['id'=>$umat->id])}}" method="GET">
          {{csrf_field()}}
          <div class="form-group">
              <label for="exampleInputEmail1">Nama Umat</label>
              <input name="nama_umat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$umat->nama_umat}}">  
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Warga Negara : </label>
                 <select class="selectpicker form-control" name="warga">
                 <option>Pilih Warga Negara</option>
                 <option>WNI</option>
                 <option>WNA</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Negara : </label>
                 <select class="selectpicker form-control" name="negara">
                 <option>Pilih Negara</option>
                 <option>Indonesia</option>
                 <option>Afganistan</option>
                 <option>Albania</option>
                 <option>Aljazir</option>
                  <option>Amerika Serikat</option>
                  <option>Andorra</option>
                  <option>Angola</option>
                  <option>Arab Saudi</option>
                  <option>Argentina</option>
                  <option>Australia</option>
                  <option>Austria</option>
                  <option>Belanda</option>
                  <option>Belgia</option>
                  <option>Brunei</option>
                  <option>Brasil</option>
                 </select>
            </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NIK</label> 
            <input name="nik"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$umat->nik}}" >
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">No. Kartu Keluarga</label> 
            <input name="no_kk"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$umat->no_kk}}">
         </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input name="tgl_lahir"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$umat->tgl_lahir}}">
           </div>
          <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Kelamin : </label>
                 <select class="selectpicker form-control" name="jns_kelamin">
                 <option>Pilih Jenis Kelamin</option>
                 <option>Laki-Laki</option>
                 <option>Perempuan</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Pilih Lingkungan </label>
                 <select class="selectpicker form-control" name="ling">
                 <option>Silahkan Pilih Lingkungan</option>
                 <option>St. Yohanes Pemandi Gamping lor</option>
                 <option>St. Agatha Gamping Tengah</option>
                 <option>St. Agustinus Gamping</option>
                 <option>St. Yusuf Gamping</option>
                 <option>St. Maria Fatimmah Demak Ijo</option>
                 <option>St. Ignatius Loyola Kaliabu</option>
                 <option>St. Caecilia Onggobayan</option>
                 <option>St. Antonius Mejing</option>
                 <option>St. Gregorius Mejing</option>
                 <option>St. Stefanus Mejing</option>
                 <option>St. Monica Mejing</option>
                 <option>St. Mateus Mejing</option>
                 <option>St. Paulus Sidoarum</option>
                 <option>St. Thomas Aquinas Sidoarum</option>
                 <option>St. Yustinus Martir Sidoarum</option>
                 <option>St. Anna Gesikan</option>
                 <option>St. Yoakim Gesikan</option>
                 <option>St. Hieronimus Gesikan</option>
                 <option>St. Fransiscus Asisi Pelem Hijau</option>
                 <option>St. Lucia Ngawen</option>
                 <option>St. Veronica Bantulan</option>
                 <option>St. Agustinus Gancahan</option>
                 <option>St. Petrus Gancahan</option>
                 <option>St. Tarcisius Semboh (Perak Bulus)</option>
                 <option>St. Maria Gancahan</option>
                 <option>St. Yohanes Pembaptis Sidokarto</option>
                 <option>St. Yusuf Gejawan Pasekan</option>
                 <option>St. Margareta Gejawan Puri</option>
                 <option>St. Georgius Nyamplung</option>
                 <option>St. Ludoviskus Nyamplung</option>
                 <option>St. Frans. Xaverius Sumber Gamol</option>
                 <option>St. Theodorikus Jatimas</option>
                 <option>St. Antonius Padua Jatisawit</option>
                 <option>St. Kristoforus Baleasri</option>
                 </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Foto Umat</label>
                <input name="images"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
            </div>
      </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">Simpan</button>
    </form>
    </div> 
  </header>
  
</body>
</html>
