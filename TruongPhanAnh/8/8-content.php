<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
<header id="top" class="header-inner">
    <div class="brand-panel">
        <a class="brand js-target-scroll" href="#">
            go<span class="text-primary">.</span>arch
        </a>
        <div class="brand-name">Go.arch</div>
    </div>

    <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Architecture buro</div>
            <div class="line"></div>
        </div>
        <ul class="social-list">
            <li>
                <a href="#" class="fa fa-twitter"></a>
            </li>

            <li>
                <a href="#" class="fa fa-behance"></a>
            </li>

            <li>
                <a href="#" class="fa fa-instagram"></a>
            </li>

            <li>
                <a href="#" class="fa fa-facebook"></a>
            </li>

            <li>
                <a href="#" class=""></a>
            </li>
        </ul>
    </div>

    <!-- Navigation Desctop -->
    <nav class="navbar-desctop visible-md visible-lg">

    </nav>

    <!-- Navigation Mobile -->
    <nav class="navbar-mobile">
        <a class="brand js-target-scroll" href="#">
            go<span class="text-primary">.</span>arch
        </a>

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
                    <li class="item-101 deeper dropdown parent">
                        <a class="dropdown-toggle" href="#">Home <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li class="item-108"><a href="#">Home - Light</a></li>
                            <li class="item-109"><a href="#">Home - Dark</a></li>
                        </ul>
                    </li>
                    <li class="item-110"><a href="#">About Us</a></li>
                    <li class="item-111 deeper dropdown parent">
                        <a class="btn-scroll" href="#">Projects <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li class="item-112"><a href="#">Projects - List</a></li>
                            <li class="item-113 active">
                                <a href="#">Projects - Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="item-114 deeper dropdown parent">
                        <a class="dropdown-toggle" href="#">Blog <i class="fa fa-angle-down"></i></a>
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
</header>

<div class="layout">
    <!-- Start fullwidth-1 -->

    <main class="main main-inner bg-breadcrumb slider" data-stellar-background-ratio="0.6">
        <div class="container">
            <header class="main-header">
                <h1>About Us</h1>
                <h4 class="desc"></h4>
            </header>

            <ol class="breadcrumb">
                <li class="white"><a href="/joomla/go.arch/" class="white pathway">Home</a></li>
                <li class="active white">About Us</li>
            </ol>
        </div>

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
    </main>
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
    </main>

    <!-- End fullwidth-1 -->

    <div class="content">
        <!-- Start fullwidth-1 -->

        <!-- End fullwidth-1 -->

        <!-- Footer -->

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