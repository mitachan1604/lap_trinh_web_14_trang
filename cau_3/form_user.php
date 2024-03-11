<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);//Update existing user
}


if (!empty($_POST['submit'])) {
    if (!empty($_id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <link href="./form_user_files/bootstrap.min.css" rel="stylesheet" >
    <script src="./form_user_files/jquery-3.7.1.slim.min.js.download" ></script>
    
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>    

    <div class="container">

            <?php if ($user || !isset($_id)) { ?>
                <div class="alert alert-warning" role="alert">
                    User form
                </div>
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-6 border border-dark">
                            <p class="text-center mt-5 fs-3">Màn hình chỉnh sửa</p>
                            
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $_id ?>">
                                <div class="row mb-3">
                                    <label for="userName" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" value="<?php if (!empty($user[0]['user_name'])) echo $user[0]['user_name'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Mật khẩu</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="confirm_password" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" value="<?php if (!empty($user[0]['user_email'])) echo $user[0]['user_email'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 d-flex justify-content-end align-items-center">
                                    <a class=" text-decoration-none mx-2" href="http://localhost/crud.git/index.php?url=user/edit/bkNtcUpNMnRrWVRRNWZtWnFjcXNTQT09#">Tải lại trang</a>
                                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                                </div>
                            </form>
                            <?php } else { ?>
                                <div class="alert alert-success" role="alert">
                                    User not found!
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
    </div>

    
    <script src="./form_user_files/bootstrap.bundle.min.js.download"></script>
</body>
</html>