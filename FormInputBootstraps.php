<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Bootdtrsp</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
      <h1 class="display-1">Data Siswa</h1>
      <form action="proses.php" method="POST">
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nama</span>
      <input type="text"  name="Nama" class="form-control" placeholder="Nama Lengkap...."
      aria-label="Nama Lengkap...." aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <select class="form-select" name="Kelas" arial-label="Deafult select example">
      <option selected>Pilih Kelas....</option>
      <option value="XI RPL 1">XI RPL 1</option>
      <option value="XI RPL 2">XI RPL 2</option>
      <option value="XI RPL 3">XI RPL 3</option>
      </select>
      </div>

      <div class="input-group mb-3">
      <textarea class="form-control" placeholder="Alamat Lengkap...." aria-label="with textarea"
      name="Alamat"></textarea>
      </div>

      

      </form>
      </div>
    </div>
  </div>
         
      
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Tempat Lahir</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Lahir</span>
        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
        Laki - Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        Perempuan
        </label>
      </div>

      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      
    <link rel="stylesheet" href="js/bootstrap.min.js">
</body>
    
</body>

</html>