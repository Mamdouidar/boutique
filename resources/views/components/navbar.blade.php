<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Boutique</a>
        <div id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/products">All Products</a>
                <a class="nav-link" href="/account">Account</a>
                <form class="d-flex" method="POST" action="/logout">
                    @csrf
                    <button class="btn btn-outline-success ms-5" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
