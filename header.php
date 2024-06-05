<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand p-0" href="#"><img src="assets/img/Vector-5.png" alt="logo" height="40px"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'home') ? 'active' : "" ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'tax-topics' || $page == 'articles') ? 'active' : "" ?>" href="tax-topics.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'contact') ? 'active' : "" ?>" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'donate') ? 'active' : "" ?>" href="donate-klimli.php">Donate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'about-us') ? 'active' : "" ?>" href="about-us.php">About</a>
            </li>
        </ul>
    </div>
</nav>