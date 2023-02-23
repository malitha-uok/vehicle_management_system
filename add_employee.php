        <?php
            include "./sidebar.php";
           
            include_once "./connection.php";
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DTET Transport</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Content Start -->
        <div class="content">
            <?php
                include_once "./navbar.php";
            ?>
            <!-- Navbar End -->


            <!-- Adding Vehicle Details Starts Here -->
                        <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h5 class="mb-4">Add Employee Details</h5>
                            <div class="form-floating mb-3">
                                <input type="text-primary" class="form-control" id="first_name"
                                    placeholder="name@example.com">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text-primary" class="form-control" id="last_name"
                                    placeholder="Vehicle Type">
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="designation"
                                    aria-label="Floating label select example">
                                    <option value="2">Management Service Officer</option>
                                    <option value="1">Development Officer</option>
                                    <option value="1">Driver</option>
                                </select>
                                <label for="designation">Designation</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="division"
                                    aria-label="Floating label select example">
                                    <option value="1">Administration</option>
                                    <option value="2">Accounts</option>
                                    <option value="3">Academic</option>
                                    <option value="4">Management Information Unit</option>
                                    <option value="5">Testing & Evaluation</option>
                                    <option value="6">Planning</option>
                                    <option value="7">Maintenance</option>
                                </select>
                                <label for="division">Division</label>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="text-primary" class="form-control" id="emp_phone"
                                placeholder="Number of Seats">
                            <label for="emp_phone">Phone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Save</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adding Vehicle Details Ends Here -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>