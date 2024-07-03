<!-- header -->
<header class="header header--fixed">
    <div class="header__inner">
        <a class="text-decoration-none" href="index.php">
            <div class="header__logo">
                <h3 class="">
                    <span class="text-danger ">Jo</span><span>sé Marques</span>
                </h3>
            </div>
        </a>
        <nav class="navbar navbar-main ">
            <ul class="d-flex gap-3  ">
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#hero">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#work">Work</a>
                </li>
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#about">About</a>
                </li>
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#contact">Contact</a>
                </li>
                <li>
                    <button id="toggle-theme">Toggle dark mode</button>
                </li>
            </ul>

        </nav>
        <div class="navbar-toggle" id="fs-button">
            <div class="navbar-icon"><span></span></div>
        </div>
    </div>

    <div class="fullscreenmenu__module" trigger="#fs-button">
        <nav class="overlay-menu">
            <ul class="wil-menu-list">
                <li class="current-menu-item"><a href="#hero">Home</a>
                </li>
                <li><a href="#work">Work</a>
                </li>
                <li><a href="#about">About</a>
                </li>
                <li><a href="#contact">Contact</a>
                </li>
            </ul>

        </nav>
    </div>

</header>