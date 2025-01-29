<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Start the session only if it hasn't started yet
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown">
                        About Me
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="personal.php">Personal Info</a></li>
                        <li><a class="dropdown-item" href="education.php">Educational Info</a></li>
                        <li><a class="dropdown-item" href="work.php">Work Info</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Me</a></li>

                <?php
                // Admin-related session check should only be for admin pages
                if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) { ?>
                        <li class="nav-item"><a class="nav-link" href="admin_dashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php } else { ?>
                        <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
