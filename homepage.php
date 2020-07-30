<?php /* Template Name: Home Page

*/?>









<!DOCTYPE html>

<html >

    <head>



         <!-- Basic Page Needs

        ================================================== -->

        <meta charset="utf-8">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

        <title>Data Analytics and Optimization Lab</title>

        <meta name="description" content="A LABORATORY WEBSITE">

        <meta name="keywords" content="DAOL LAB , DATA ANALYTICS">

        <meta name="author" content="Sampath Gogineni">

        

        

        <!-- Mobile Specific Metas

        ================================================== -->

        <meta name="format-detection" content="telephone=no">

        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        

        <!-- Website CSS Files

        ================================================== -->

        <!-- Twitter Bootstrs CSS -->

        <link rel="stylesheet" href="https://web1.cs.wright.edu/research/daol/daollab/css/bootstrap.min.css">

        <!-- Website main css file -->

        <link rel="stylesheet" href="https://web1.cs.wright.edu/research/daol/daollab/css/main.css">

        <!-- Icons css file-->

        <link rel="stylesheet" href="https://web1.cs.wright.edu/research/daol/daollab/css/font-awesome.css">

        <!-- Image Slider css file-->

        <link rel="stylesheet" href="https://web1.cs.wright.edu/research/daol/daollab/css/flexslider.css">

       

         

        



        <!-- Website Javascript Files

        ================================================== -->

         <!-- Jquery js -->

        <script type='text/javascript' src='https://code.jquery.com/jquery-1.9.1.js'> </script>

        <!-- bootstrap js -->

        <script src="https://web1.cs.wright.edu/research/daol/daollab/js/bootstrap.min.js"></script> 

         <!-- flexslider js -->

        <script defer src="https://web1.cs.wright.edu/research/daol/daollab/js/jquery.flexslider.js"></script>

        <!-- Website Main js  File-->

        <script src="https://web1.cs.wright.edu/research/daol/daollab/js/main.js"></script> 



        <!--- Title Icon -->

       





       



        

    </head>

    <body>

        

      

        

        

         <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       

            the_content(); // displays whatever you wrote in the wordpress editor

                endwhile; endif; //ends the loop

        ?>

            <!-- ==================================================

            Footer Section Start

            ================================================== -->



            <footer id="footer">

                <div class="container">

                    <hr>

                    <div class="col-md-12 ">

                        <p class="copyright footerleft"> DATA ANALYTICS AND OPTIMIZATION LABORATORY </p> <p class="footerright">&copy; 2016. Developed by <a href="https://www.linkedin.com/in/sampath-gogineni-923892108" target="_blank">Sampath Gogineni</a> </p>

                    </div>

                </div>

            </footer> <!-- /#footer -->

            

                

        </body>

    </html>
