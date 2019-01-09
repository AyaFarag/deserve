@extends('admin.index')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div lass="container-fluid">
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

           @yield('page')

          </div>

  <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>




  @endsection
