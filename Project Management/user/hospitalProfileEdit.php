<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/hospitalProfileEdit.css?v=" <?= time() ?>>
</head>

<body class="bodyColor">
    <div class="container">
        <div class="adminHospitaladdTitle">Edit Profile Update</div>
        <div class="row hospitalEditProfile">
            <div class="col-md-3 col-sm-2 col-2"></div>
            <div class="col-md-3 col-sm-12 information">
            <img src="./image/hospital1Logo.png" alt="" class="hospitalProfileUpdate">
                <div class="hospitalProfileUpdateChoose">Upload a different photo</div>
                <label for="Adminfile-upload" class="Admincustom-file-upload">
                    Choose File
                </label>
                <input id="Adminfile-upload" type="file" />
            </div>

            <div class="col-1">
                <div class="hospitalVerticalLine"></div>
            </div>

            <div class="col-sm-8 col-md-4">
            <form action="" class="form-horizontal hr adminContact-form">
                    <div class="form-group">
                    <label for="username" class="hospitalcontrol-label col-md-5">Hospital Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Pang Hlaing">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="hospitalcontrol-label col-md-5">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control adminContactInput" id="usernaem" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="username" class="hospitalcontrol-label col-md-5">Email Address</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" id="usernaem" placeholder="panghlaing@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="username" class="hospitalcontrol-label col-md-5">Phone Number</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="01-2150776">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-5"></div>
                            <div class="col-md-3 col-3">
                                <input type="button" value="Update" class="adminContactbtn">
                            </div>
                            <div class="col-md-3 col-3">
                                <input type="button" value="Cancel" class="adminContactbtn hospitalProfileUpdatebtn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

</body>

</html>