<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
  <div class="layout">


    <div class="content">


      <div class="custom">
        <section id="about" class="about section">
          <div class="container">
            <header class="section-header">
              <h2 class="section-title">About <span class="text-primary">go.arch</span></h2>
              <strong class="fade-title-left">About</strong>
            </header>
            <div class="section-content">
              <div class="row-base row">
                <div class="col-base col-sm-6 col-md-4">
                  <h3 class="col-about-title">we turn ideas into works of art<span class="text-primary">.</span></h3>
                  <div class="col-about-info">
                    <p>For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other. The way we undertake projects is based on permanently applying values that reinforce each other: socio-cultural value, experiental value, building-technical value and economical value.</p>
                  </div>
                </div>
                <div class="col-base col-about-spec col-sm-6 col-md-4">
                  <h3 class="col-about-title">our<br> specialization<span class="text-primary">:</span></h3>
                  <div class="service-item">
                    <img alt="" width="46" src="./images/icon-architecture.png">
                    <h4>Architecture</h4>
                  </div>
                  <div class="service-item">
                    <img alt="" width="58" src="./images/icon-interiors.png">
                    <h4>Interiors</h4>
                  </div>
                  <div class="service-item">
                    <img alt="" width="58" src="./images/icon-planing.png">
                    <h4>Planing</h4>
                  </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-base col-about-img col-sm-6 col-md-4">
                  <img alt="" class="img-responsive" src="./images/380x370.jpg">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

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
  </div>
</div>