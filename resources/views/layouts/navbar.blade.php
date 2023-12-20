<style>
  /* Add this style block to your HTML, or include it in your external CSS file */

  .navbar-nav .nav-link:hover {
    color: black !important; /* !important is used to ensure the style takes precedence */
  }
</style>

<nav style="background-color: orange; padding:2px" class="navbar fixed-top navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/111.jpg') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Motor Parts
    </a>
    <a class="navbar-brand" href="{{ route('welcome') }}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('cover') }}"> Customization</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('products') }}">Products</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" aria-current="page" href="{{ route('aboutus') }}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('contactus') }}">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
          <a class="nav-link active" aria-current="page" href="{{ route('order') }}">MAKE AN ORDER</a>
        <a class="nav-link active" aria-current="page"href='{{ route('admin.orders') }}'">Admin</a>
      </form>
    </div>
  </div>
</nav>
