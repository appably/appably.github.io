<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1">
    <title>bluedot. | Case Study</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />

    
    <?php include('header.php'); ?>

    <!-- Main container -->
    <main>
        
        <!-- Home Case Study -->
        <section id="home" class="work-three">
            <!-- Project title -->
            <div id="description-text-container">
                <h1 class="title">Project Example</h1>
                <div class="word-overlay">
                    <span class="two-words-overlay">Project<br />Example</span>
                </div>
            </div>
            <!-- END Project title -->
            
            <!-- Button -->
            <div class="button-container">
                <div class="work-button">
                        <a href="#" target="_blank">> VISIT WEBSITE</a>
                </div>
            </div>
            <!-- END Button -->
            
            <!-- Scroll line -->
            <div id="line-scroll-container">
                <span id="line-scroll"></span>
            </div>
            <!-- END Scroll line -->
            
        </section>
        <!-- END Home Case Study -->
        
        <!-- Case Study main section -->
        <section id="case-study-container" class="container">
            <div class="case-study-description">
                <h2>The project</h2>
                <div class="work-details">
                    <ul>
                        <li>ROLE: <span>Developer</span></li>
                        <li>YEAR: <span>2017</span></li>
                    </ul>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. Nam posuere ipsum sit amet est pellentesque, in dignissim erat mattis.</p>
                <img class="work-main-image" src="<?php echo $root ?>images/mockup-1.png" width="557" height="438" alt="Project mockup">
            </div>
            <div class="case-study-description text-left row">
                <div class="col-md-6">
                    <h2>My role</h2>
                    <h3>Step 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis.</p>
                    <h3>Step 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. </p>
                </div>
                <div class="img-description col-md-6">
                    <img src="<?php echo $root ?>images/casestudy-3.png" width="422" height="246" alt="Lorem Ipsum">
                </div>
            </div>
            <div class="case-study-description row">
                <div class="img-description col-12">
                    <img src="<?php echo $root ?>images/casestudy-1.jpg" width="847" height="382" alt="Lorem Ipsum">
                </div>
            </div>
            <div class="case-study-description text-right row">
                <div class="col-md-6">
                    <h2>Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. Nam posuere ipsum sit amet est pellentesque, in dignissim erat mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur ultrices felis. Cras hendrerit eros et dictum fringilla. Nam posuere ipsum sit amet est pellentesque, in dignissim erat mattis.</p>
                </div>
                <div class="item-first img-description col-md-6">
                    <img src="<?php echo $root ?>images/casestudy-2.jpg" width="458" height="289" alt="Lorem Ipsum">
                </div>
            </div>
        </section>
        <!-- END Case Study main section -->
        
        <!-- Case study Footer with link if needed-->
        <section id="case-study-footer" class="work-three">
            <div>
                <a href="#" target="_blank">
                    <img class="project-link" src="<?php echo $root ?>images/link-footer-case-study.png" width="370" height="350" alt="Lorem Ipsum">
                </a>
            </div>
        </section>
        <!-- END Case study Footer with link -->
        
    </main>
    <!-- END Main container -->
    
    <?php include("footer.php"); ?>