<nav class="navbar">
    <?php include "./includes/social-links.html" ?>
    <img class="logo" src="/dist/img/logos/logo.svg" alt="Company Name"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div id="menu" class="collapse navbar-collapse">
        <div class="menu-bg"></div>
        <nav>
            <div class="menu-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-times"></i>
                </button>
                <h2 class="green-full-stop">Wheatley</h2>
                <div class="green-text-separator"></div>
            </div>
            <ul class="main-menu">
                <li><a href="" class="active">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        About us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Developments
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Homes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page</a></li>
                        <li><a class="dropdown-item" href="#">Another Page here</a></li>
                    </ul>
                </li>
                <li><a href="">FAQs</a></li>
                <li><a href="">News / Blog</a></li>
                <li><a href="">Land / Rewards</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
            <?php include "./includes/social-links.html" ?>
        </nav>
    </div>
</nav>
