<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-12">
<div class="layout">

  <div class="content">

    <section id="projects" class="projects section ">
      <div class="container">
        <h2 class="section-title">Our <span class="text-primary">projects</span></h2>
      </div>


      <div class="section-content">
        <div class="projects-carousel js-projects-carousel js-projects-gallery">
          <div class="project project-light">
            <a href="./images/1-480x880.jpg" title="Residential care project in Paris">
              <figure>
                <img alt="" src="./images/1-480x880.jpg">
                <figcaption>
                  <h3 class="project-title">
                    Residential care project in Paris </h3>

                  <h4 class="project-category">
                    Architecture </h4>
                  <div class="project-zoom"></div>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="project project-light">
            <a href="./images/4-480x880.jpg" title="Concert hall in New york">
              <figure>
                <img alt="" src="./images/4-480x880.jpg">
                <figcaption>
                  <h3 class="project-title">
                    Concert hall in New york </h3>

                  <h4 class="project-category">
                    Interior </h4>
                  <div class="project-zoom"></div>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="project project-light">
            <a href="./images/2-480x880.jpg" title="Modern hotel in London">
              <figure>
                <img alt="" src="./images/2-480x880.jpg">
                <figcaption>
                  <h3 class="project-title">
                    Modern hotel in London </h3>

                  <h4 class="project-category">
                    Design </h4>
                  <div class="project-zoom"></div>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="project project-light">
            <a href="./images/5-480x880.jpg" title="Residential care project in Sydney">
              <figure>
                <img alt="" src="./images/5-480x880.jpg">
                <figcaption>
                  <h3 class="project-title">
                    Residential care project in Sydney </h3>

                  <h4 class="project-category">
                    Interior </h4>
                  <div class="project-zoom">
                  </div>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="project project-light">
            <a href="./images/3-480x880.jpg" title="Modern hotel in Moscow">
              <figure>
                <img alt="" src="./images/3-480x880.jpg">
                <figcaption>
                  <h3 class="project-title">
                    Modern hotel in Moscow </h3>

                  <h4 class="project-category">
                    Architecture </h4>
                  <div class="project-zoom"></div>
                </figcaption>
              </figure>
            </a>
          </div>
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
  </div>