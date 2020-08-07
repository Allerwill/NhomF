<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-29">

<header id="top" class="header-inner">
    <div class="brand-panel">
        <a class="brand js-target-scroll" href="#">
            go<span class="text-primary">.</span>arch
        </a>
        <div class="brand-name">Go.arch</div>
    </div>

    <div class="vertical-panel-content">
        <div class="vertical-panel-info">

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
</header>

<div class="layout">
    <!-- Start fullwidth-1 -->

    <main class="main main-inner bg-breadcrumb slider" data-stellar-background-ratio="0.6">
        <div class="container">
            <header class="main-header">
                <h1>Blog</h1>
                <h4 class="desc"></h4>
            </header>

            <ol class="breadcrumb">
                <li class="white"><a href="/joomla/go.arch/" class="white pathway">Home</a></li>
                <li class="white"><a href="/joomla/go.arch/blog" class="white pathway">Blog</a></li>
                <li class="active white">Super User</li>
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

</div>
</div>