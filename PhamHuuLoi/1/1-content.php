<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">


<!-- Header -->
<header id="top" class="header-home">
  <div class="brand-panel">


  </div>

  <div class="vertical-panel"></div>
  <div class="vertical-panel-content">
    <div class="vertical-panel-info">

    </div>

  </div>




</header>

<div class="layout">

  <!-- Start fullwidth-1 -->

  <div class="slide-number">

  </div>
  <main class="main">

    <div class="arrow-left"></div>
    <div class="arrow-right"></div>

    <!-- Start revolution slider -->

    <div class="rev_slider_wrapper">
      <div id="rev_slider" class="rev_slider fullscreenbanner">
        <ul>
          <!-- Slide 1 -->
          <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

            <!-- Main image-->

            <img src="./images/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

            <!-- Layer 1 -->
            <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']" data-lineheight="['80','75', '65']" data-width="['1100','700','450']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">Concert hall in new york </div>

            <!-- Layer 2 -->
            <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none">Concert Hall is the architecture of a new generation, a building<br />
              that exists not only in the dimension of space,<br />
              but also in the dimension of time and communication.
            </div>

            <!-- Layer 3 -->
            <div class="tp-caption" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on"><a href="#about" class="btn js-target-scroll">Look More <i class="icon-next"></i></a>
            </div>
          </li>

          <!-- Slide 2 -->
          <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

            <!-- Main image -->
            <img src="/images/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

            <!-- Layer 1 -->
            <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-55']" data-fontsize="['50','45', '35']" data-lineheight="['80','75','65']" data-width="['1100','700','500']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">Exhibition center in boston </div>

            <!-- Layer 2 -->
            <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none">
              Modern Hotel is the architecture of a new generation, a building<br /> that exists not only in the dimension of space,<br />
              but also in the dimension of time and communication.
            </div>

            <!-- Layer 3 -->
            <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['195','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#about" class="btn js-target-scroll">Look More <i class="icon-next"></i></a>
            </div>
          </li>

          <!-- Slide 3 -->
          <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

            <!-- Main image-->
            <img src="./images/slide3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

            <!-- Layer 1 -->
            <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']" data-lineheight="['80','75', '65']" data-width="['1000','700','450']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">Modern hotel in london </div>


            <!-- Layer 2 -->
            <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none">Exhibition Center is the architecture of a new generation,<br />
              a building that exists not only in the dimension of space,<br />
              but also in the dimension of time and communication. </div>

            <!-- Layer 3 -->
            <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#about" class="btn js-target-scroll">Look More <i class="icon-next"></i></a>
            </div>
          </li>




        </ul>
      </div>
    </div>
  </main>
  <div class="page-lines">
    <div class="container">
      <div class="col-line col-xs-4">
        <div class="line"></div>
      </div>
      <div class="col-line col-xs-4">
        <div class="line"></div>
      </div>
      <div class="col-line col-xs-4">
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
  </div>

</div>
  <!-- End fullwidth-1 -->