@extends('user.index')

@section('usercontent')
<!-- Main content -->
<section class="content ">

  <div class="container">
<nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">Deserve</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">FAQ</a>
            </li>
            </ul>
        </div>
        </nav>
      <div class="">
      <div id="carouselExampleIndicators" class="carousel slide slidercore" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/image/1.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                  <h5>deserve.com</h5>
                  <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/image/2.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                  <h5>Hello world</h5>
                  <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/image/1.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                  <h5>welcome</h5>
                  <p>...</p>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    </div>
{{--  --}}
<div class="clear-fix"></div>
    <div class="container" style="margin-top:50px;">
        <div class="text-center h3">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
        <div>
        <div class="row">

                <div class="col col-md-3">best</div>
                <div class="col col-md-3">best</div>
                <div class="col col-md-3">dest</div>
                <div class="col col-md-3">best</div>
            </div>

        </div>
    </div>
{{--  --}}
<div class="container" style="margin-top:50px;">
<div class="row">
        <div class="col col-md-6">
            <img src="/image/1.jpg" />
        </div>
        <div class="col col-md-6">
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
                standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets c
                 ontaining Lorem Ipsum passages, and more recently with desktop publishing
                 software like Aldus PageMaker including versions of Lorem Ipsum.</span>
        </div>
    </div>
</div>
<div class="container" style="margin-top:50px;">
<div class="row">
    <div class="col col-md-6">
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
            standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets c
            ontaining Lorem Ipsum passages, and more recently with desktop publishing
            software like Aldus PageMaker including versions of Lorem Ipsum.</span>
        </div>
        <div class="col col-md-6">
            <img src="/image/1.jpg" />
        </div>
    </div>
</div>
<div class="container" style="margin-top:50px;">
<div class="row">
        <div class="col col-md-6">
            <img src="/image/1.jpg" />
        </div>
        <div class="col col-md-6">
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
                standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets c
                 ontaining Lorem Ipsum passages, and more recently with desktop publishing
                 software like Aldus PageMaker including versions of Lorem Ipsum.</span>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</section>
@endsection
