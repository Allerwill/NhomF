<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-14">

<div class="layout">






  <!-- End fullwidth-1 -->


  <div class="content">
    <!-- Start fullwidth-1 -->

    <section id="portfolio" class="project-details ">
      <div class="container">

        <div class="project-details-item">
          <div class="row">
            <div class="project-details-info wow fadeInLeft">
              <h3 class="project-details-title">
                Residential care project in Delhi </h3>
              <p class="project-details-descr">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This can be compared to an actual office’s files, machines and decorations. The operating system is the boss. With this image in mind, think of an office you’ve visited that was slow and inefficient.</p>
            </div>
            <div class="project-details-img col-md-8">
              <img alt="" class="img-responsive" src="./images/8.jpg">
            </div>
          </div>
        </div>
        <div class="project-details-item">
          <div class="row">
            <div class="project-details-info wow fadeInLeft">
              <h3 class="project-details-title">
                Luxurious hotel in Kolkata </h3>
              <p class="project-details-descr">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This can be compared to an actual office’s files, machines and decorations. The operating system is the boss. With this image in mind, think of an office you’ve visited that was slow and inefficient.</p>
            </div>
            <div class="project-details-img col-md-8">
              <img alt="" class="img-responsive" src="./images/8.jpg">
            </div>
          </div>
        </div>
        <div class="project-details-item">
          <div class="row">
            <div class="project-details-info wow fadeInLeft">
              <h3 class="project-details-title">
                Concert Hall and Auditorium </h3>
              <p class="project-details-descr">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This can be compared to an actual office’s files, machines and decorations. The operating system is the boss. With this image in mind, think of an office you’ve visited that was slow and inefficient.</p>
            </div>
            <div class="project-details-img col-md-8">
              <img alt="" class="img-responsive" src="./images/8.jpg">
            </div>
          </div>
        </div>
        <div class="project-details-item">
          <div class="row">
            <div class="project-details-info wow fadeInLeft">
              <h3 class="project-details-title">
                Amazing constructional project in Khulna </h3>
              <p class="project-details-descr">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This can be compared to an actual office’s files, machines and decorations. The operating system is the boss. With this image in mind, think of an office you’ve visited that was slow and inefficient.</p>
            </div>
            <div class="project-details-img col-md-8">
              <img alt="" class="img-responsive" src="./images/8.jpg">
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
</div>