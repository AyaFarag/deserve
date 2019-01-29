@extends('user.index')

@section('usercontent')
<!-- demo-title -->
<!-- <div class="demo-title">
	<h1 class="display-1">Header</h1>
	<p>by <a href="#">@AlPhaD</a></p>
	<p>contribute on github <a href="https://github.com/alphadsy/alpha-ui" target="_blank">alpha-ui</a></p>
	<p>with animation <a href="https://bootsnipp.com/snippets/Warp1" target="_blank">about</a></p>
	<p>about sections <a href="https://bootsnipp.com/snippets/X26RG" target="_blank">about</a></p>
	<p>advance header <a href="https://bootsnipp.com/snippets/M5Nyj" target="_blank">adv header</a></p>
</div> -->

<!-- header #1 -->
<!-- <header class="header" id="header1">
	<div class="center">
		<div class="caption">
			<h2 class="title display-3">Header title</h2>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
			<button class="action btn btn-primary">click me</button>
			<button class="action btn btn-Light">click me</button>
		</div>
	</div> -->
	<!-- scroll-down -->
	<!-- <i class="scroll fa fa-angle-double-down"></i> -->
<!-- </header> -->

<!-- header #2 -->
<!-- <header class="header" id="header2">
	<div class="left">
		<div class="caption">
			<h2 class="title display-3">Header title</h2>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
			<div class="action input-group">
			  <input type="text" class="form-control" placeholder="Search for..." required>
			  <span class="input-group-btn">
			    <button class="btn btn-success" type="button">Go!</button>
			  </span>
	    </div>
		</div>
	</div>
	<i class="scroll fa fa-angle-double-down"></i>
</header> -->

<!-- header #3 -->
<header class="header" id="header3">
	<div class="left">
		<div class="caption">
			<h2 class="title display-3">Header title</h2>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
			<button class="action btn btn-danger">click me</button>
		</div>
	</div>

	<div class="right">
	  <img src="https://raw.githubusercontent.com/alphadsy/alpha-ui/master/images/laptop.png" alt="" class="img-fluid">
	</div>
	<i class="scroll fa fa-angle-double-down"></i>
</header>

<!-- header #4 -->
<!-- <header class="header" id="header4">
	<div class="center">
		<div class="caption">
			<h2 class="title display-3">Header title</h2>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
			<form class="action">
		    <input type="Email" class="form-control mr-1" id="email" placeholder="Email">
	      <button type="submit" class="btn btn-warning">Submit</button>
	    </form>
		</div>
	</div>
	<i class="scroll fa fa-angle-double-down"></i>
</header> -->

<!-- header #5 -->
<!-- <header class="header" id="header5"> -->
	<!-- demo only update note -->
	<!-- <p class="update-note">update note :change gradient , add opacity text</p>

	<div class="right">
	  <img src="https://raw.githubusercontent.com/alphadsy/alpha-ui/master/images/laptop.png" alt="" class="img-fluid">
	</div>

	<p class="opacity-text">Soon!</p>

	<div class="left">
		<div class="caption">
			<h2 class="title display-3">Header title</h2>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti iusto!</p>
			<button class="action btn btn-light">click me</button>
		</div>
	</div>
	<i class="scroll fa fa-angle-double-down"></i>
</header> -->

<div class="demo-more d-lg-flex justify-content-around">
    <h3> Register Now And Get 10% discount for your first purchase </h3>
    <a href="{{ route('register') }}"><input class="btn btn-danger" value="Register Now" type="button" /></a>
    <!-- <p><i class="fa fa-users"></i> contribute on github <a href="https://github.com/alphadsy/alpha-ui" target="_blank">alpha-ui</a></p>
	<p><i class="fa fa-gift"></i> more ui and layout <a href="https://github.com/alphadsy">alphadsy</a></p>
	<p><i class="fa fa-balance-scale"></i> under MIT</p>
	<p><i class="fa fa-camera-retro"></i> bg-image from <a href="http://stocksnap.io/">stocksnap</a></p> -->
