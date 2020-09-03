

<div class="navbars">

<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler"><i class="fa fa-bars"></i></button>
    <div class="collapse navbar-collapse justify-content-center">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link">صفحه اصلی</a></li>
            <li class="nav-item"><a href="#" class="nav-link">درباره ما</a></li>
            <li class="nav-item"><a href="#" class="nav-link">خدمات</a></li>
            <li class="nav-item dropdown"><a href="#" class="nav-link" data-toggle="dropdown"
                    data-target="#dropdown-1">محصولات</a>

                <div class="dropdown-menu" id="dropdown-1">
                    <a href="#" class="dropdown-item">صفحه اصلی</a>
                    <a href="#" class="dropdown-item">درباره ما</a>
                    <a href="#" class="dropdown-item">خدمات</a>
                    <a href="#" class="dropdown-item">محصولات</a>
                </div>

            </li>
            <li class="nav-item"><a href="#" class="nav-link">قیمت ها</a></li>
            <li class="nav-item"><a href="#" class="nav-link">ارتباط اب ما</a></li>
        </ul>
    </div>

    <ul class="nav icons">
        <li class="nav-item user-btn"><a href="#" class="nav-link"><i class="fa fa-user"></i></a></li>
        <li class="nav-item cart-btn"><a href="#" class="nav-link"><i class="fa fa-shopping-cart"><span class="badge badge-dark"></span></i></a></li>

        @auth
            <li class="nav-item "><a href="Signinusrs/delete_page" style="padding: 10px;"  class="nav-link btn btn-info">مقالات</a></li>&nbsp;
            <li class="nav-item ">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button style="padding: 10px;" class="btn btn-danger">خروج</button>
                </form>
            </li>
        @else
            <li class="nav-item ">
            <form method="post" action="/loginform">
                @csrf
                <button style="padding: 10px;"  class="btn btn-primary">ورود</button>
            </form>
            </li>

        @endauth
    </ul>

</nav>

</div>
