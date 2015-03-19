<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Portfolio - Samir Ishak</title>
        <meta name="description" content="" />
        <meta name="robots" content="" />

        <link href='http://fonts.googleapis.com/css?family=Maven+Pro:700,900|Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>

        {{HTML::style('layout/css/reset.css')}}
        {{HTML::style('layout/css/960.css')}}
        {{HTML::style('layout/css/styles.css')}}
        {{HTML::style('layout/fancybox/jquery.fancybox-1.3.4.css')}}
        {{HTML::script('layout/js/jquery.min.js')}}
        {{HTML::script('layout/js/smooth-scroll.js')}}
        {{HTML::script('layout/js/jquery.sticky.js')}}
        {{HTML::script('layout/fancybox/jquery.fancybox-1.3.4.pack.js')}}
        {{HTML::script('layout/js/jquery.easing-1.3.pack.js')}}
        {{HTML::script('layout/fancybox/jquery.mousewheel-3.0.4.pack.js')}}

        <script type="text/javascript"> // sticky nav bar 
            $(document).ready(function(){
                $("nav").sticky({topSpacing:0});
            });
        </script>

        <script type="text/javascript"> // fancybox
            $(document).ready(function() {

                /* This is basic - uses default settings */

                $("a.single_image").fancybox();

                /* Using custom settings */

                $("a#inline").fancybox({
                    'hideOnContentClick': true
                });

                /* Apply fancybox to multiple items */

                $("a.group").fancybox({
                    'transitionIn'	:	'elastic',
                    'transitionOut'	:	'elastic',
                    'speedIn'		:	600, 
                    'speedOut'		:	200, 
                    'overlayShow'	:	false
                });

            });
        </script>

    </head>

    <div class="topbar">
        @if(Session::has('erreurMessage'))
            <div class="alert alert-danger">{{ Session::get('erreurMessage') }}</div>
        @endif
    </div> <!-- top bar -->

    <div id="intro">
        <div class="title">
            <h1>Welcome<br />
                <span class="small">my name is</span><br />
                <span class="name">Samir Ishak</span><br />
                <span class="intro_line"></span><span class="amp">&</span><span class="intro_line"></span><br />
                <span class="small">i'm a web developper</span></h1>
        </div> <!-- end .title -->
    </div> <!-- end #intro -->


    <nav>
        <ul>
            <li><a href="#intro">home</a></li>
            <li><a href="#work">work</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#contact">contact</a></li>
            @if(Auth::check())
                <li><a href="#contact">Administration</a></li>
            @endif
        </ul>
    </nav> <!-- end nav -->


    <div id="work-erreur">
        <div class="container_16">
            <p id="name-erreur">404</p>
            <div class="gallery">
            </div><!-- end .gallery -->

        </div> <!-- end .container_16 -->
    </div>
    <footer>
        <p>&copy; 2012 All rights reserved</p>
    </footer>
