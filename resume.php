<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Muhammad Rafi Irfan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Muhammad Rafi
                        Irfan</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Me</a></li>
                        <li class="nav-item"><a class="nav-link active" href="resume.php">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Experience Section-->
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                            <!-- Download resume button-->
                            <!-- Note: Set the link href target to a PDF file within your project-->
                            <a class="btn btn-primary px-4 py-3" href="#!">
                                <div class="d-inline-block bi bi-download me-2"></div>
                                Download Resume
                            </a>
                        </div>
                        <?php
                        $sql1 = "SELECT `date`, `position`, `company`, `location`, `description` FROM experience";
                        $result1 = $conn->query($sql1);

                        while ($row = $result1->fetch_assoc()) {
                        ?>
                            <!-- Experience Card -->
                            <div class='card shadow border-0 rounded-4 mb-5'>
                                <div class='card-body p-5'>
                                    <div class='row align-items-center gx-5'>
                                        <div class='col text-center text-lg-start mb-4 mb-lg-0'>
                                            <div class='bg-light p-4 rounded-4'>
                                                <div class='text-primary fw-bolder mb-2'><?php echo $row["date"]; ?></div>
                                                <div class='small fw-bolder'><?php echo $row["position"] ?></div>
                                                <div class='small text-muted'><?php echo $row["company"] ?></div>
                                                <div class='small text-muted'><?php echo $row["location"] ?></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-8'>
                                            <p><?php echo $row["description"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </section>

                    <!-- Education Section-->
                    <section>
                        <h2 class="text-secondary fw-bolder mb-4">Education</h2>

                        <?php
                        $sql2 = "SELECT `date`, `institution`, `location`, `jurusan`, `description` FROM education";
                        $result2 = $conn->query($sql2);

                        while ($row = $result2->fetch_assoc()) {
                        ?>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2"><?php echo $row["date"] ?></div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder"><?php echo $row["institution"] ?></div>
                                                    <div class="small text-muted"><?php echo $row["location"] ?></div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted"><?php echo $row["jurusan"] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div><?php echo $row["description"] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </section>
                    <!-- Divider-->
                    <div class="pb-5"></div>
                    <!-- Skills Section-->
                    <section>
                        <!-- Skillset Card-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <!-- Professional skills list-->
                                <div class="mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div
                                            class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional
                                                Skills</span></h3>
                                    </div>
                                    <div class="row row-cols-2 row-cols-md-2">
                                        <?php
                                        $sql3 = "SELECT `name` FROM skills";
                                        $result3 = $conn->query($sql3);

                                        while ($row = $result3->fetch_assoc()) {
                                        ?>
                                            <div class="col mb-4 mb-md-4">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><?php echo $row["name"] ?></div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- Languages list-->
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div
                                            class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            <i class="bi bi-code-slash"></i>
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span>
                                        </h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <?php
                                        $sql4 = "SELECT `name` FROM language";
                                        $result4 = $conn->query($sql4);

                                        while ($row = $result4->fetch_assoc()) {
                                        ?>
                                            <div class="col mb-4 mb-md-4">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><?php echo $row["name"]; ?></div>
                                            </div>
                                        <?php
                                        }
                                        $conn->close();
                                        ?>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; Muhammad Rafi Irfan 2024</div>
                </div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>