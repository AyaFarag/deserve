  <!--=========-TOP_BAR============-->
  <div class="topBar">
    <div class="container ">
      <ul class="list-inline pull-left hidden-sm hidden-xs">
        <li><span class="text-primary">Have a question? </span> Call +120 558 7885</li>
      </ul>
      <ul class="topBarNav pull-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-usd mr-5"></i>USD<i class="fa fa-angle-down ml-5"></i>
          </a>
          <ul class="dropdown-menu w-100" role="menu">
            <li><a href="#"><i class="fa fa-eur mr-5"></i>EUR</a>
            </li>
            <li class=""><a href="#"><i class="fa fa-usd mr-5"></i>USD</a>
            </li>
            <li><a href="#"><i class="fa fa-gbp mr-5"></i>GBP</a>
            </li>
          </ul>
        </li>
        
        @guest
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5"></i><span class="hidden-xs">My Account<i class="fa fa-angle-down ml-5"></i></span> </a>
          <ul class="dropdown-menu w-150" role="menu">

            <li><a href="{{ route('login') }}">Login</a>
            </li>
            <li><a href="{{ route('register') }}">Register</a>
            </li>
          </ul>
        </li>
        
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5"></i><span class="hidden-xs">{{ Auth::user()->name }}<i class="fa fa-angle-down ml-5"></i></span> </a>
          <ul class="dropdown-menu w-150" role="menu">

            <li><a href="register.html">My Account</a>
            </li>
            
            <li><a href="wishlist.html">Wishlist (5)</a>
            </li>

            <li><a href="cart.html">My Cart</a>
            </li>

            <li><a href="checkout.html">Checkout</a>
            </li>

            <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            
            </li>
          
          </ul>
        </li>
        @endguest
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-shopping-basket mr-5"></i> <span class="hidden-xs">
                                Cart<sup class="text-primary">(3)</sup>
                                <i class="fa fa-angle-down ml-5"></i>
                            </span> </a>
          <ul class="dropdown-menu cart w-250" role="menu">
            <li>
              <div class="cart-items">
                <ol class="items">
                  <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Sumi9xm@gmail.com</a> </p> <strong>1</strong> x <span class="price text-primary">$59.99</span> </div>
                    <!-- end product-details -->
                  </li>
                  <!-- end item -->
                  <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-Gy3KAlilHAw/WNf7a2eL5YI/AAAAAAAAD2Y/V3jUt14HiZA3HLpeOKkSaOu57efGuMw9ACL0B/w245-d-h318-n-rw/shoes_01.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Lorem Ipsum dolor sit</a> </p> <strong>1</strong> x <span class="price text-primary">$39.99</span> </div>
                    <!-- end product-details -->
                  </li>
                  <!-- end item -->
                  <li>
                    <a href="#" class="product-image"> <img src="https://lh3.googleusercontent.com/-ydDc-0L0WFY/WNf7a6Awe_I/AAAAAAAAD2Y/I8IzJtYRWegkOUxCZ5SCK6vbdiiSxVsCQCL0B/w245-d-h318-n-rw/bags_07.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Lorem Ipsum dolor sit</a> </p> <strong>1</strong> x <span class="price text-primary">$29.99</span> </div>
                    <!-- end product-details -->
                  </li>
                  <!-- end item -->
                </ol>
              </div>
            </li>
            <li>
              <div class="cart-footer"> <a href="#" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View
					Cart</a> <a href="#" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a> </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!--=========-TOP_BAR============-->
    
 <!--=========MIDDEL-TOP_BAR============-->
    
    <div class="middleBar ss">
    <div class="container">
  <div class="row display-table">
    <div class="col-sm-3 vertical-align text-left hidden-xs">
      <a href="{{ url('/') }}"> <img width="" src="https://lh3.googleusercontent.com/-r0Fhzz-so14/WNf9-4M65JI/AAAAAAAAD3E/ht6IhlL9gG4ujE2Hqiq70U3jBb6KQmaAQCL0B/w180-d-h43-p-rw/logo-2.png" alt=""></a>
    </div>
    <!-- end col -->
    <div class="col-sm-7 vertical-align text-center">

    </div>
    <!-- end col -->
    <div class="col-sm-2 vertical-align header-items hidden-xs">
      <div class="header-item mr-5">
        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist"> <i class="fa fa-heart-o"></i> <sub>32</sub> </a>
      </div>
      <div class="header-item">
        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"> <i class="fa fa-refresh"></i> <sub>2</sub> </a>
      </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end  row -->
</div>
</div>