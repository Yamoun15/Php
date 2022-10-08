<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/adminHospitalList.css">
    <link rel="stylesheet" href="./resources/css/adminP&Plist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <section class="bg-light p-5">
        <div class="container">
            <div class="row mainadminPPaddtitle">
                <div class="col-8 adminPPaddtitle">Hospital List</div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                            <button class="btn adminppaddbtn">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-1"></div>
                <div class="col-md-8 col-sm-8 col-10 table-responsive no-more-table">
                    <table class="table">
                        <thead class="adminhospitallistheaderbg">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Ph.No</th>
                                <th>Logo</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title="No">1</td>
                                <td data-title="Name">Pan Hlaing</td>
                                <td data-title="Email Address">panhlaing@gmail.com</td>
                                <td data-title="Ph.No">01-2150776</td>
                                <td data-title="Logo">
                                    <img src="./image/download.jpg" alt="">
                                </td>
                                <td data-title="Delete">
                                    <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="No">1</td>
                                <td data-title="Name">Pan Hlaing</td>
                                <td data-title="Email Address" class="nandar">panhlaing@gmail.comfffffffffffffffffffffffffffffffffffffffaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</td>
                                <td data-title="Ph.No">01-2150776</td>
                                <td data-title="Logo">
                                    <img src="./image/download.jpg" alt="">
                                </td>
                                <td data-title="Delete">
                                    <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="No">1</td>
                                <td data-title="Name">Pan Hlaing</td>
                                <td data-title="Email Address">panhlaing@gmail.com</td>
                                <td data-title="Ph.No">01-2150776</td>
                                <td data-title="Logo">
                                    <img src="./image/download.jpg" alt="">
                                </td>
                                <td data-title="Delete">
                                    <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2 col-sm-2 col-1"></div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-5"></div>
                <div class="col-md-2 col-sm-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </section>
</body>

</html>