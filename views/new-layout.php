<?php

include_once dirname(dirname(__DIR__)) . '/tao/includes/raw_start.php';

use oat\tao\helpers\Template;
?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAO Test Runner</title>
    <link rel="stylesheet" href="<?= Template::css('tao-main-style.css', 'tao') ?>">
    <link rel="stylesheet" href="<?= Template::css('tao-3.css', 'tao') ?>">
    <link rel="stylesheet" href="<?= Template::css('test-runner.css', 'taoQtiTest') ?>">


    <!-- everything within <style> only mimics certain behaviour and needs to go away in the final implementation -->
    <style>
        .test-runner-scope .action-bar.horizontal-action-bar {
            opacity: 1 !important
        }
    </style>


</head>

<body class="test-runner-scope">

    <header class="dark-bar clearfix">
        <a href="./" class="lft" target="_blank">
            <img src="<?= Template::img('tao-logo.png', 'tao') ?>" alt="TAO Logo" id="tao-main-logo">
        </a>
        <nav class="rgt">
            <!-- snippet: dark bar left menu -->
            <div class="settings-menu">

                <ul class="clearfix plain">
                    <li data-control="home">
                        <a id="home" href="?lorem=1">
                            <span class="icon-home"></span>
                        </a>
                    </li>
                    <li class="infoControl sep-before">
                        <span class="a">
                            <span class="icon-test-taker"></span>
                            <span>tt1</span>
                        </span>
                    </li>
                    <li class="infoControl sep-before" data-control="logout">
                        <a id="logout" class="" href="#">
                            <span class="icon-logout"></span>
                            <span class="text">Logout</span>
                        </a>
                    </li>
                    <li class="infoControl sep-before hidden" data-control="exit">
                        <a href="#">
                            <span class="icon-logout"></span>
                            <span class="text">Exit</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="action-bar content-action-bar horizontal-action-bar top-action-bar">

        <div class="control-box">
            <div class="title-box truncate">
                <span data-control="qti-test-title" class="qti-controls">On github pages use home button to toggle content</span>
                <span data-control="qti-test-position" class="qti-controls"> - Section 1</span>
            </div>
            <div class="item-number-box">
                <div data-control="item-number" class="qti-controls lft"></div>
            </div>
            <div class="timer-box">
                <div data-control="qti-timers" class="qti-controls lft"></div>
            </div>
            <div class="progress-box">
                <div data-control="progress-bar" class="qti-controls progressbar info"><span title="0%" style="width: 0%;"></span></div>
                <div data-control="progress-label" class="qti-controls">0%</div>
            </div>
        </div>
    </div>

    <div id="feedback-box"></div>
    <main>

        <!-- optional left sidebar -->
        <aside class="test-sidebar test-sidebar-left"><?php if(!empty($_GET['lorem'])): ?>
                <?php for($i = 0; $i < 3; $i ++): ?>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum hendrerit dolor, a blandit justo
                        vestibulum ac. Pellentesque sed tempus ipsum, volutpat vulputate neque. Duis egestas, nisi at dignissim
                        tempor, ligula arcu dignissim risus, a vehicula sem lacus id diam. Ut id egestas orci, vitae hendrerit
                        nisl. Nullam finibus sapien dui, quis feugiat dui commodo quis. Nulla facilisi. Nunc sodales dapibus ex
                        id cursus. Vivamus ut lacus pretium, tristique velit id, sodales nisl.
                    </p>
                <?php endfor; ?>

            <?php else: ?>
                <p>Left Sidebar</p>
            <?php endif; ?>
        </aside>

        <section class="content-wrapper">
            <div id="qti-content">
                <?php if(!empty($_GET['lorem'])): ?>
                <?php for($i = 0; $i < 7; $i ++): ?>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum hendrerit dolor, a blandit justo
                    vestibulum ac. Pellentesque sed tempus ipsum, volutpat vulputate neque. Duis egestas, nisi at dignissim
                    tempor, ligula arcu dignissim risus, a vehicula sem lacus id diam. Ut id egestas orci, vitae hendrerit
                    nisl. Nullam finibus sapien dui, quis feugiat dui commodo quis. Nulla facilisi. Nunc sodales dapibus ex
                    id cursus. Vivamus ut lacus pretium, tristique velit id, sodales nisl. Sed dictum leo id varius posuere.
                    Sed a nisi maximus nisl rhoncus pharetra rhoncus vitae erat. Sed iaculis nunc scelerisque, facilisis
                    risus vitae, vehicula dolor. Donec eu pulvinar mauris. Aliquam erat volutpat. Donec laoreet magna
                    egestas purus tempor iaculis. Sed ac risus eu lacus aliquam eleifend eu eu velit. Vestibulum interdum
                    arcu nibh, et efficitur mauris porta consectetur.
                </p>
                <?php endfor; ?>

                <?php else: ?>
                    <p>Content Area</p>
                <?php endif; ?>
            </div>
        </section>

        <!-- optional right sidebar -->
        <aside class="test-sidebar test-sidebar-right">
            <?php if(!empty($_GET['lorem'])): ?>
                <?php for($i = 0; $i < 3; $i ++): ?>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum hendrerit dolor, a blandit justo
                        vestibulum ac. Pellentesque sed tempus ipsum, volutpat vulputate neque. Duis egestas, nisi at dignissim
                        tempor, ligula arcu dignissim risus, a vehicula sem lacus id diam. Ut id egestas orci, vitae hendrerit
                        nisl. Nullam finibus sapien dui, quis feugiat dui commodo quis. Nulla facilisi. Nunc sodales dapibus ex
                        id cursus. Vivamus ut lacus pretium, tristique velit id, sodales nisl.
                    </p>
                <?php endfor; ?>

            <?php else: ?>
                <p>Right Sidebar</p>
            <?php endif; ?>
        </aside>

    </main>

    <nav class="action-bar content-action-bar horizontal-action-bar bottom-action-bar">

        <div class="control-box size-wrapper">
            <div class="lft tools-box">
                <ul class="plain tools-box-list"></ul>
            </div>
            <div class="rgt navi-box">
                <ul class="plain navi-box-list">
                    <li data-control="move-backward" class="small btn-info action" title="Submit and go to the previous item">
                        <a class="li-inner" href="#">
                            <span class="icon-backward"></span>
                            <span class="text">Previous</span>
                        </a>
                    </li>
                    <li data-control="move-forward" class="small btn-info action forward" title="Submit and go to the next item">
                        <a class="li-inner" href="#">
                            <span class="icon-forward"></span>
                            <span class="text">Next</span>
                        </a>
                    </li>
                    <li data-control="move-end" class="small btn-info action forward" title="Submit and go to the end of the test">
                        <a class="li-inner" href="#">
                            <span class="icon-fast-forward"></span>
                            <span class="text">End Test</span>
                        </a>
                    </li>
                    <li data-control="next-section" class="small btn-info action" title="Skip to the next section">
                        <a class="li-inner" href="#">
                            <span class="icon-external"></span>
                            <span class="text">Next Section</span>
                        </a>
                    </li>
                    <li data-control="skip" class="small btn-info action skip" title="Skip to the next item">
                        <a class="li-inner" href="#">
                            <span class="icon-external"></span>
                            <span class="text">Skip</span>
                        </a>
                    </li>
                    <li data-control="skip-end" class="small btn-info action skip" title="Skip to the end of the test">
                        <a class="li-inner" href="#">
                            <span class="icon-external"></span>
                            <span class="text">Skip &amp; End Test</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <footer class="dark-bar">
        © 2013 - 2015 · <a href="http://taotesting.com" target="_blank">Open Assessment Technologies S.A.</a>
        · All rights reserved.
    </footer>

</body>
</html>
