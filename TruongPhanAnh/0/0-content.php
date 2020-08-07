<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>




<!-- Header -->
<header id="top" class="header-home">
  <div class="brand-panel">
    <a class="brand js-target-scroll" href="/17/">
      go<span class="text-primary">.</span>arch </a>
    <div class="brand-name">Go.arch</div>
  </div>
  <div class="header-phone">+9 (875) 456-09-28</div>
  <div class="vertical-panel"></div>
  <div class="vertical-panel-content">
    <div class="vertical-panel-info">
      <div class="vertical-panel-title">Architecture buro</div>
      <div class="line"></div>
    </div>
    <ul class="social-list">
      <li><a href="http://www.twitter.com" class="fa fa-twitter"></a></li>

      <li><a href="http://www.behance.net" class="fa fa-behance"></a></li>

      <li><a href="http://www.instagram.com" class="fa fa-instagram"></a></li>

      <li><a href="http://www.facebook.com" class="fa fa-facebook"></a></li>

      <li><a href="/17/ " class=""></a></li>
    </ul>
  </div>


</header>

<div class="layout">

  <!-- Start fullwidth-1 -->

  <div class="slide-number">
    <span class="current-number text-primary">0<span class="count">1</span></span>
    <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
  </div>
  <main class="main">



    <!-- Start revolution slider -->

    <div class="rev_slider_wrapper">
      <div id="rev_slider" class="rev_slider fullscreenbanner">

      </div>
    </div>
  </main>

</div>

<!-- End fullwidth-1 -->