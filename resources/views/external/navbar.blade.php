<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Recycon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show-products">Show Products</a>
                </li>
                @if (Auth::user())
                    @if (Auth::user()->role == 'user')
                        <li class="nav-item">
                            <a class="nav-link active" href="/">My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/show-products">Transaction History</a>
                        </li>
                    @endif
                @endif
                @if (Auth::user())
                    @if (Auth::user()->role == 'admin')
                        <div class="dropdown" style="padding-right: 20px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Manage Items
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Add Item</a></li>
                                <li><a class="dropdown-item" href="#">View Item</a></li>
                            </ul>
                        </div>
                    @endif
                @endif
            </ul>

            @auth
                <div class="input-group mb-3">
                    <form action="">
                        <input type="text" class="form-control" placeholder="Search product here..">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">SEARCH</button>
                        </div>
                    </form>
                </div>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->full_name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <form method="post" action="/logout">
                            @csrf
                            <button class="btn btn-outline-success w-100" type="submit">Logout</button>
                        </form>
                    </ul>
                </div>
            @else
                <div style="display: flex;">
                    <form action="/login">
                        <button class="btn btn-outline-success" type="submit">Login</button>
                    </form>
                    <form action="/register">
                        <button class="btn btn-success" type="submit">Register</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</nav>

<style>
    li {
        padding-right: 20px;
        width: 100%
    }
</style>
