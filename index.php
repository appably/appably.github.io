<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1">
    <title>bluedot. is a minimal portfolio</title>
    <meta name="description" content="bluedot. is a minimal portfolio HTML available on Envato" />
    <link rel="canonical" href="https://bluedot.digitalwork.ovh" />
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="bluedot." />
    <meta property="og:description" content="bluedot. is a minimal portfolio HTML available on Envato" />
    <meta property="og:url" content="https://bluedot.digitalwork.ovh" />
    <meta property="og:site_name" content="bluedot." />
    <meta property="og:image" content="/assets/og-bluedot.jpg" />
    
    <?php include('header.php'); ?>
    
    <!-- Main container -->
    <main>
        <!-- Home Full Page -->
        <section id="home">
            <div id="description-text-container">
                <h1 class="title">DIGITAL FREELANCER</h1>
                <p class="description"><a href="<?php echo $root ?>#work">Project manager</a>, <a href="<?php echo $root ?>#work">web designer </a> and <a href="#">blogger</a>,<br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis.<br />
                    Feel free to <a href="<?php echo $root ?>#contact">contact</a> me!</p>
                <div class="word-overlay">
                    <span class="two-words-overlay">DIGITAL<br />&nbsp;&nbsp;&nbsp;FREELANCER</span>
                </div>
            </div>
            <div id="line-scroll-container">
                <span id="line-scroll"></span>
            </div>
        </section>
        <!-- END Home Full Page -->
        
        <!-- Project 1 -->
        <section id="work" class="work work-one">
            <h2 class="work-title">Client - Webdesign project</h2>
            <div class="work-block-container">
                <div class="word-container">
                    <div class="word-overlay">
                        <span class="top-number">01</span>
                    </div>
                </div>
                <div class="word-overlay">
                    <span class="under-number">01</span>
                </div>
                <div class="container">
                   <div class="row">
                        <div class="work-image-container col-lg-6">
                            <img class="mockup-img" src="<?php echo $root ?>images/mockup-1.png" alt="Project 1" width="557" height="438">
                            <img class="mockup-gif" src="<?php echo $root ?>images/mockup-gif-1.gif" alt="Gif example" width="374" height="235">
                        </div>
                        <div class="work-description-container col-lg-6">
                            <p class="work-category">Website</p>
                            <p class="work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. Nam posuere ipsum sit amet est pellentesque, in dignissim erat mattis.</p>
                            <div class="work-button"><a href="#" target="_blank">VISIT WEBSITE</a></div>
                            <div class="work-button"><a href="casestudy-one.php">CASE STUDY</a></div>
                            <div class="work-details">
                                <ul>
                                    <li>ROLE: <span>Web designer</span></li>
                                    <li>YEAR: <span>2017</span></li>
                                    <li>CLIENT: <span>Client</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Project 1 -->
        
        <!-- Project 2 -->
        <section class="work work-two">
            <h2 class="work-title">Client - Project</h2>
            <div class="work-block-container">
                <div class="word-container">
                    <div class="word-overlay">
                        <span class="top-number">02</span>
                    </div>
                </div>
                <div class="word-overlay">
                    <span class="under-number">02</span>
                </div>
                <div class="container">
                   <div class="row">
                        <div class="work-image-container col-lg-6">
                            <img class="mockup-img" src="<?php echo $root ?>images/mockup-2.png" alt="Project 2" width="557" height="438">
                            <img class="mockup-gif tablet-gif" src="<?php echo $root ?>images/mockup-gif-2.gif" alt="Gif example on tablet mockup" width="374" height="235">
                        </div>
                        <div class="work-description-container col-lg-6">
                            <p class="work-category">Website</p>
                            <p class="work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. Nam posuere ipsum sit amet est pellentesque, in dignissim erat mattis.</p>
                            <div class="work-button"><a href="#" target="_blank">VISIT WEBSITE</a></div>
                            <div class="work-button"><a href="casestudy-two.php">CASE STUDY</a></div>
                            <div class="work-details">
                                <ul>
                                    <li>ROLE: <span>Project manager</span></li>
                                    <li>YEAR: <span>2017</span></li>
                                    <li>CLIENT: <span>Client</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Project 2 -->
        
        <!-- Project 3 -->
        <section class="work work-three">
            <h2 class="work-title">Client - Big project</h2>
            <div class="work-block-container">
                <div class="word-container">
                    <div class="word-overlay">
                        <span class="top-number">03</span>
                    </div>
                </div>
                <div class="word-overlay">
                    <span class="under-number">03</span>
                </div>
                <div class="container">
                   <div class="row">
                        <div class="work-image-container col-lg-6">
                            <img class="mockup-img" src="<?php echo $root ?>images/mockup-3.png" alt="Project 3" width="557" height="438">
                            <img class="mockup-gif mobile-gif" src="<?php echo $root ?>images/mockup-gif-3.gif" alt="Gif example on mobile mockup" width="136" height="242">
                        </div>
                        <div class="work-description-container col-lg-6">
                            <p class="work-category">Web app</p>
                            <p class="work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. Nam posuere ipsum sit amet est pellentesque, in dignissim erat mattis.</p>
                            <div class="work-button"><a href="casestudy-three.php">CASE STUDY</a></div>
                            <div class="work-details">
                                <ul>
                                    <li>ROLE: <span>Project manager</span></li>
                                    <li>YEAR: <span>2017</span></li>
                                    <li>CLIENT: <span>Client</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Project 3 -->
        
        <!-- Project 4 -->
        <section class="work work-four">
            <h2 class="work-title">Client - Project</h2>
            <div class="work-block-container">
                <div class="word-container">
                    <div class="word-overlay">
                        <span class="top-number">04</span>
                    </div>
                </div>
                <div class="word-overlay">
                    <span class="under-number">04</span>
                </div>
                <div class="container">
                       <div class="row">
                            <div class="work-image-container col-lg-6">
                            <img class="mockup-img" src="<?php echo $root ?>images/mockup-1.png" alt="Project 1" width="557" height="438">
                            <img class="mockup-gif" src="<?php echo $root ?>images/mockup-gif-1.gif" alt="Gif example" width="374" height="235">
                        </div>
                        <div class="work-description-container col-lg-6">
                            <p class="work-category">Corporate website</p>
                            <p class="work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. Nam posuere ipsum sit amet est pellentesque, in dignissim erat mattis.</p>
                            <div class="work-button"><a href="#" target="_blank">VISIT WEBSITE</a></div>
                            <div class="work-button"><a href="casestudy-four.php">CASE STUDY</a></div>
                            <div class="work-details">
                                <ul>
                                    <li>ROLE: <span>Developer</span></li>
                                    <li>YEAR: <span>2017</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Project 4 -->
        
        <!-- Services -->
        <section id="what">
            <h2 class="what-title">Services</h2>
            <div class="container-services container">
                <div class="word-overlay item-last">
                    <span>SERVICES</span>
                </div>
                <div class="row justify-content-center">
                    <div class="service col-lg-2 col-sm-4">
                        <div class="container-illus">
                            <img class="illus-service" src="<?php echo $root ?>assets/icon-projectmgmt.svg" alt="Icone chef de projet">
                        </div>
                        <h3 class="title-service">Manage your project</h3>
                        <p class="text-service">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis.</p>
                    </div>
                    <div class="service col-lg-2 col-sm-4">
                        <div class="container-illus">
                            <img class="illus-service" src="<?php echo $root ?>assets/icon-analysis.svg" alt="Icone analyse">
                        </div>
                        <h3 class="title-service">Analyse</h3>
                        <p class="text-service">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis.</p>
                    </div>
                    <div class="service col-lg-2 col-sm-4">
                        <div class="container-illus">
                            <img class="illus-service" src="<?php echo $root ?>assets/icon-conception.svg" alt="Icone conception">
                        </div>
                        <h3 class="title-service">Conception</h3>
                        <p class="text-service">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis.</p>
                    </div>                
                    <div class="service col-lg-2 col-sm-4">
                        <div class="container-illus">
                            <img class="illus-service" src="<?php echo $root ?>assets/icon_webd-dev.svg" alt="Icone développement et design">
                        </div>
                        <h3 class="title-service">Development</h3>
                        <p class="text-service">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis.</p>
                    </div>
                    <div class="service col-lg-2 col-sm-4">
                        <div class="container-illus">
                            <img class="illus-service" src="<?php echo $root ?>assets/icon_strategy.svg" alt="Icone Stratégie">
                        </div>
                        <h3 class="title-service">Digital strategy</h3>
                        <p class="text-service">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Services -->
        
    </main>
    <!-- END Main container -->

    <?php include("footer.php"); ?>