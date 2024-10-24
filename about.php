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
    <title>About Me - Muhammad Rafi Irfan</title>
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

<body class="d-flex flex-column h-100">
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
                        <li class="nav-item"><a class="nav-link active" href="about.php">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container-fluid px-5">
                <div class="row gx-5 justify-content-center align-items-center">
                    <img style="width: 500px; height: max-content;" src="assets/about.jpeg" alt="..." srcset="">
                    <div class="col-xxl-7">
                        <div class="ms-1">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                            <p class="lead fw-light mb-4">My name is Muhammad Rafi Irfan</p>
                            <p class="text-muted">I am a Full Stack Web Developer with nearly half a decade of
                                experience, having successfully delivered a wide range of website projects across
                                various industries. I am committed to continuous learning and growth, enhancing not only
                                my technical expertise but also my soft skills, such as teamwork, communication, and
                                problem-solving. My goal is to create efficient, user-friendly, and scalable web
                                solutions that drive results for businesses and improve user experience.</p>
                            <p class="lead fw-light mb-0">Personal Data:</p>
                            <ul class="list-group list-group-flush">
                                <?php
                                $sql = "SELECT `type`, `value` FROM personal_info";
                                $result = $conn->query($sql);

                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <li class="list-group-item bg-transparent"><?php echo $row["type"] ?>: <?php echo $row["value"] ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <div class="d-flex gap-4 align-items-center">
                                <p class="lead fw-light mt-3">Socials:</p>
                                <a class="text-gradient fs-2" href="#!"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient fs-2" href="#!"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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