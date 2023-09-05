<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggapan</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
<body>
    <div class="text-bg-secondary p-3">
        <div class="container">
            <form action="proses_tanggapan.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Tanggapan</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="tanggapi"></textarea>
            </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1" name="proses">Proses</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">Selesai</label>
              </div>
            <button type="submit" class="btn btn-dark">kirim</button>
            </form>
        </div>
    </div>
</body>
</html>