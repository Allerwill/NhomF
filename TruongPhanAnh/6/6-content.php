<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<dic class="type-6">
  <div class="layout">
    <div class="content">
      <section id="clients" class="clients section ">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Our <span class="text-primary">clients</span></h2>
            <strong class="fade-title-left">clients</strong>
          </header>

          <div class="section-content">
            <ul class="clients-list">

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>

              <li class="client">
                <a href="#">
                  <img src="./images/10.png" alt="Img">
                </a>
              </li>


            </ul>
          </div>
        </div>
      </section>
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
</dic>