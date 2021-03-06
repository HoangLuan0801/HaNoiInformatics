@section('meta_desc')
    Trường trung cấp tin học tài chính kế toán Hà Nội, đào tạo chuyên nghiệp tin học, tài chính, kế toán . Liên kết với doanh nghiệp và trường học tại Hàn Quốc
@endsection
@section('meta_key')
    Trung cấp, Đào tạo tin học, Tin học, Tuyển sinh tin học, Tuyển Sinh tài chính , Tuyển sinh kế toán, Tài chính, Kế toán, Trung cấp tin học tài chính kế toán Hà Nội, Hàn Quốc, Liên thông, TC, Ke toan, Tuyen sinh, Trung cap tin hoc, TC tin hoc, Tc tin hoc tai chinh ke toan
@endsection
@section('link')
    hifa.edu.vn
@endsection
@section('meta_desc')

@endsection
@extends('client.layouts.master')
@section('title')
    Trường trung cấp tin học tài chính kế toán Hà Nội
@endsection

@section('content')
    <div class="content w3layouts-agile">
        <div class="container">
            <div class="content-top wthee-agileinfo">
                <div class="col-md-6 content-top1">
                    <img src="{{url('/')}}/client_assets/images/pl.jpg" class="img-responsive" alt="">
                    <div class="content-plan">

                        <h6><a href="about.html">Lorem ipsum dolor sit</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                    </div>
                    <span class="locations">ENLIGHTEN</span>
                </div>
                <div class="col-md-6 content-top1">
                    <img src="{{url('/')}}/client_assets/images/pl1.jpg" class="img-responsive" alt="">
                    <div class="content-plan">

                        <h6><a href="services1.html">Lorem ipsum dolor sit</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                    </div>
                    <span class="locations">ENLIGHTEN</span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="content-top wthee-agileinfo">
                <div class="col-md-6 content-top1">
                    <img src="{{url('/')}}/client_assets/images/pl.jpg" class="img-responsive" alt="">
                    <div class="content-plan">

                        <h6><a href="about.html">Lorem ipsum dolor sit</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                    </div>
                    <span class="locations">ENLIGHTEN</span>
                </div>
                <div class="col-md-6 content-top1">
                    <img src="{{url('/')}}/client_assets/images/pl1.jpg" class="img-responsive" alt="">
                    <div class="content-plan">

                        <h6><a href="services1.html">Lorem ipsum dolor sit</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                    </div>
                    <span class="locations">ENLIGHTEN</span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="content-mid">
        <div class="col-md-3 content-mid1">
            <div class=" content-mid-img">
            </div>
        </div>

        <div class="col-md-7 content-mid2">
            <div class=" grid-middle">
                <div class=" grid-mid">
                    <label></label>
                    <h3>Tin tức</h3>
                    @foreach($list_new as $item)
                        <div class="news-top">
                            <div class=" col-md-6 latest-grid">
                                <div class="col-md-9 news-in">
                                    <h5><a href="/newletters/{{$item->alias}}"
                                           title="{{$item->name}}">{{$item->name}}</a></h5>
                                    <p>{!!$item->desc!!}</p>
                                </div>
                                <div class="col-md-3 news">
                                    <h4>{!!date_format($item->created_at,'d')!!}<span>
              <?php
                                            $so = date_format($item->created_at, 'm');
                                            switch ($so) {
                                                case 1:
                                                    echo "Jan";
                                                    break;
                                                case 2:
                                                    echo "Feb";
                                                    break;
                                                case 3:
                                                    echo "Mar";
                                                    break;
                                                case 4:
                                                    echo "Apr";
                                                    break;
                                                case 5:
                                                    echo "May";
                                                    break;
                                                case 6:
                                                    echo "Jun";
                                                    break;
                                                case 7:
                                                    echo "Jun";
                                                    break;
                                                case 8:
                                                    echo "Aug";
                                                    break;
                                                case 9:
                                                    echo "Sep";
                                                    break;
                                                case 10:
                                                    echo "Oct";
                                                    break;
                                                case 11:
                                                    echo "Nov";
                                                    break;
                                                default:
                                                    echo "Dec";
                                                    break;
                                            }
                                            ?>
            </span></h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-2 content-mid1">
            <div class=" content-mid-img1">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="content-mid">
        <div class="col-md-3 content-mid1">
            <div class=" content-mid-img">

            </div>
        </div>

        <div class="col-md-7 content-mid2">
            <div class=" grid-middle">
                <div class=" grid-mid">
                    <label></label>
                    <h3> Tin mới nhất</h3>
                    @foreach($new_news as $item)
                        <div class="news-top">
                            <div class=" col-md-6 latest-grid">
                                <div class="col-md-9 news-in">
                                    <h5><a href="#" title="{{$hot_new->title}}">{{$item->name}}</a></h5>
                                    <p>{!!$item->desc!!}</h5>
                                </div>
                                <div class="col-md-3 news">
                                    <h4>{!!date_format($item->created_at,'d')!!}<span>
              <?php
                                            $so = date_format($item->created_at, 'm');
                                            switch ($so) {
                                                case 1:
                                                    echo "Jan";
                                                    break;
                                                case 2:
                                                    echo "Feb";
                                                    break;
                                                case 3:
                                                    echo "Mar";
                                                    break;
                                                case 4:
                                                    echo "Apr";
                                                    break;
                                                case 5:
                                                    echo "May";
                                                    break;
                                                case 6:
                                                    echo "Jun";
                                                    break;
                                                case 7:
                                                    echo "Jun";
                                                    break;
                                                case 8:
                                                    echo "Aug";
                                                    break;
                                                case 9:
                                                    echo "Sep";
                                                    break;
                                                case 10:
                                                    echo "Oct";
                                                    break;
                                                case 11:
                                                    echo "Nov";
                                                    break;
                                                default:
                                                    echo "Dec";
                                                    break;
                                            }
                                            ?>
            </span></h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-2 content-mid1">
            <div class=" content-mid-img1">
            </div>
        </div>
    </div>
    <div class="feature">
        <div class="container">
            <div class="feature-top">
                <label></label>
                <h3>Special Care On Students</h3>
            </div>
            <div class="feature-grid">
                <div class="col-md-4 feature-grid">
                    <h5><a href="single.html">Consectetur adipisicing</a></h5>
                    <div class=" fe-grid">
                        <i class="glyphicon glyphicon-map-marker"></i>
                        <div class="feature-text">
                            <p>Tempor Street Lorem ipsum dolor,
                                TL 19034-88974, Country</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <a href="single.html"><img src="{{url('/')}}/client_assets/images/pc.jpg" class="img-responsive"
                                               alt=""></a>
                    <a href="single.html" class="read"> Read More</a>
                </div>
                <div class="col-md-4 feature-grid">
                    <h5><a href="single.html">Consectetur adipisicing</a></h5>
                    <div class=" fe-grid">
                        <i class="glyphicon glyphicon-map-marker"></i>
                        <div class="feature-text">
                            <p>Tempor Street Lorem ipsum dolor,
                                TL 19034-88974, Country</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <a href="single.html"><img src="{{url('/')}}/client_assets/images/pc1.jpg"
                                               class="img-responsive" alt=""></a>
                    <a href="single.html" class="read"> Read More</a>
                </div>
                <div class="col-md-4 feature-grid">
                    <h5><a href="single.html">Consectetur adipisicing</a></h5>
                    <div class=" fe-grid">
                        <i class="glyphicon glyphicon-map-marker"></i>
                        <div class="feature-text">
                            <p>Tempor Street Lorem ipsum dolor,
                                TL 19034-88974, Country</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <a href="single.html"><img src="{{url('/')}}/client_assets/images/pc2.jpg"
                                               class="img-responsive" alt=""></a>
                    <a href="single.html" class="read"> Read More</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--map-->
    <div class="map-top w3layouts-agile">
        <div class="map wl-agileinfo">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833"></iframe>
            <span></span>
        </div>
        <div class="address">
            <label></label>
            <h4>Consectetur adipisicing</h4>
            <p>Sed do eiusmod tempor incididunt ut</p>
            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
        </div>
    </div>
    <!--//map-->
    <!---->
    <div class="container">
        <div class="content-bottom">


            <div class="col-md-4 address-grid">
                <h5>Address</h5>
                <p>Lorem ipsum dolor,
                    TL 19034-88974</p>

            </div>
            <div class="col-md-4 address-grid ">

                <h5>Our Phone</h5>
                <p>+123456789</p>

            </div>
            <div class="col-md-4 address-grid ">

                <h5>Email</h5>
                <p><a href="mailto:info@example.com"> Lorem@example.com</a></p>

            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!--//-->

    </div>
@endsection