<header>
    <div class="header">
        <nav class='navbar navbar-expand-lg headerStyle'>
            <div class="video-container" style="height:176px;">
                <video autoplay loop muted id="video-bg">
                    <source src="/images/navi.mp4" type="video/mp4">
                </video>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="/images/Logo-1.png" height="150px" class="card-img-top" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link nav-linkNavBar" href="{{ route('home') }}">Home</a>
                        <a class="nav-link nav-linkNavBar" href="{{ route('products') }}">Products</a>
                        <a class="nav-link nav-linkNavBar" href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>