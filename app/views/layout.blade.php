
<!DOCTYPE html>
<html lang="">
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

<div class="topbar">@if(Auth::check())
        <p>{{ Session::get('erreurMessage') }}</p>
    @endif</div> <!-- top bar -->

<div id="intro">
	<div class="title">
		<h1>Welcome<br />
		<span class="small">my name is</span><br />
		<span class="name">Samir Ishak</span><br />
		<span class="intro_line"></span><span class="amp">&</span><span class="intro_line"></span><br />
		<span class="small">i'm a web developper</span></h1>
        @if(Session::has('erreurMessage'))
            <div class="alert alert-danger">{{ Session::get('erreurMessage') }}</div>
        @endif
	</div> <!-- end .title -->
</div> <!-- end #intro -->


<nav>
	<ul>
		<li><a href="#intro">Acceuil</a></li>
		<li><a href="#work">Mon travail</a></li>
		<li><a href="#services">services</a></li>
		<li><a href="#about">à propos de moi?</a></li>
		<li><a href="#contact">contact</a></li>
        @if(Auth::check())
            <li><a href="#contact">Administration</a></li>
        @endif
	</ul>
</nav> <!-- end nav -->


<div id="work">
	<div class="container_16">
		
		<div class="subheader">
			<div class="subheader_line"></div><h2>Mon travail</h2><div class="subheader_line"></div>
		</div>
		
		<div class="gallery">
		</div><!-- end .gallery -->
		
	</div> <!-- end .container_16 -->
</div> <!-- end #work -->

<div class="work_bg_bottom"></div>

<div id="services">
	<div class="container_16">
	
		<div class="subheader">
			<div class="subheader_line"></div><h2>services</h2><div class="subheader_line"></div>
		</div>
		
		<div class="clear"></div>
		
		<div class="serv_icons">
			<div class="grid_4">
				<div class="serv_icon1"></div>
				<h3>Front-end</h3>
				<p>Mes compétences dans le front-end sont variées, je me spécialise dans le Javascript et ces différentes bibliothèques : JQuery, Ajax, Angular.js .</p>
			</div>
		
			<div class="grid_4">
				<div class="serv_icon2"></div>
				<h3>Back-end</h3>
				<p>J'affectionne particulièrement le back-end. Mes compétences varient selon les langages que j'utilise. Mes langages favoris sont PHP et Ruby. J'utilise les framworks: Laravel et Ruby On Rails.</p>
			</div>
			
			<div class="grid_4">
				<div class="serv_icon4"></div>
				<h3>wordpress</h3>
				<p>Pas mal de projet d'études mon formé sur le CMS Wordpress. Je me suis aussi auto-formé pour avoir un certain niveau sur ce CMS, afin de proposer de la qualité à mes futures donneurs d'ordres.</p>
			</div>

            <div class="grid_4">
                <div class="serv_icon3"></div>
                <h3>Autres</h3>
                <p>Curieux, je m'intéresse à de nouvelles technos commme Java, C#, Phaser.io et Node.js.</p>
            </div>
		</div> <!-- end .serv_icons -->
		
	</div> <!-- end .container_16 -->
</div> <!-- end #services -->

<div class="services_bg_bottom"></div>

