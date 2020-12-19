<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
        <img class="logo" src="/img/logo.png" alt="">
    </a>
    <div class="light2">
        <button class="navbar-toggler light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav list">
            <li class="nav-item">
                <a class="nav-link" href="/shoes/new">
                    <p class="light">New</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/shoes/men">
                    <p class="light">Men</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/shoes/women">
                    <p class="light">Women</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/shoes/sport">
                    <p class="light">Sport</p>
                </a>
            </li>
            <li class="nav-item mr-auto">
                <a href="/cart">
                    <img class="cart" src="/img/cart.png" alt="">
                </a>
            </li>
            <!-- login btn -->
            <li class="nav-item mr-auto">
                <a class="login-link btn btn-login" href="
                <?php if (logged_in() && in_groups('admin')) { ?>
                        /admin
                    <?php } else if (logged_in() && in_groups('user')) { ?>
                        /user
                    <?php } else { ?>
                        /login
                    <?php } ?>
                ">
                    <?php if (logged_in()) { ?>
                        Profile
                    <?php } else { ?>
                        Login
                    <?php } ?>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- end of nav -->