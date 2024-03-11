<!DOCTYPE html>
<!-- saved from url=(0082)http://localhost/crud.git/index.php?url=user/edit/bkNtcUpNMnRrWVRRNWZtWnFjcXNTQT09 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tích 2 số</title>
    <link href="./tinh_tich_2_so_files/bootstrap.min.css" rel="stylesheet" >
    <script src="./tinh_tich_2_so_files/jquery-3.7.1.slim.min.js.download" ></script>
    <?php 
        $so_a = "";
        $so_b = "";
        $ket_qua = "";


        if(isset($_POST['tinh_tong'])){
            $so_a = $_POST['so_a'];
            $so_b = $_POST['so_b'];
            $ket_qua = $so_a * $so_b;
        }
    ?>
</head>

<body>
                    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6 border border-dark">
                <p class="text-center mt-5 fs-3">Tính tích 2 số</p>
                
                <form method="post">
                    <div class="row mb-3">
                        <label for="userName" class="col-sm-2 col-form-label">Số a</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="so_a" name="so_a" value="<?php echo $so_a; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Số b</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="so_b" name="so_b" value="<?php echo $so_b; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <button type="submit" class="col-sm-2 btn btn-primary" name="tinh_tong">Tính tích</button>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ket_qua" name="ket_qua" readonly value="<?php echo $ket_qua; ?>">
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10">
                            <p type="text" class="form-control text-danger" style="height: 40px" id="thong_bao_loi" name="thong_bao_loi" readonly></p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>    

<script src="./tinh_tich_2_so_files/bootstrap.bundle.min.js.download"></script>
</body>
</html>