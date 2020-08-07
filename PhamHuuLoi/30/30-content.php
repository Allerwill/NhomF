<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>



<div class="type-30">


<div class="layout">

  <!-- Start fullwidth-1 -->






  <!-- End fullwidth-1 -->


  <div class="content">


    <section class="sec-component">
      <div class="container">
        <div class="row">
          <main id="content" role="main" class="col-md-12">
            <!-- Begin Content -->
            <div id="system-message-container">
            </div>


            <!-- Start K2 User Layout -->
            <section class="taglist_content bg-white">
              <div class="pt150 pb130">
                <div id="k2Container" class="userView">




                  <div class="userBlock">


                    <img src="./images/user.png" alt="Super User" style="width:100px; height:auto;" />

                    <h2>Super User</h2>



                    <div class="clr"></div>


                    <div class="clr"></div>
                  </div>



                  <!-- Item list -->
                  <div class="userItemList">
                    <div class="col-md-6 col-sm-6 mb30">
                      <div class="blog-article">
                        <div class="blog-article-head text-center">
                          <!-- Start K2 Item Layout -->
                          <div class="userItemView">

                            <!-- Plugins: BeforeDisplay -->

                            <!-- K2 Plugins: K2BeforeDisplay -->

                            <div class="userItemHeader">
                              <!-- Date created -->
                              <span class="userItemDateCreated">
                                Thursday, 12 October 2017 15:15 </span>

                              <!-- Item title -->
                              <h3 class="userItemTitle">

                                <a href="/joomla/go.arch/blog/item/4-advice-for-stirring-your-online-community-and-fostering-engagement">
                                  Advice for stirring your online community and fostering engagement </a>
                              </h3>
                            </div>

                            <!-- Plugins: AfterDisplayTitle -->

                            <!-- K2 Plugins: K2AfterDisplayTitle -->

                            <div class="userItemBody">

                              <!-- Plugins: BeforeDisplayContent -->

                              <!-- K2 Plugins: K2BeforeDisplayContent -->

                              <!-- Item Image -->
                              <div class="userItemImageBlock">
                                <span class="userItemImage">
                                  <a href="/joomla/go.arch/blog/item/4-advice-for-stirring-your-online-community-and-fostering-engagement" title="Advice for stirring your online community and fostering engagement">
                                    <img src="./images/10.jpg" alt="Advice for stirring your online community and fostering engagement" style="width:300px; height:auto;" />
                                  </a>
                                </span>
                                <div class="clr"></div>
                              </div>

                              <!-- Item introtext -->
                              <div class="userItemIntroText">
                                When you enter into any new area of science, you almost always find </div>

                              <div class="clr"></div>

                              <!-- Plugins: AfterDisplayContent -->

                              <!-- K2 Plugins: K2AfterDisplayContent -->

                              <div class="clr"></div>
                            </div>

                            <div class="userItemLinks">

                              <!-- Item category name -->
                              <div class="userItemCategory">
                                <span>Published in</span>
                                <a href="/joomla/go.arch/blog">Blog</a>
                              </div>

                              <!-- Item tags -->
                              <div class="userItemTagsBlock">
                                <span>Tagged under</span>
                                <ul class="userItemTags">
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/marketing">marketing</a></li>
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/technology">technology</a></li>
                                </ul>
                                <div class="clr"></div>
                              </div>

                              <div class="clr"></div>
                            </div>

                            <div class="clr"></div>


                            <!-- Item "read more..." link -->
                            <div class="userItemReadMore">
                              <a class="k2ReadMore" href="/joomla/go.arch/blog/item/4-advice-for-stirring-your-online-community-and-fostering-engagement">
                                Read more... </a>
                            </div>

                            <div class="clr"></div>

                            <!-- Plugins: AfterDisplay -->

                            <!-- K2 Plugins: K2AfterDisplay -->

                            <div class="clr"></div>
                          </div>
                          <!-- End K2 Item Layout -->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mb30">
                      <div class="blog-article">
                        <div class="blog-article-head text-center">
                          <!-- Start K2 Item Layout -->
                          <div class="userItemView">

                            <!-- Plugins: BeforeDisplay -->

                            <!-- K2 Plugins: K2BeforeDisplay -->

                            <div class="userItemHeader">
                              <!-- Date created -->
                              <span class="userItemDateCreated">
                                Thursday, 12 October 2017 15:15 </span>

                              <!-- Item title -->
                              <h3 class="userItemTitle">

                                <a href="/joomla/go.arch/blog/item/3-advice-for-stirring-your-online-community-and-fostering-engagement">
                                  Advice for stirring your online community and fostering engagement </a>
                              </h3>
                            </div>

                            <!-- Plugins: AfterDisplayTitle -->

                            <!-- K2 Plugins: K2AfterDisplayTitle -->

                            <div class="userItemBody">

                              <!-- Plugins: BeforeDisplayContent -->

                              <!-- K2 Plugins: K2BeforeDisplayContent -->

                              <!-- Item Image -->
                              <div class="userItemImageBlock">
                                <span class="userItemImage">
                                  <a href="/joomla/go.arch/blog/item/3-advice-for-stirring-your-online-community-and-fostering-engagement" title="Advice for stirring your online community and fostering engagement">
                                    <img src="./images/10.jpg" alt="Advice for stirring your online community and fostering engagement" style="width:300px; height:auto;" />
                                  </a>
                                </span>
                                <div class="clr"></div>
                              </div>

                              <!-- Item introtext -->
                              <div class="userItemIntroText">
                                When you enter into any new area of science, you almost always find </div>

                              <div class="clr"></div>

                              <!-- Plugins: AfterDisplayContent -->

                              <!-- K2 Plugins: K2AfterDisplayContent -->

                              <div class="clr"></div>
                            </div>

                            <div class="userItemLinks">

                              <!-- Item category name -->
                              <div class="userItemCategory">
                                <span>Published in</span>
                                <a href="/joomla/go.arch/blog">Blog</a>
                              </div>

                              <!-- Item tags -->
                              <div class="userItemTagsBlock">
                                <span>Tagged under</span>
                                <ul class="userItemTags">
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/Design">Design</a></li>
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/technology">technology</a></li>
                                </ul>
                                <div class="clr"></div>
                              </div>

                              <div class="clr"></div>
                            </div>

                            <div class="clr"></div>


                            <!-- Item "read more..." link -->
                            <div class="userItemReadMore">
                              <a class="k2ReadMore" href="/joomla/go.arch/blog/item/3-advice-for-stirring-your-online-community-and-fostering-engagement">
                                Read more... </a>
                            </div>

                            <div class="clr"></div>

                            <!-- Plugins: AfterDisplay -->

                            <!-- K2 Plugins: K2AfterDisplay -->

                            <div class="clr"></div>
                          </div>
                          <!-- End K2 Item Layout -->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mb30">
                      <div class="blog-article">
                        <div class="blog-article-head text-center">
                          <!-- Start K2 Item Layout -->
                          <div class="userItemView">

                            <!-- Plugins: BeforeDisplay -->

                            <!-- K2 Plugins: K2BeforeDisplay -->

                            <div class="userItemHeader">
                              <!-- Date created -->
                              <span class="userItemDateCreated">
                                Thursday, 12 October 2017 15:15 </span>

                              <!-- Item title -->
                              <h3 class="userItemTitle">

                                <a href="/joomla/go.arch/blog/item/2-advice-for-stirring-your-online-community-and-fostering-engagement">
                                  Advice for stirring your online community and fostering engagement </a>
                              </h3>
                            </div>

                            <!-- Plugins: AfterDisplayTitle -->

                            <!-- K2 Plugins: K2AfterDisplayTitle -->

                            <div class="userItemBody">

                              <!-- Plugins: BeforeDisplayContent -->

                              <!-- K2 Plugins: K2BeforeDisplayContent -->

                              <!-- Item Image -->
                              <div class="userItemImageBlock">
                                <span class="userItemImage">
                                  <a href="/joomla/go.arch/blog/item/2-advice-for-stirring-your-online-community-and-fostering-engagement" title="Advice for stirring your online community and fostering engagement">
                                    <img src="./images/10.jpg" alt="Advice for stirring your online community and fostering engagement" style="width:300px; height:auto;" />
                                  </a>
                                </span>
                                <div class="clr"></div>
                              </div>

                              <!-- Item introtext -->
                              <div class="userItemIntroText">
                                When you enter into any new area of science, you almost always find </div>

                              <div class="clr"></div>

                              <!-- Plugins: AfterDisplayContent -->

                              <!-- K2 Plugins: K2AfterDisplayContent -->

                              <div class="clr"></div>
                            </div>

                            <div class="userItemLinks">

                              <!-- Item category name -->
                              <div class="userItemCategory">
                                <span>Published in</span>
                                <a href="/joomla/go.arch/blog">Blog</a>
                              </div>

                              <!-- Item tags -->
                              <div class="userItemTagsBlock">
                                <span>Tagged under</span>
                                <ul class="userItemTags">
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/marketing">marketing</a></li>
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/Design">Design</a></li>
                                </ul>
                                <div class="clr"></div>
                              </div>

                              <div class="clr"></div>
                            </div>

                            <div class="clr"></div>


                            <!-- Item "read more..." link -->
                            <div class="userItemReadMore">
                              <a class="k2ReadMore" href="/joomla/go.arch/blog/item/2-advice-for-stirring-your-online-community-and-fostering-engagement">
                                Read more... </a>
                            </div>

                            <div class="clr"></div>

                            <!-- Plugins: AfterDisplay -->

                            <!-- K2 Plugins: K2AfterDisplay -->

                            <div class="clr"></div>
                          </div>
                          <!-- End K2 Item Layout -->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mb30">
                      <div class="blog-article">
                        <div class="blog-article-head text-center">
                          <!-- Start K2 Item Layout -->
                          <div class="userItemView">

                            <!-- Plugins: BeforeDisplay -->

                            <!-- K2 Plugins: K2BeforeDisplay -->

                            <div class="userItemHeader">
                              <!-- Date created -->
                              <span class="userItemDateCreated">
                                Thursday, 12 October 2017 15:13 </span>

                              <!-- Item title -->
                              <h3 class="userItemTitle">

                                <a href="/joomla/go.arch/blog/blog-post">
                                  Advice for stirring your online community and fostering engagement </a>
                              </h3>
                            </div>

                            <!-- Plugins: AfterDisplayTitle -->

                            <!-- K2 Plugins: K2AfterDisplayTitle -->

                            <div class="userItemBody">

                              <!-- Plugins: BeforeDisplayContent -->

                              <!-- K2 Plugins: K2BeforeDisplayContent -->

                              <!-- Item Image -->
                              <div class="userItemImageBlock">
                                <span class="userItemImage">
                                  <a href="/joomla/go.arch/blog/blog-post" title="Advice for stirring your online community and fostering engagement">
                                    <img src="./images/10.jpg" alt="Advice for stirring your online community and fostering engagement" style="width:300px; height:auto;" />
                                  </a>
                                </span>
                                <div class="clr"></div>
                              </div>

                              <!-- Item introtext -->
                              <div class="userItemIntroText">
                                When you enter into any new area of science, you almost always find </div>

                              <div class="clr"></div>

                              <!-- Plugins: AfterDisplayContent -->

                              <!-- K2 Plugins: K2AfterDisplayContent -->

                              <div class="clr"></div>
                            </div>

                            <div class="userItemLinks">

                              <!-- Item category name -->
                              <div class="userItemCategory">
                                <span>Published in</span>
                                <a href="/joomla/go.arch/blog">Blog</a>
                              </div>

                              <!-- Item tags -->
                              <div class="userItemTagsBlock">
                                <span>Tagged under</span>
                                <ul class="userItemTags">
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/Design">Design</a></li>
                                  <li><a href="/joomla/go.arch/blog/blog-list/itemlist/tag/marketing">marketing</a></li>
                                </ul>
                                <div class="clr"></div>
                              </div>

                              <div class="clr"></div>
                            </div>

                            <div class="clr"></div>


                            <!-- Item "read more..." link -->
                            <div class="userItemReadMore">
                              <a class="k2ReadMore" href="/joomla/go.arch/blog/blog-post">
                                Read more... </a>
                            </div>

                            <div class="clr"></div>

                            <!-- Plugins: AfterDisplay -->

                            <!-- K2 Plugins: K2AfterDisplay -->

                            <div class="clr"></div>
                          </div>
                          <!-- End K2 Item Layout -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Pagination -->
                  <br />

                  <div class="pagination col-md-12 text-center">
                    <div class="clr"></div>
                  </div>


                </div>
              </div>
            </section>

            <!-- End K2 User Layout -->

            <!-- JoomlaWorks "K2" (v2.8.0) | Learn more about K2 at http://getk2.org -->


            <!-- End Content -->
          </main>
        </div>
      </div>
    </section>




    <!-- Lines -->

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