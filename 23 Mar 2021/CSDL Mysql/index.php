
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="">

    <div class="row justiy-content-left ml-5 mt-4" >
    <h3 class="text-dark  pl-3 ml-3 pt-3 pb-3">Điền thông tin</h3>
    <form action="connect.php" method="post">
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="HONV" placeholder="HONV">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="TENLOT" placeholder="TENLOT">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="TENNV" placeholder="TENNV">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="PHAI" placeholder="PHAI">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="LUONG" placeholder="LUONG">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="MANV" placeholder="MANV">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name=" NGSINH" placeholder="NGSINH">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="DIACHI" placeholder="DIACHI">
        </div>
        <div class="form-group">
             <input type="text" class="form-control pl-3 ml-3" name="PHG" placeholder="PHG">
        </div>
        
            <input type="submit" name="submit" class="btn btn-success  ml-3 mb-2 " value="lưu">
            <input type="reset"  class="btn btn-danger  ml-3 mb-2" value="xóa">
      
       
    </form>
    </div>
    
</body>
</html>