<div id="about">
	<div class="container_16">
	
		<div class="subheader">
			<div class="subheader_line"></div><h2>Mes infos</h2><div class="subheader_line"></div>
		</div>
	
	<div class="grid_5">
		<div class="about_pic"></div>
		<div class="social">
			<ul>
				<li><a href="#"><div class="twitter sprite"></div></a></li>
				<li><a href="#"><div class="facebook sprite"></div></a></li>
				<li><a href="#"><div class="linkedin sprite"></div></a></li>
				<li><a href="#"><div class="dribble sprite"></div></a></li>
			</ul>
		</div> <!-- end .social -->
	</div> <!-- end .grid_5 -->
	
	<div class="grid_6">
			<div class="about_copy">
			<h4>Qui suis-je?</h4>
			<p>Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything.</p>
			<p>There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Look, I ain't in this for your revolution, and I'm not in it for you.</p>
			<p>I want to come with you to Alderaan. There's nothing for me here now. I want to learn the ways of the Force and be a Jedi, like my father before me. Still, she's got a lot of spirit. I don't know, what do you think?</p>
		</div> <!-- end .about_copy -->
	</div> <!-- end .grid_6 -->
	
	<div class="grid_5">
		<div class="skills">
			<h4>Compétence</h4>
			<ul>
				<li><div class="skill1"><p>PHP/MySQL</p></div></li>
				<li><div class="skill2"><p>HTML/CSS</p></div></li>
				<li><div class="skill3"><p>Javascript</p></div></li>
				<li><div class="skill4"><p>Ruby</p></div></li>
				<li><div class="skill5"><p>PhotoShop</p></div></li>
				<li><div class="skill6"><p>Node.js</p></div></li>
			</ul>
		</div> <!-- end .skills -->
	</div> <!-- end .grid_5 -->
	
	</div> <!-- end .container_16 -->
</div> <!-- end #about -->

<div class="about_bg_bottom"></div>

<div id="contact">
	<div class="container_16">
	
		<div class="subheader">
			<div class="subheader_line"></div><h2>contact</h2><div class="subheader_line"></div>
		</div>
		
		<div class="grid_7">
			<div class="contact_form">
				<h4>Get in touch</h4>
				<form method="post">
					<input type="text" name="Name" id="name" value="Name" onfocus="this.value = this.value=='Name'?'':this.value;" onblur="this.value = this.value==''?'Name':this.value;" />
					<input type="text" name="Email" id="email" value="Email" onfocus="this.value = this.value=='Email'?'':this.value;" onblur="this.value = this.value==''?'Email':this.value;" />
					<input type="text" value="Subject" id="subject" onfocus="this.value = this.value=='Subject'?'':this.value;" onblur="this.value = this.value==''?'Subject':this.value;" />
					<textarea name="Message" id="body" onfocus="this.value = this.value=='Message'?'':this.value;" onblur="this.value = this.value==''?'Message':this.value;">Message</textarea>
					<input type="submit" name="submit" id="submit" value="send" class="submit-button" onClick="return check_values();" />
				</form>
				<div id="confirmation" style="display:none; position: relative; z-index: 600; font-family: 'Open Sans', sans-serif; font-weight: 300; font-size: 16px; color: #4e4e4e;"></div>
			</div> <!-- end .contact_form -->
				
		</div> <!-- end .grid_7 -->
				
		<div class="grid_9">
		
			<div class="contact_info">
				<h4>Informations</h4>
				<div class="grid_4 alpha">
					<p>{{ HTML::image('layout/img/icn_phone.png') }} 06-95-49-44-64</p>
					<p>{{ HTML::image('layout/img/icn_mail.png') }} samir.ishak@epitech.eu</p>
				</div>
				<div class="grid_4 omega">
					<p>
					<span class="address"> Montreuil-sous-bois</span><br />
					<span class="address">93100</span></p>
				</div>
			</div> <!-- end .contact_info -->
		
			<div class="map">
				<iframe class="map_frame" width="506" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pt/maps?f=q&amp;source=s_q&amp;hl=pt-PT&amp;geocode=&amp;q=Mairie+de+Montreuil+fr&amp;aq=&amp;sll=48.8614358,2.4460872&amp;sspn=48.8614358,2.4460872&amp;ie=UTF8&amp;hq=&amp;hnear=Montreuil+Sous+Bois,+93100,+France&amp;t=m&amp;ll=40.763901,-73.973179&amp;spn=0.013002,0.043344&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
			</div> <!-- end .map -->
			
		</div> <!-- end .grid_9 -->
		
	</div> <!-- end .container_16 -->
</div> <!-- end #contact -->

<div class="contact_bg_bottom"></div>

<footer>
	<p>&copy; 2012 All rights reserved</p>
</footer>