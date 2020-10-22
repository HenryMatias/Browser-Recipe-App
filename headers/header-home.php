<body id="body-home">
<header id="header-home">

<div id="header-home">
    <div class="container" id="header-home-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="adjust-display">
                <button id="todesktop">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tv" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                    </svg>
                </button>
                <button id="totablet">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tablet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                        <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </button>
            </div>
            <div class="menu-right">
                <div class="language-selection">
                    <?php pll_the_languages(array('dropdown'=>1)); ?>
                </div>
                <div id="login-input">
                    <a href="wp-login.php">
                        <?php the_field('login'); ?>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>

</header>