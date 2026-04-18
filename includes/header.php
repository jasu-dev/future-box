<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php echo $page_title ?? 'Future Boxx – Advanced Machine and Hardware'; ?>
    </title>
    <meta
        name="description"
        content="<?php echo $page_description ?? 'Future Boxx is a trusted provider of IT hardware, security systems, networking solutions, and POS systems in Indore, Madhya Pradesh. Professional installation and technical support.'; ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- ===== NAVBAR ===== -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="/" class="nav-logo">
                <img
                    src="assets/logo-white.png"
                    alt="Future Boxx Logo"
                    id="nav-logo-img" />
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="/" class="nav-link <?php echo $page_name == 'index' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about.php" class="nav-link <?php echo $page_name == 'about' ? 'active' : ''; ?>">About</a></li>
                <li><a href="services.php" class="nav-link <?php echo $page_name == 'services' ? 'active' : ''; ?>">Services</a></li>
                <li><a href="/#brands" class="nav-link">Brands</a></li>
                <li><a href="/#clients" class="nav-link">Clients</a></li>
                <li>
                    <a href="contact.php" class="nav-link nav-cta">Contact Us</a>
                </li>
            </ul>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>