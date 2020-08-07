<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="layout">
  <div class="content">


    <section class="sec-component">
      <div class="container">
        <div class="row">
          <main id="content" role="main" class="col-md-12">
            <!-- Begin Content -->
            <div id="system-message-container">
            </div>

            <section class="taglist_content bg-white">
              <div class="pt150 pb130">
                <!-- Start K2 Tag Layout -->
                <div id="k2tagContainer" class="tagView">
                  <div class="cbp-item col-md-6 col-sm-6">
                    <div class="blog-article">
                      <div class="blog-article-head text-center">
                        <!-- Item category name -->
                        <div class="blog-article-category">
                          <h6 class="inline">Published in</h6>
                          <a href="/joomla/go.arch/blog">
                            <h4 class="inline black">Blog</h4>
                          </a>
                        </div>

                        <div class="blog-article-title black">
                          <!-- Item title -->
                          <h2>
                            <a href="/joomla/go.arch/blog/item/4-advice-for-stirring-your-online-community-and-fostering-engagement">
                              Advice for stirring your online community and fostering engagement </a>
                          </h2>
                        </div>

                        <div class="blog-article-date">
                          <!-- Date created -->
                          <h6>Oct 12, 2017</h6>
                        </div>
                      </div>
                      <!-- Item Image -->
                      <a href="/joomla/go.arch/blog/item/4-advice-for-stirring-your-online-community-and-fostering-engagement" title="Advice for stirring your online community and fostering engagement">
                        <div class="blog-article-image">
                          <img class="pb10" src="./images/12.jpg" alt="Advice for stirring your online community and fostering engagement" style="width:100%; height:auto;" />
                        </div>
                      </a>

                      <!-- Item introtext -->
                      <h6>When you enter into any new area of science, you almost always find</h6>
                      <!-- Item "read more..." link -->
                      <div class="read-more">
                        <a href="/joomla/go.arch/blog/item/4-advice-for-stirring-your-online-community-and-fostering-engagement">
                          <h4 class="black">Read more...</h4>
                        </a>
                      </div>


                    </div>
                  </div>
                  <div class="cbp-item col-md-6 col-sm-6">
                    <div class="blog-article">
                      <div class="blog-article-head text-center">
                        <!-- Item category name -->
                        <div class="blog-article-category">
                          <h6 class="inline">Published in</h6>
                          <a href="/joomla/go.arch/blog">
                            <h4 class="inline black">Blog</h4>
                          </a>
                        </div>

                        <div class="blog-article-title black">
                          <!-- Item title -->
                          <h2>
                            <a href="/joomla/go.arch/blog/item/2-advice-for-stirring-your-online-community-and-fostering-engagement">
                              Advice for stirring your online community and fostering engagement </a>
                          </h2>
                        </div>

                        <div class="blog-article-date">
                          <!-- Date created -->
                          <h6>Oct 12, 2017</h6>
                        </div>
                      </div>
                      <!-- Item Image -->
                      <a href="/joomla/go.arch/blog/item/2-advice-for-stirring-your-online-community-and-fostering-engagement" title="Advice for stirring your online community and fostering engagement">
                        <div class="blog-article-image">
                          <img class="pb10" src="./images/12.jpg" alt="Advice for stirring your online community and fostering engagement" style="width:100%; height:auto;" />
                        </div>
                      </a>

                      <!-- Item introtext -->
                      <h6>When you enter into any new area of science, you almost always find</h6>
                      <!-- Item "read more..." link -->
                      <div class="read-more">
                        <a href="/joomla/go.arch/blog/item/2-advice-for-stirring-your-online-community-and-fostering-engagement">
                          <h4 class="black">Read more...</h4>
                        </a>
                      </div>


                    </div>
                  </div>
                  <div class="cbp-item col-md-6 col-sm-6">
                    <div class="blog-article">
                      <div class="blog-article-head text-center">
                        <!-- Item category name -->
                        <div class="blog-article-category">
                          <h6 class="inline">Published in</h6>
                          <a href="/joomla/go.arch/blog">
                            <h4 class="inline black">Blog</h4>
                          </a>
                        </div>

                        <div class="blog-article-title black">
                          <!-- Item title -->
                          <h2>
                            <a href="/joomla/go.arch/blog/blog-post">
                              Advice for stirring your online community and fostering engagement </a>
                          </h2>
                        </div>

                        <div class="blog-article-date">
                          <!-- Date created -->
                          <h6>Oct 12, 2017</h6>
                        </div>
                      </div>
                      <!-- Item Image -->
                      <a href="/joomla/go.arch/blog/blog-post" title="Advice for stirring your online community and fostering engagement">
                        <div class="blog-article-image">
                          <img class="pb10" src="./images/12.jpg" alt="Advice for stirring your online community and fostering engagement" style="width:100%; height:auto;" />
                        </div>
                      </a>

                      <!-- Item introtext -->
                      <h6>When you enter into any new area of science, you almost always find</h6>
                      <!-- Item "read more..." link -->
                      <div class="read-more">
                        <a href="/joomla/go.arch/blog/blog-post">
                          <h4 class="black">Read more...</h4>
                        </a>
                      </div>


                    </div>
                  </div>

                  <!-- Pagination -->


                </div>
                <!-- End K2 Tag Layout -->
              </div>
            </section>
            <!-- JoomlaWorks "K2" (v2.8.0) | Learn more about K2 at http://getk2.org -->


            <!-- End Content -->
          </main>
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