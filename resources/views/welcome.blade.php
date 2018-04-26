<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <title>Meteorology Department</title>
    
  <link rel="stylesheet" href="client/css/bootstrap.min.css">
  <link rel="stylesheet" href="client/css/font-awesome.min.css">
  <link rel="stylesheet" href="client/css/slick.css">
  <link rel="stylesheet" href="client/css/owl.carousel.css">
  <link rel="stylesheet" href="client/css/animate.min.css">
  <link rel="shortcut icon" type="client/img/icon" href="client/images/icon_2.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,700i,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Karma:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="client/css/style.css">
    <!-- Prepared By Md. Fajael Ibne Bashar & Arafat Ahmed Tanim -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <header>
    <div class="main_header">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-right part hidden-xs hidden-sm">
            <ul class="communication">
              <li>
                <a href="https://www.google.com/gmail/about/#" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;towhida_rashid@du.ac.bd</a>
              </li>
            </ul>
          </div>
                   
          <div class="col-sm-2 text-center part hidden-xs hidden-sm">
            <ul class="communication">
              <li>
                <a href=""><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88-01711-014610</a>
              </li>
            </ul>
          </div>
                   
          <div class="col-xs-12 col-sm-2 text-right">
            <ul class="social_media">
              <li>
                <a href="http://bmd.gov.bd/?/home/" data-toggle="tooltip" data-placement="bottom" title="BMD" target="_blank"><i class="fa fa-sun-o" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="http://www.imd.gov.in/pages/main.php" data-toggle="tooltip" data-placement="bottom" title="IMD" target="_blank"><i class="fa fa-star-o" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="https://www.msn.com/en-us/weather/today/dhakadhakabangladesh/we-city?q=dhaka&form=PRWLAS&iso=BD&el=erUH%2fhfJrrB2dnzg9uWGfg%3d%3d" data-toggle="tooltip" data-placement="bottom" title="Weather news" target="_blank"><i class="fa fa-bolt" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="http://www.du.ac.bd/home" data-toggle="tooltip" data-placement="bottom" title="DU Website" target="_blank"><i class="fa fa-universal-access" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
   <!--end of header-->
  
  <section id="full_banner">
    <div class="next_arrow"><i class="fa fa-angle-right nxt" aria-hidden="true"></i></div>
    <div class="previous_arrow"><i class="fa fa-angle-left prv" aria-hidden="true"></i></div>
    <div class="banner">
      <div class="full_menu">
        <div class="menu_padd">
          <div class="container cnt for_logo">
            <nav class="navbar navbar-default menu">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_brand">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand brand_size" href="index.html"><h4>DEPARTMENT OF<br>METEOROLOGY</h4></a>
                </div>
                        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu_option" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right menu_link">
                    <li class="dropdown">
                      <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#test_tab">Video Class</a></li>
                        <li><a href="{{ url('/paper_submit') }}" target="_blank">Paper Submit</a></li>
                        <li><a href="{{ url('/live_stream')}}" target="_blank">LIVE Streaming</a></li>
                        <li><a href="{{ url('/payment')}}" target="_blank">Payment</a></li>
                        <li><a href="{{ url('/c_staff')}}" target="_blank">Staff</a></li>
                      </ul>
                    </li>
                            
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COURSES<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/ms_course') }}" target="_blank">M.Sc. in Meteorology</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('/c_event') }}" target="_blank">EVENT</a></li>
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIBRARY<span class="caret"></span></a>
                        <ul class="dropdown-menu ">
                          <li><a href="{{ url('/dept_library') }}" target="_blank">Book List</a></li>
                          <li><a href="{{ url('/pdf_book') }}" target="_blank">PDF Books</a></li>
                          <li><a href="{{ url('/google_scholar')}}" target="_blank">Google Scholar</a></li>
                        </ul>
                    </li>
                            
                    <li><a href="{{ url('/c_faculty')}}" target="_blank">FACULTY</a></li>
                    <li><a href="{{ url('/c_research')}}" target="_blank">RESEARCH</a></li>
                    <li><a href="{{ url('/c_contact') }}" target="_blank">CONTACT US</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            
            <div class="du_logo hidden-xs hidden-sm">
              <a href="#"><img src="client/images/icon_2.png" height="52" width="35" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <!--end of menu-->
          
      <div class="slick_slider">
        <div class="full_slider" style="background: url(client/images/lab1.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">learn</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["METEOROLOGY"]'></span></h3>
                  <p class="text-center">an investment in knowledge pays the best inrerest</p>
                  <a href="{{url('/prospectus')}}" class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>   
        <!--slider1-->

        <div class="full_slider" style="background: url(client/images/class1.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">learn</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["FORECASTING"]'></span></h3>
                  <p class="text-center">when i am silent i have thunder hidden inside</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider-->

        <div class="full_slider" style="background: url(client/images/flood2.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">learn</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["METEOROLOGY"]'></span></h3>
                  <p class="text-center">educating the mind without educating the heart is no education at all</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider2-->
           
        <div class="full_slider" style="background: url(client/images/drought2.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">dynamic</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["METEOROLOGY"]'></span></h3>
                  <p class="text-center">look deep into nature,you'll understand everything better</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider3-->
           
        <div class="full_slider" style="background: url(client/images/cyclone3.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">tropical</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["METEOROLOGY"]'></span></h3>
                  <p class="text-center">learn as if you were to live forever</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider4-->
           
        <div class="full_slider" style="background: url(client/images/thunder3.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">aviation</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["METEOROLOGY"]'></span></h3>
                  <p class="text-center">when i am silent i have thunder hidden inside</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider5-->
           
        <div class="full_slider" style="background: url(client/images/crop1.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">agro</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["METEOROLOGY"]'></span></h3>
                  <p class="text-center">when i am silent i have thunder hidden inside</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider6-->
           
        <div class="full_slider" style="background: url(client/images/heat_wave.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">climate</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["CHANGE"]'></span></h3>
                  <p class="text-center">an investment in knowledge pays the best inrerest</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider7-->
           
        <div class="full_slider" style="background: url(client/images/autumn1.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">climate</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["CHANGE"]'></span></h3>
                  <p class="text-center">when i am silent i have thunder hidden inside</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider8-->
           
        <div class="full_slider" style="background: url(client/images/winter1.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">climate</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["CHANGE"]'></span></h3>
                  <p class="text-center">when i am silent i have thunder hidden inside</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider9-->
           
        <div class="full_slider" style="background: url(client/images/spring1.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">agro</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["METEOROLOGY"]'></span></h3>
                  <p class="text-center">when i am silent i have thunder hidden inside</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider10-->
           
        <div class="full_slider" style="background: url(client/images/sealevel1.jpg) center center;background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="banner_txt text-center text-uppercase">
                  <h3><span class="orange">climate</span>&nbsp;&nbsp;<span class="white txt-rotate" data-period="1500" data-rotate='["CHANGE"]'></span></h3>
                  <p class="text-center">when i am silent i have thunder hidden inside</p>
                  <a href="{{url('/prospectus')}}"  class="btn btn_radius text-uppercase">our prospectus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--slider11-->
      </div>
    </div>

    <div class="container cnt new_notice hidden-xs hidden-sm">
        <div class="row rw slick_newnotice_slider">
          @foreach ($notices as $notice)
          @if($notice->type==1)
          <div class="col-xs-12 col-sm-3 cl for_border">
            <div class="new_notice_main">
              <div class="new_notice_icon">
                <img src="client/images/notice_2.png" class="img-responsive img-circle" alt="notice">
              </div>
                  
              <div class="new_notice_text text-center">
                <a href="#"><h4>{{$notice->heading}}</h4></a>
                <ul class="notice_time_tab">
                  <li>
                    <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{date('d,M,Y', strtotime($notice->created_at))}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          @endif
          @endforeach           
        </div>
      </div>
   </section>

  <!--end of banner-->
  <section id="responsive_notice" class="hidden-md hidden-lg">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="res_notice_heading text-center text-uppercase">
            <h3>notice</h3>
          </div>
        </div>
      </div>
           
      <div class="row">
        <div class="res_notice_main slick_res_notice_slider">
          <div class="col-xs-12">
            @foreach ($notices as $notice)
            @if($notice->type==1)
            <div class="notice_body text-center">
              <div class="icon_notice">
                <i class="fa fa-sun-o" aria-hidden="true"></i>
              </div>
              
              <div class="text_notice">
                <a href="#"><h4>{{$notice->heading}}</h4></a>
                <ul class="text_notice_time">
                  <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{date('d,M,Y', strtotime($notice->created_at))}}</a></li>
                </ul>
              </div>
            </div>
            @endif
            @endforeach
          </div>
          <!--res notice1-->
        </div>
      </div>
    </div>
  </section>
  <!--end of responsive notice-->
   
  <section id="welcome">
       <div class="container">
           <div class="row">
               <div class="col-sm-12">
                   <div class="welcome_meterology common_heading  text-center text-uppercase">
                       <h1>welcome to <span class="red">department of meteorology</span></h1>
                   </div>
                   <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, quod quia voluptatum ipsam dignissimos ullam accusamus,<br> optio ipsum perferendis nemo.</p>
               </div>
           </div>
           <div class="row">
               <div class="col-sm-4">
                   <div class="tsthobe wow zoomIn" data-wow-duration="2s" data-wow-offset="10" data-wow-delay="0.1s">
                       <div class="postn"><i class="fa fa-magnet edu_icon" aria-hidden="true"></i></div>
                       <h4 class="prof_edu">PROFESSIONAL TRAINING</h4>
                       <p class="prof_edu_design">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laboriosam, doloribus aliquid eligendi beatae recusandae officia rem voluptatibus architecto ratione.</p>
                   </div>
               </div>
               <div class="col-sm-4">
                   <div class="tsthobe wow zoomIn" data-wow-duration="2s" data-wow-offset="10" data-wow-delay="0.1s">
                       <div class="postn"><i class="fa fa-book edu_icon" aria-hidden="true"></i></div>
                       <h4 class="prof_edu">WEATHER FORECASTING</h4>
                       <p class="prof_edu_design">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laboriosam, doloribus aliquid eligendi beatae recusandae officia rem voluptatibus architecto ratione.</p>
                   </div>
               </div>
               <div class="col-sm-4">
                   <div class="tsthobe wow zoomIn" data-wow-duration="2s" data-wow-offset="10" data-wow-delay="0.1s">
                       <div class="postn"><i class="fa fa-pencil edu_icon" aria-hidden="true"></i></div>
                       <h4 class="prof_edu">METEOROLOGICAL EDUCATION</h4>
                       <p class="prof_edu_design">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laboriosam, doloribus aliquid eligendi beatae recusandae officia rem voluptatibus architecto ratione.</p>
                   </div>
               </div>
           </div>
           <div class="row">
             
           </div>
       </div>
   </section>
   <!--end of welcome meterology depatment-->
   <section id="jquery_counter_up">
       <div class="container">
           <div class="counter-up">
               <div class="row">
                   <div class="col-sm-3">
                       <div class="counter1 text-center">
                           <div class="counter_icon"><i class="fa fa-user counter_icon_design" aria-hidden="true"></i></div>
                           <h1 class="cnt_up_heading"><span class="counter">{{sizeof($teachers)}}</span></h1>
                           <p class="cnt_up_heading">TEACHERS</p>
                       </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="counter1 text-center">
                           <div class="counter_icon"><i class="fa fa-users counter_icon_design" aria-hidden="true"></i></div>
                           <h1 class="cnt_up_heading"><span class="counter">{{sizeof($students)}}</span></h1>
                           <p class="cnt_up_heading">STUDENTS</p>
                       </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="counter1 text-center">
                           <div class="counter_icon"><i class="fa fa-calendar counter_icon_design" aria-hidden="true"></i></div>
                           <h1 class="cnt_up_heading"><span class="counter">2</span></h1>
                           <p class="cnt_up_heading">YEARS EXPERIENCE</p>
                       </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="counter1 text-center">
                           <div class="counter_icon"><i class="fa fa-trophy counter_icon_design" aria-hidden="true"></i></div>
                           <h1 class="cnt_up_heading"><span class="counter">0</span></h1>
                           <p class="cnt_up_heading">AWARDS</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--end of jquery counter up-->
   <section id="vc_speech">
        <div class="full_vcspeech">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-4">
                   <div class="vc_said">
                       <div class="vc_photo">
                           <a href="https://en.wikipedia.org/wiki/Mohammad_Akhtaruzzaman" target="_blank"><img src="client/images/vcSir.jpg" class="img-responsive" height="150" width="120" alt="vc"></a>
                       </div>
                       <div class="vc_text">
                           <h3>what vice-chancellor said</h3>
                           <p>The move aims to help the public university function smoothly after the tenure of vice-chancellor AAMS Arefin Siddique ended last month, the government said in a notice on Monday.Prior to his new assignment, he was the pro-vice chancellor of the university.Akhtaruzzaman, 53, joined Dhaka University’s Department of Islamic History and Culture as a lecturer in 1990. He was elevated to professorship in 2004.He did his PhD in history from Aligarh Muslim University in India. He is a Fulbright scholar, according to the Dhaka University website."The education minister just now informed me about the matter by phone," the teacher, hailing from Barguna's Patharghata, told bdnews24.com.File Photo: Prof Md Akhtaruzzaman at bdnews24.com's 10th anniversary celebrations on Oct 23, 2016.First of all I would like to welcome all my colleagues and students of the Department of Meteorology under the Faculty of Earth and Environmental Sciences, University of Dhaka. </p>
                           <h5>Prof. Akhtaruzzaman<br>Vice-Chancellor<br>University of Dhaka</h5>
                       </div>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4">
                  <div class="dean_chairman">
                      <div class="dean">
                       <div class="dean_photo img-right">
                           <a href="https://www.researchgate.net/profile/A_S_M_Kamal" target="_blank"><img src="client/images/dean.PNG" class="img-responsive" height="150" width="120" alt="dean"></a>
                       </div>
                       <div class="dean_speech vc_text vc_text_edit">
                           <h3>what dean said</h3>
                           <p>It is a recognized fact that Bangladesh is one of the most vulnerable countries to climate change, and with the least existing capacity to adapt. It is also a known fact that most of our disasters have meteorological connections. In Bangladesh, there is no undergraduate or postgraduate program in Meteorology within the country that can support development of a cohort of professionals who could help foster public or private sector delivery of weather services.We are very happy to announce that recently University of Dhaka has opened the Department of Meteorology (DoM) under the Faculty of Earth and Environmental Sciences with a vision to make it one of the top scientific and research oriented departments. The Department of Meteorology has started with a long term vision to meet up the current and future need for meteorological graduates in the country for weather forecasting, disaster warning and in other fields of weather application. These include experts on early warning of meteorological and hydrological events, aviation meteorologists, agro-meteorologists, hydro-meteorologist, ocean meteorologists, numerical weather prediction (NWP) modelers and climate change experts. It will also satisfy the need for those working on Global Climate Models (GCMs) and Regional Climate Models (RCMs) dealing with the relevant problems, policies, issues for saving lives, properties and ensuring food security and sustainable development.<br>First of all I would like to welcome all my colleagues and students of the Department of Meteorology under the Faculty of Earth and Environmental Sciences, University of Dhaka. It is indeed an achievement to be able to start this department in this prime University of the country. It is an exciting time to study the Meteorology, because of its importance to humanity as well as its intellectual stimulation. We hope to make this department one of the leading departments.<br>I wish every success of the Department of Meteorology, Faculty of Earth and Environmental Sciences, University of Dhaka.</p>
                           <h5>Prof. Dr. A.S.M. Maksud Kamal<br>Dean<br>Faculty of Earth and Environmental Sciences<br>University of Dhaka</h5>
                       </div>
                   </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4">
                   <div class="chairman">
                       <div class="chairperson_photo">
                           <a href="http://www.du.ac.bd/faculty/faculty_details/DEMET/1882" target="_blank"><img src="client/images/chairperson.JPG" class="img-responsive" height="150" width="120" alt="chairperson"></a>
                       </div>
                       <div class="chairperson_speech vc_text vc_text_edit">
                           <h3>what chairperson said</h3>
                           <p>A warm greeting! The Department of Meteorology started its journey in 2016 with a vision to provide international standard high-quality education and research in the area of meteorological hazards and climate change. As meteorological hazards and climate change are two crucial phenomena, the whole world is experiencing now; the department would like to produce some quality meteorologist to cope with those phenomena.<br>Bangladesh is regularly exposed to extreme weather events such as tropical cyclones associated with storm surges, floods, severe thunderstorms and drought due to the geographical location and Bangladesh is considered one of the most disaster-prone and climate vulnerable countries in the world. As a result, the country needs expertise in this field to develop its own capacity.<br>To save the country from impending meteorological issues, skilled meteorologists are required who can serve the nation through early warning and advanced forecasting. Meteorologists also can contribute significantly to the economy such as agriculture, fisheries, the water sector, weather forecasting, aviation, and disaster management. This is how the department has emerged.<br>The Department of Meteorology is going to take qualified faculty members, and also in the process of setting up excellent teaching and research facilities such as labs, well trained lab assistants, adequate classrooms, data accessibility sources and adequate research facilities.<br>You are always welcome to join our journey.</p>
                           <h5>Prof. Dr. Towhida Rashid<br>Chairperson<br>Department of Meteorology<br>University of Dhaka</h5>
                       </div>
                   </div>
               </div>
           </div>
        </div>
   </section>
   <!--end of vc speech-->
   <section id="submit_paper">
       <div class="full_section" id="main" data-stellar-background-ratio="0.1">
           <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="paper_submission text-capitalize text-center">
                          <h3>we believe that education for everyone since</h3>
                          <h1>2016</h1>
                          <a href="{{ url('/paper_submit') }}" target="_blank" class="btn btn_radius text-uppercase">submit paper</a>
                      </div>
                  </div>
              </div>
           </div>
       </div>
   </section>
   <!--end of paper submission-->
   <section id="test_tab">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <div class="career">
            <div class="welcome_meterology common_heading text-center text-uppercase">
              <h3>career with <span class="red">meteorology</span></h3>
            </div>
                        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ab facere suscipit deserunt molestiae! Maxime reiciendis quia quam assumenda molestiae repudiandae vero at voluptatum eius numquam nam adipisci voluptas debitis similique facere rerum eligendi ut magnam, maiores consequatur! Quod dolor soluta totam cum aperiam nisi ad magnam odio, quas porro?</p>
                        
            <div class="career_icon hidden-xs hidden-sm">
              <div class="icon_line1">
                <div class="icon1">
                  <div class="icon1_img"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                  <div class="icon1_txt"><h5>Good Planning</h5><p>Lorem ipsum dolor sit.</p></div>
                </div>
                
                <div class="icon2">
                  <div class="icon1_img"><i class="fa fa-book" aria-hidden="true"></i></div>
                  <div class="icon1_txt"><h5>Well Meteorologist</h5><p>Lorem ipsum dolor sit.</p></div>
                </div>
              </div>
                            
              <div class="icon_line2">
                <div class="icon1">
                  <div class="icon1_img"><i class="fa fa-snowflake-o" aria-hidden="true"></i></div>
                  <div class="icon1_txt"><h5>Weather Forecasting</h5><p>Lorem ipsum dolor sit.</p></div>
                </div>
                                
                <div class="icon2">
                  <div class="icon1_img"><i class="fa fa-superpowers" aria-hidden="true"></i></div>
                  <div class="icon1_txt"><h5>Climate Research</h5><p>Lorem ipsum dolor sit.</p></div>
                </div>
              </div>
                            
              <div class="icon_line3">
                <div class="icon1">
                  <div class="icon1_img"><i class="fa fa-arrows" aria-hidden="true"></i></div>
                  <div class="icon1_txt"><h5>Government Project</h5><p>Lorem ipsum dolor sit.</p></div>
                </div>
                                
                <div class="icon2">
                  <div class="icon1_img"><i class="fa fa-deaf" aria-hidden="true"></i></div>
                  <div class="icon1_txt"><h5>Higher Study</h5><p>Lorem ipsum dolor sit.</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end of career-->
                
        <div class="col-xs-12 col-sm-4">
          <div class="bootstrap_tab">
            <div class="tab_head text-center">
              <h3>VIDEO CLASS</h3>
            </div>
                    
            <div class="slick_tab_slider">
              @foreach ($videos as $video) 
              <div class="video_class text-left text-uppercase">
                <h4>Watch {{$video->name}}</h4>
                <a href="{{$video->link}}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              </div>
              <!--video1-->
              @endforeach      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end of tab-->
   
  <section id="payment">
    <div class="full_payment">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="payment_gatewat paper_submission text-capitalize text-center">
              <h3><span class="gateway_design_heading">applications are</span> now open</h3>
                <p class="gateway_design_para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ex dolorem dolore hic quisquam in.</p>
                <a href="#" class="btn btn_radius text-uppercase">get started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end of our payment-->
    
  <section id="teachers">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="common_heading  text-center text-uppercase">
            <h1>our respected <span class="red">teachers</span></h1>
          </div>
        </div>
      </div>
      

            
      <div class="row for_margin slick_teacher_slider">
        @foreach ($teachers as $teacher)
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="notice_image notice_margin min_height1">
            <img src="/uploads/image/{{$teacher->image}}" class="img-responsive" alt="notice">
              <div class="notice_text">
                <h4 class="notice_heading">{{$teacher->name}}</h4>
                <p class="designation">{{$teacher->des}}</p>
                <p class="designation">Department of Meteorology<br>University of Dhaka</p>
                <ul>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;{{$teacher->deg}}</li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach    
        </div>
        

        <div class="row">
          <div class="col-sm-12">
            <div class="more_teachers text-center">
              <a href="{{ url('/c_faculty')}}" target="_blank" class="btn btn_radius text-uppercase yellow">more teachers</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end of our teachers-->
  
    <section id="course">
      <div class="full_course">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="common_heading heading_change  text-center text-uppercase">
                <h1>our popular <span class="red">courses</span></h1>
              </div>
            </div>
          </div>
           
          <div class="row">
            <div class="course_details" id="main_course">
              <div class="col-xs-12 col-sm-4">
                <div class="notice_image notice_margin course_image">
                  <img src="client/images/radar.jpg" class="img-responsive" alt="notice">
                  <div class="course_text">
                    <h4 class="course_heading">radar & satellite meteorology</h4>
                    <a href="course.html" target="_blank" class="">LEARN MORE</a>
                  </div>
                </div>
              </div>
               
              <div class="col-xs-12 col-sm-4">
                <div class="notice_image notice_margin course_image">
                  <img src="client/images/wind.jpg" class="img-responsive" alt="notice">
                  <div class="course_text">
                    <h4 class="course_heading">climatology & climate change </h4>
                    <a href="course.html" target="_blank" class="">LEARN MORE</a>
                  </div>
                </div>
              </div>
               
              <div class="col-xs-12 col-sm-4">
                <div class="notice_image notice_margin course_image">
                  <img src="client/images/course2.jpg" class="img-responsive" alt="notice">
                  <div class="course_text">
                    <h4 class="course_heading">aviation meteorology </h4>
                    <a href="course.html" target="_blank" class="">LEARN MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <!--end of courses-->
    
    <section id="gallery">
       <div class="container">
          <div class="row">
              <div class="col-sm-12">
                   <div class="common_heading  text-center text-uppercase">
                       <h1>our  <span class="red">gallery</span></h1>
                   </div>
              </div>
          </div>
          <div class="row showcase_slider">
             <div class="col-xs-12 col-sm-12">
                 <carousel-3d :autoplay="true" :autoplay-timeout="2000" :display="5">
                    <slide :index="0">
                        <a href=""><img src="client/images/3dslider1.jpg" class="img-responsive" alt="3d"></a>
                    </slide>
                    <slide :index="1">
                       <a href=""><img src="client/images/3dslider2.jpg" class="img-responsive" alt="3d"></a>
                    </slide>
                    <slide :index="2">
                       <a href=""><img src="client/images/3dslider3.jpg" class="img-responsive" alt="3d"></a>
                    </slide>
                    <slide :index="3">
                       <a href=""><img src="client/images/3dslider4.jpg" class="img-responsive" alt="3d"></a>
                    </slide>
                    <slide :index="4">
                       <a href=""><img src="client/images/3dslider5.jpg" class="img-responsive" alt="3d"></a>
                    </slide>
                </carousel-3d>
             </div>
          </div>
          <div class="row">
              <div class="col-sm-12">
                  <div class="view_photos text-center">
                      <a href="gallery.html" target="_blank" class="btn btn_radius text-uppercase">view more photos</a>
                  </div>
              </div>
          </div>
       </div>
   </section>
   <!--end of gallery-->
   <section id="our_video">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="video_container">
                        <h3>play our video</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui veniam,</p>
                        <button type="button" class="btn btn-info btn-lg video_btn" data-toggle="modal" data-target="#myModal">
                  <i class="fa fa-play-circle video_paly" aria-hidden="true"></i>
                    </button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">our feater video</h4>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="https://www.youtube.com/embed/2Ln2k8KDn4M"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default close_btn" data-dismiss="modal">
                      <i class="fa fa-times video_close"></i>
                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of our video-->
   <section id="contact">
        <div class="container">
            <div class="row full_contact">
                <div class="col-sm-6 col-xs-12">
                    <div class="contact_us">
                        <h3>Contact us</h3>
                        <p>The set doesn't moved. Deep don't fruit fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.The set doesn't moved. Deep don't fruit fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.</p>
                        <ul>
                            <li><a href="contact.html" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Kazi Motahar Hossain Bhaban, Dhaka-1000</a></li>
                            <li><a href="contact.html" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;+880-2-9661920-73 Extn. 7274(Off.)</a></li>
                            <li><a href="https://www.google.com/gmail/about/#" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp; towhida_rashid@du.ac.bd</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="message">
                        <h3>Send Message</h3>
                        <form action="" method="post">
                           <div class="dd">
                              <input type="text" name="name" id="" class="name" placeholder="Your Name"> 
                           </div>
                            <div class="ff">
                               <input type="text" name="mail" id="" class="email" placeholder="Your Email"> 
                            </div>
                            <div class="jj">
                               <input type="text" name="mail" id="" class="subject" placeholder="Your Subject"> 
                            </div>
                            <div class="gg">
                                <textarea name="message" id="" class="sms" placeholder="Message"></textarea>
                            </div>
                        </form>
                        <button type="submit" class="send">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of contact-->
   <section id="full_footer">
        <div class="full_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-xs hidden-sm">
                       <div class="logo">
                           <a href=""><img src="client/images/icon_1.png" alt="logo"></a>
                       </div>
                       <div class="monogram">
                           <h4>department of meteorology</h4>
                           <h5>faculty of earth and environmental science</h5>
                           <h6>university of dhaka</h6>
                           <h6>dhaka-1000</h6>
                           <h6>Bangladesh</h6>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="footer_box">
                           <ul class="footer_opt">
                            <h3>Useful Links</h3>
                            <li><a href="paper_submit.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Paper Submit</a></li>
                            <li><a href="https://www.msn.com/en-us/weather/today/dhakadhakabangladesh/we-city?q=dhaka&form=PRWLAS&iso=BD&el=erUH%2fhfJrrB2dnzg9uWGfg%3d%3d"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Weather News</a></li>
                            <li><a href="course.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Courses</a></li>
                            <li><a href="http://www.du.ac.bd/home"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;DU Website</a></li>
                            <li><a href="faculty.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;Faculty</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;FAQ</a></li>
                        </ul>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer_box">
                           <ul class="footer_opt">
                            <h3>About Us</h3>
                            <p>LIVE AS IF YOU WERE TO DIE TOMORROW. LEARN AS IF YOU WERE TO LIVE FOREVER.</p>
                            <h3>Follow Us</h3>
                            <ul class="follow">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC6ZtMh7TinZHymePbdkWJUQ"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="last">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                       <div class="copy_right text-left">
                            <p>Copyright © 2018 Department of Meteorology | All Rights Reserved</p>
                       </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="prepared text-right">
                            <p>Prepared By: Md. Fajael Ibne Bashar & Arafat Ahmed Tanim</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <button class="top hidden-xs"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
    <!--end of all-->
    <script src="client/js/jquery-2.1.3jquery.min.js"></script>
    <script src="client/js/bootstrap.min.js"></script>
    <script src="client/js/slick.min.js"></script>
    <script src="client/js/jquery.counterup.min.js"></script>
    <script src="client/js/jquery.sliphover.min.js"></script>
    <script src="client/js/waypoints.min.js"></script>
    <script src="client/js/isotope.pkgd.min.js"></script>
    <script src="client/js/jquery.stellar.min.js"></script>
    <script src="client/js/particles.js"></script>
    <script src="client/js/app.js"></script>
    <script src="client/js/vue-carousel-3d.min.js"></script>
    <script src="client/js/vue.js"></script>
    <script src="client/js/wow.min.js"></script>
    <script src="client/js/custom.js"></script>
    <script>
        $(function(){
           new WOW().init(); 
        });
    </script>
    <script>
        $(function(){
            $(window).stellar({
                responsive: true,
            });
        });
    </script>
    <script>
    $("#container").sliphover();
    </script>
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
</body>
</html>