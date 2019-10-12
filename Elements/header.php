<header>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/" class="brand-logo"><img src="<?php $this->BcBaser->themeUrl() ?>img/logo.png" alt="<?php $this->BcBaser->SiteName()?>"></a>
            <ul class="right hide-on-med-and-down">
                <?php $this->BcBaser->globalMenu() ?>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <?php $this->BcBaser->globalMenu() ?>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</header>