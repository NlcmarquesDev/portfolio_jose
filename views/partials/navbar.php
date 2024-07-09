<!-- header -->
<header class="header header--fixed">
    <div class="header__inner">
        <a class="text-decoration-none" href="index.php">
            <div class="header__logo">
                <h1 class="fs-1">
                    <span class="text-danger ">Jo</span><span>sé Marques</span>
                </h1>
            </div>
        </a>
        <nav class="navbar navbar-main ">
            <ul class="d-flex align-items-center gap-3  ">
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#hero"><?php echo __('Home') ?></a>
                </li>
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#work"><?php echo __('Work') ?></a>
                </li>
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#about"><?php echo __('About') ?></a>
                </li>
                <li class="nav-item"><a class="nav-link page-title__text mx-2 " href="index.php#contact"><?php echo __('Contact') ?></a>
                </li>
                <div class="dropdown">
                    <a class=" dropdown-toggle language" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo __('Languages') ?>
                    </a>

                    <ul class="dropdown-menu language__drop ">
                        <li><a class="nav-link language__item " href="index.php?lang=en">EN</a></li>
                        <li><a class="nav-link language__item" href="index.php?lang=be">BE</a></li>
                        <li><a class="nav-link language__item" href="index.php?lang=pt">PT</a></li>
                    </ul>
                </div>

                <button type="button" class="btn btn-secondary btn-lg fs-2" id="toggle-dyslexie">
                    D
                </button>


                <li>
                    <button id="toggle-theme" class="border-0 bg-transparent"> <i class="fa-regular fa-<?= $_COOKIE['theme'] == 'dark' ? 'lightbulb' : 'moon' ?> " style="color: #737272;"> </i></button>
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
                <li>
                    <div class="d-flex flex-column gap-3">
                        <a class="nav-link language__item " href="index.php?lang=en">EN</a>
                        <a class="nav-link language__item" href="index.php?lang=be">BE</a>
                        <a class="nav-link language__item" href="index.php?lang=pt">PT</a>
                    </div>
                </li>
            </ul>


        </nav>
    </div>

</header>