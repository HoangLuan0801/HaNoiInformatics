<div class="header">
  <div class="container">
    <div class="header-menu">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      @if(count($menu) > 0)
        @foreach($menu as $item)
            <?php
              $sub_menu = App\Category::orderBy('orderBy','desc')->where('parentID',$item->id)->get();
             ?>
      <li class="dropdown">
        <a href="{{url('/')}}/categories/{{$item->alias}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$item->name}} <span class="caret"></span></a>
        <ul class="dropdown-menu">
        @foreach($sub_menu as $sub)
         <li class="item-1">
            <a href="{{url('/')}}/categories/{{$sub->alias}}">
              <span>{{$sub->name}}</span>
            </a>
         </li>
        @endforeach
        </ul>
      </li>
      @endforeach
      @endif
    </div>
   </div>
  </nav>
    <!-- start search-->
    
  <div class="search-box">
     <div id="sb-search" class="sb-search">
       <form action="#" method="post">
           <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
           <input class="sb-search-submit" type="submit" value="">
           <span class="sb-icon-search"> </span>
      </form>
      </div>
   </div>
  <div class="clearfix"></div>
</div>
          
        <div class="number">
            <p>+123456789</p>
        </div>
        <div class="logo">
            <a href="index.html"><img src="{{url('/')}}/client_assets/images/logo.png" alt=""><span>E</span>NLIGHTEN</a>
        </div>
        <div class="banner">
            <h1>Education is the movement  </h1>
            <h2>From  darkness to light</h2>
        </div>
    </div> 
</div>
