<body id="body-home">
<header id="header-home">

<div id="header-home">
    <div class="container" id="header-home-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="menu-left">
                <div class="adjust-display">
                    <ul class="nav nav-tabs" id="deviceTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="todesktop" data-toggle="tab" role="tab" aria-selected="true">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tv" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="totablet" data-toggle="tab" role="tab" aria-selected="false">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tablet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                    <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu-right">
                <div class="language-selection">
                    <?php pll_the_languages( array( 'dropdown' => 1)); ?>
                </div>
                <div id="login-input">
                    <a class="desktop" href="wp-login.php">
                        <?php the_field('login'); ?>
                    </a>
                    <a class="mobile" href="wp-login.php">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-forward" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.502 5.513a.144.144 0 0 0-.202.134V6.65a.5.5 0 0 1-.5.5H2.5v2.9h6.3a.5.5 0 0 1 .5.5v1.003c0 .108.11.176.202.134l3.984-2.933a.51.51 0 0 1 .042-.028.147.147 0 0 0 0-.252.51.51 0 0 1-.042-.028L9.502 5.513zM8.3 5.647a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.503H2a.5.5 0 0 1-.5-.5v-3.9a.5.5 0 0 1 .5-.5h6.3v-.503z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>

</header>