</div>
<!-- Main content -->
<!-- <section class="section ">
<div class="container" style="margin-top:50px; margin-bottom:50px;">
<div class="row">
      <div class="col col-md-10">
      <div id="carouselExampleIndicators" class="carousel slide slidercore" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/image/18.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                  <h1>Start your bussiness right now</h1>
                  <p>...</p>
                  <a href="/" class="btn btn-success">Start Now</a>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/image/13.jpeg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
              <h1>Build your brand</h1>
                  <p>...</p>
                  <a href="/" class="btn btn-success">Start Now</a>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/image/10.jpeg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                  <h1>Get your right audience</h1>
                  <p>...</p>
                  <a href="/" class="btn btn-success">Start Now</a>
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
      <div class="col col-md-2">


    </div>
    </div>
    </div>
   -->
{{-- why you choose us --}}
<div class="ss" style=" padding:15px; padding-bottom:40px;">
    <div class="container text-light" style="margin-top:50px;">
        <div class="text-center h3">Why you choose us </div>
        <div>
        <div class="row" style="margin-top:50px;">

                <div class="col col-md-3">
                    <h6>High Quality</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-3">
                    <h6>Support</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-3">
                    <h6>Connectig</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-3">
                    <h6>Follow up</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- what is ecommerce future --}}
<div class="container" style="margin-top:50px;">
        <div class="text-center h3">What is e-commerce future ? </div>
<div class="row" style="margin-top:50px;">
        <div class="col col-md-6">
            <img src="/image/4.jpg" />
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
            <img src="/image/11.jpeg"/>
        </div>
    </div>
</div>
<div class="container" style="margin-top:50px;">
<div class="row">
        <div class="col col-md-6">
            <img src="/image/9.jpeg" />
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

{{-- trusted --}}
<div class="ss" style=" padding:15px; padding-bottom:40px " >
<div class="container" style="margin-top:50px; color:#fff" >
        <div class="text-center h3">Trusted by over 300,000 businessess and merchants</div>
        <div>
        <div class="row" style="margin-top:50px; ">

                <div class="col col-md-3">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-3">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-3">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-3">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
            </div>

        </div>
    </div>
    </div>
{{-- case studies --}}

    <!-- case studies -->

    <div class="container border border-primary" style="margin-top:50px;">
    <div class="text-center">
    <span class=" h1 text-light ss " style="padding:10px">case studies</span>
    </div>
    <div class="row">
        <div class="col col-md-6">
            <img src="image/21.png" />
            <p> dedededfrferfr </p>
        </div>
        <div class="col col-md-6">
            <img src="image/21.png" />
            <p> dedededfrferfr </p>
        </div>
        <div class="col col-md-6">
            <img src="image/21.png" />
            <p> dedededfrferfr </p>
        </div>
        <div class="col col-md-6">
            <img src="image/21.png" />
            <p> dedededfrferfr </p>
        </div>
    </div>
    </div>
    {{--  --}}
<!-- <div class="container" style="margin-top:50px;"> -->
        <!-- <div class="text-center h3">Our Services</div>
        <div>
        <div class="row" style="margin-top:50px;">

                <div class="col col-md-2">
                    <h6>heading</h6>
                    <p>on hover change color</p>
                </div>
                <div class="col col-md-2">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-2">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-2">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-2">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
                <div class="col col-md-2">
                    <h6>heading</h6>
                    <p>vflv,flv,fvlf,vf,lf,vlf,vl,l</p>
                </div>
            </div>

        </div> -->
    <!-- </div> -->
    <!-- packages -->
<div class="ss" style=" padding-top:15px; padding-bottom:40px; margin-top:50px;">
    <div class="container" style="margin-top:50px; ">
        <div class="text-center h3 text-light">GET YOUR BEST PACKAGE OFFER NOW </div>
@include('user.plan')
    </div>
</div>
    <!-- about us -->

    <div class="container" style="margin-top:50px;">
        <h3 class=""> About Us</h3>
        <div class="row">
        <div class="col col-md-6">
        <span>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
         when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
         typesetting, remaining essentially unchanged. It was popularised in the 1960s with
         the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
         when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
         typesetting, remaining essentially unchanged. It was popularised in the 1960s with
         the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
         </span>
        </div>
        <div class="col col-md-6 ">
        <img src="/image/20.png" alt="about us" class="float-right"/>
        </div>
        </div>
    </div>

    <!-- contact us -->
    <div class="container"  style="margin-top:50px;">
        <h3>Get in Touch With Us</h3>
        <div>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label >Message</label>
                <textarea  class="form-control" rows="7"  placeholder="Type your message"></textarea>
            </div>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
    </div>

{{--  --}}
{{-- footer --}}

{{--  --}}
</section>
@endsection
