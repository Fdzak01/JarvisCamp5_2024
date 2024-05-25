<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#about">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#experience">Pengalaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skills">Keterampilan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Narahubung</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<div class="jumbotron text-center">
    <img src="path_to_profile_image.jpg" alt="Profile Image" class="profile-image mb-3">
    <h1 class="display-4">Hi' Everyone</h1>
    <p class="lead">I'm Firmansyah Dzakwan Arifien</p>
</div>

<!-- About Section -->
<section id="about" class="container my-5">
    <h2 class="text-center">Tentang Saya</h2>
    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, tenetur consectetur corporis modi neque facilis. Et quod quisquam vitae doloremque quibusdam, fugiat reiciendis, sapiente tempora quaerat consequatur error magnam praesentium recusandae accusamus alias ipsam impedit animi neque qui distinctio perferendis labore facilis earum blanditiis? Laboriosam maiores incidunt, ratione voluptas perferendis quos sequi quam nostrum quod voluptates nihil doloremque omnis eius.</p>
</section>

<!-- Experience Section -->
<section id="experience" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Pengalaman</h2>
        <ul class="list-group">
            <li class="list-group-item">
                <h5>Sekretaris & Bendahara</h5>
                <p>ISTAQ(Ikatan Santri Al-Itqan) Pondok Pesantren dan Rumah Yatim Al-Itqan</p>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sequi eos dolor! Tempora temporibus,
                    ipsum commodi soluta beatae, ab eum in suscipit, facere unde magni nemo? Officiis cumque mollitia odit.

                </p>
            </li>
            <!-- Tambahkan pengalaman lain jika ada -->
        </ul>
    </div>
</section>


<!-- Contact Section -->
<section id="contact" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Narahubung</h2>
        <div class="text-center">
            <p>Email: <a href="mailto:fdzak01@gmail.com">fdzak01@gmail.com</a></p>
            <p><a href="https://www.linkedin.com/in/firmansyah-arifien-90b1b8293/">Linkedin</a></p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center py-3">
    <p>&copy; 2024- Copy Right Semua Hak Dilindungi.</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
