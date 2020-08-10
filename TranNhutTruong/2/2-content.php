<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>



<div class="type-2">

  <!-- Header -->
  <header id="top" class="header-home">
    <div class="brand-panel">
      <a class="brand js-target-scroll" href="./">
        go<span class="text-primary">.</span>arch </a>
      <div class="brand-name">Go.arch</div>
    </div>
    <div class="header-phone">+9 (875) 456-09-28</div>
    <div class="vertical-panel"></div>
    <div class="vertical-panel-content">


    </div>

    <!-- Navigation Desctop -->
    <nav class="navbar-desctop visible-md visible-lg">
      <div class="container">
        <a class="brand js-target-scroll" href="./">
          go<span class="text-primary">.</span>arch </a>
        <div class="navbar-desctop-menu">

          <ul class="menu">
            <li class="item-101  deeper dropdown parent"><a class="dropdown-toggle" href="./homepage">Home <i class="fa fa-angle-down"></i></a>
              <ul>
                <li class="item-108"><a href="#">Home - Light</a></li>
                <li class="item-109 active"><a href="./">Home - Dark</a></li>
              </ul>
            </li>
            <li class="item-110"><a href="./about-us">About Us</a></li>
            <li class="item-111 deeper dropdown parent"> <a class="btn-scroll" href="#">Projects <i class="fa fa-angle-down"></i></a>
              <ul>
                <li class="item-112"><a href="#">Projects - List</a></li>
                <li class="item-113"><a href="#">Projects - Details</a></li>
              </ul>
            </li>
            <li class="item-114 deeper dropdown parent"><a class="dropdown-toggle" href="./blog">Blog <i class="fa fa-angle-down"></i></a>
              <ul>
                <li class="item-115"><a href="#">Blog - List</a></li>
                <li class="item-116"><a href="#">Blog - Post</a></li>
              </ul>
            </li>
            <li class="item-117"><a href="#">Contacts</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navigation Mobile -->
    <nav class="navbar-mobile">
      <a class="brand js-target-scroll" href="/2/">
        go<span class="text-primary">.</span>arch </a>


      <!-- Navbar Collapse -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-mobile">
        <div class="navbar-nav-mobile">

          <ul class="menu">
            <li class="item-101  deeper dropdown parent"><a class="dropdown-toggle" href="./homepage">Home <i class="fa fa-angle-down"></i></a>
              <ul>
                <li class="item-108"><a href="#">Home - Light</a></li>
                <li class="item-109 active"><a href="./">Home - Dark</a></li>
              </ul>
            </li>
            <li class="item-110"><a href="./about-us">About Us</a></li>
            <li class="item-111 deeper dropdown parent"> <a class="btn-scroll" href="#">Projects <i class="fa fa-angle-down"></i></a>
              <ul>
                <li class="item-112"><a href="#">Projects - List</a></li>
                <li class="item-113"><a href="#">Projects - Details</a></li>
              </ul>
            </li>
            <li class="item-114 deeper dropdown parent"><a class="dropdown-toggle" href="./blog">Blog <i class="fa fa-angle-down"></i></a>
              <ul>
                <li class="item-115"><a href="#">Blog - List</a></li>
                <li class="item-116"><a href="#">Blog - Post</a></li>
              </ul>
            </li>
            <li class="item-117"><a href="./contacts">Contacts</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="layout">

    <!-- Start fullwidth-1 -->


    <main class="main">


      <!-- Start revolution slider -->

      <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider fullscreenbanner">
          <ul>
            <!-- Slide 1 -->
            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

              <!-- Main image-->

              <img src="./images/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">






          </ul>
        </div>
      </div>
    </main>

  </div>
</div>