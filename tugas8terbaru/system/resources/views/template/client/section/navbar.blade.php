<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ url('admin/article') }}">Tira Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('home') }}">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}"> Login </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about"> About <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
            </ul>
            <div class="user_option-box">
              <a href="{{url('public')}}">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="{{url('public')}}/">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
              <a href="{{url('public')}}/">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('home') }}">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
