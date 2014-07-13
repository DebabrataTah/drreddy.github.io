<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title>DRReddy</title>
	<meta name="description" content="Portfolio website of rajeev reddy with links to various apps he developed">
	<meta name="keywords" content="rajeev-reddy, drreddy, herokuapp, rajeev iit kgp, reddy iit kgp, iit kgp">
	<meta name="author" content="Rajeev Reddy">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="google-site-verification" content="bi42fpGeuBPR665XyDUrUNulyvIBs5BQuKvYjD8cHRo" />
	<!-- Import CSS -->
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollto.min.js"></script>
	<script src="js/slabtext.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/main.js"></script>
	<script src="lightbox/js/modernizr.custom.js"></script>
	<script src="lightbox/js/lightbox-2.6.min.js"></script>
	<link rel="stylesheet" href="lightbox/css/lightbox.css" media="screen"/>
	<script>
	$(document).ready(function(){
  		$(".scrolltocerti").click(function(){
			$("body").scrollTo( '#certificates', 1000, {margin:true, offset:-50} )
		});
		$(".scrolltofeatures").click(function(){
			$("body").scrollTo( '#features', 1000, {margin:true, offset:-50} )
		});
  	});
	</script>
</head>
<body class="home color-2">
	<div id="header">
		<div class="container">

			<div class="row">

					<i id="nav-button" class="icon-circle-arrow-down"></i>
					<h2 id="logo"><a href="index.php">Rajeev&nbsp; <span class="highlight">Reddy</span></a></h2>
				

				<div id="top-nav" class="">
					<ul id="fixed-nav">
						<li class="current"><a href="#home">Home</a></li>
                        <li><a href="#aboutme">About Me</a></li>
						<li><a href="#portfolio">Projects</a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="#certificates">Certificates</a></li>
						<li><a href="#contact">Contact Me</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div><!-- End Header -->
	<!-- Big Full screen Banner -->
	<div class="hero bg-fixed bg-color" id="home">

		<div class="slogan">
			<div  class="vcenter container">

				<div class="row">

					<div class="span12">
						<h1>Hi, I'm Rajeev Reddy <br/>Web developer and robotics enthusiast</h1>
					</div>
				</div>
			</div>
		</div>


	</div>
	<!-- End Full screen banner  -->
    <!-- About Us section -->
    <div class="section" id="aboutme">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="span12">
						<div class="title">
							<h2>About Me</h2>
							<div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
							<p>Eat Sleep Code <br/> Stay Hungry Stay Foolish</p>

						</div>
						<p class="" style="text-align:justify;">
							<img src="img/profile.jpg" style="float:right; margin-left: 10px; margin-right: 30px; border-radius: 10px; border-width: 2px; border-color: lightgrey; border-style: dotted;" width="97px">
							<p>
							    Currently a pre-final year student at IIT Kharagpur, India pursuing a bachelor's and master's degree in chemical engineering.
							</p> 
							<p style="text-align:justify;">
							    Apart from studies, I love web based programming. I am good at figuring out the back end part of the web programming but still far behind designing the front end / UI part. Apart from Web based works on php, I have major interest in other things like C, C++, Ruby on Rails, NodeJS, Python, Algorithms Design and Analysis and Graph theory. I have participated in various coding competitions like Yahoo Hack U 2012 & 2013, Microsoft Appathon 2012 & 2013 both held at IIT Kharagpur.
							    <br>
                                <p>
                                    <b>I also have completed several online courses with <a class="scrolltocerti" style="cursor:pointer;">certificate of accomplishments</a> offered by various universities (Stanford, Rice, MongoDB) through MOOC.</b>
                                </p>
                            </p>
                            <p>
                                Iam also part of <b><a href="http://krssg.in" target='none'>Kharagpur Robosoccer Students' Group</a></b> based in IIT Kharagpur, which is a research group that works in the field of autonomous soccer playing robots developed for paticipation in international events like FIRA, Robocup
                            </p>
						</p>
							
						<p class="text-center">
							<span style="color:#3498db !important"><b>↓</b> Below are some of the projects I have developed / worked on <b>↓</b></span>
						</p>
					</div>
				</div>
			</div>
		</div> 

	</div>
	<!-- End About US -->
	<!-- Services Section -->
	<div class="section section-alt" id="portfolio">
		<div class="container">
			<div class="content">
				<div class="row" >
					<div class="title">
						<h2>Projects</h2>
						<div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
						<p>I have developed various projects ranging from simple websites to screen scraping and WebRTC.</p>
						<p style="font-size:12px; ">Below are the list of projects ordered datewise earliest to oldest for more details on each app go to features tab.<br/> 
							<b>Dont have the time to go to the app. No problem, <a class="scrolltofeatures" style="cursor:pointer;">click</a> / scroll to the features section to see the screenshots of the apps.</b>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="span4 i-block">
                        <a href="#">
						<img src="http://farm8.staticflickr.com/7267/13535373504_77c0a6fec7_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>Audio-Fingerprint</h3></a>
						<p>A Song Comparision app using Audio/Acoustic Fingerprinting concept</p>
					</div>
					<div class="span4 i-block">
                        <a href="http://quakes-drreddy.rhcloud.com/">
						<img src="http://farm4.staticflickr.com/3735/13535082943_4c3b2eb0eb_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>Quakes</h3></a>
						<p>EarthQuakes Data Visualization Using Google maps and USGS earthquake data</p>
					</div>
					<div class="span4 i-block">
                        <a href="http://rock-on.herokuapp.com">
						<img src="http://farm3.staticflickr.com/2273/13191526454_5b50e3d5bb_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>RockOn</h3></a>
						<p>Social Music Recommender system with graph visualization</p>
					</div>
				</div>
				<div class="hr hr-invisible"></div>
				<div class="row">
					<div class="span4 i-block">						
                        <a href="http://github-report-card.herokuapp.com/">
						<img src="http://farm4.staticflickr.com/3810/13212597914_3c0ac424ca_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>Github Report Card</h3></a>
						<p>Username based Github report card generation using data from github api</p>
					</div>
					<div class="span4 i-block">
                        <a href="https://drreddy-skunkworks.herokuapp.com/">
						<img src="http://farm3.staticflickr.com/2809/13241774243_556a5aecc0_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>SkunkWorks</h3></a>
						<p>Real time pinging between server & client</p>
					</div>
					<div class="span4 i-block">
                        <a href="http://livefilter-drreddy.rhcloud.com/multidegree">
						<img src="http://farm8.staticflickr.com/7438/12789178415_b290098c5a_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>LiveFilter</h3></a>
						<p>Multi degree ajax + rails filter search application with movies data from IMDB</p>
					</div>
				</div>
				<div class="hr hr-invisible"></div>
				<div class="row">
					<div class="span4 i-block">
                        <a href="http://voisearch.herokuapp.com/test" >
						<img src="http://farm8.staticflickr.com/7364/9644965371_7938b58674_n.jpg" style="margin-bottom:5px;" width="300px" alt="jarvizz">
						<h3>Voisearch</h3></a>
						<p>A voice recognition app with an unique recommendation system using Web speech API<br/><span style="margin-top:3px; font-size:10px;"><b>Works only in Google Chrome and microphone needed<br/><a href="https://chrome.google.com/webstore/detail/jarvis-voisearch/dnbhodbhmgbacidbalokkogfboigomfp" target="none">Click</a> for installing the chrome app.</b></span></p>
					</div>
					<div class="span4 i-block">
                        <a href="http://mygraph.herokuapp.com">
						<img src="http://farm6.staticflickr.com/5537/12189377585_50d7595378_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>MyGraph</h3></a>
						<p>An app showing user's Facebook social graph<br/><span style="margin-top:3px; font-size:10px;"><b>Under Construction</b></span></p>
					</div>
					<div class="span4 i-block">
                        <a href="http://ebuzz.herokuapp.com">
						<img src="http://farm3.staticflickr.com/2861/9564608534_3d620cf351_n.jpg" style="margin-bottom:5px;" width="300px" alt="ebuzz">
						<h3>E-buZZ</h3></a>
						<p>Ruby on Rails and Nokogiri app <br/><span style="margin-top:3px; font-size:10px;"><b><a href="https://chrome.google.com/webstore/detail/e-buzz/efnlkglahcifgilnhginafcdnjbpajjg">Click</a> for installing the chrome extension.</b></span></p>
					</div>
				</div>
				<div class="hr hr-invisible"></div>
				<div class="row">
					<div class="span4 i-block">
                        <a href="http://jarvizz.herokuapp.com" >
						<img src="http://farm8.staticflickr.com/7346/9564826752_4c434ca762_n.jpg" style="margin-bottom:5px;" width="300px" alt="jarvizz">
						<h3>Jarvizz</h3></a>
						<p>WebRTC app <br/><span style="margin-top:3px; font-size:10px;"><b>Works only in Google Chrome and webcam needed</b></span></p>
					</div>
					<div class="span4 i-block">
                        <a href="http://skimphotos.herokuapp.com">
						<img src="http://farm8.staticflickr.com/7354/9561816577_035f29ab58_n.jpg" style="margin-bottom:5px;" width="300px" alt="skimphotos">
						<h3>Skimphotos</h3></a>
						<p>NodeJS and WebRTC app <br/><span style="margin-top:3px; font-size:10px;"><b>Works only in Google Chrome and webcam needed</b></span></p>
					</div>
					<div class="span4 i-block">
                        <a href="http://krssg.in">
						<img src="http://farm4.staticflickr.com/3813/9561817549_c488128e98_n.jpg" style="margin-bottom:5px;" width="300px" alt="krssg">
						<h3>KRSSG</h3></a>
						<p>PHP website with timeline features</p>
					</div>
				</div>
				<div class="hr hr-invisible"></div>
				<div class="row">
					<div class="span4 i-block">
						<img src="http://farm8.staticflickr.com/7302/9561816979_49a491fca7_n.jpg" style="margin-bottom:5px;" width="300px" alt="cheminsight">
						<h3>ChemInsight</h3>
						<p>PHP website</p>
					</div>
					<div class="span4 i-block">
						<img src="http://farm4.staticflickr.com/3756/9561817983_6083b15f44_n.jpg" style="margin-bottom:5px;" width="300px" alt="shaurya">
						<h3>Shaurya</h3>
						<p>PHP website</p>
					</div>
					<div class="span4 i-block">
						<img src="http://farm4.staticflickr.com/3699/9564608556_c03d9d6a58_n.jpg" style="margin-bottom:5px;" width="300px" alt="krssg">
						<h3>KRSSG</h3>
						<p>PHP website developed using Codeigniter</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services Section -->
	<!-- Features Section -->
	<div class="section section-alt" id="features">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="span12">
						<div class="title">
							<h2>Features</h2>
							<div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
							<p>Below are the details/features & screenshots of above mentioned projects.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span12">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>App Name</th>
									<th>Description & Screenshots</th>
								</tr>
							</thead>
							<tbody>
							    <tr>
									<td>Audio-Fingerprint</td>
									<td>
										A Song Comparision app using Audio/Acoustic Fingerprinting concept. Powered by Ruby on Rails, Chromaprint, Libmad, LAME<br/><br/>
										<center>
										<a class="afp" href="http://farm8.staticflickr.com/7267/13535373504_77c0a6fec7_z.jpg" data-lightbox="afp" title="Audio-Fingerprint Homepage"><img class="afp" src="http://farm8.staticflickr.com/7267/13535373504_77c0a6fec7_s.jpg" alt="" width="50" height="50"/></a>
										<a class="afp" href="http://farm4.staticflickr.com/3775/13535158313_a7dbded9d1_z.jpg" data-lightbox="afp" title="Audio-Fingerprint overview"><img class="afp" src="http://farm4.staticflickr.com/3775/13535158313_a7dbded9d1_s.jpg" alt="" width="50" height="50"/></a>
										<a class="afp" href="http://farm8.staticflickr.com/7108/13535158603_f64342e3f2_z.jpg" data-lightbox="afp" title="Audio-Fingerprint app procedure"><img class="afp" src="http://farm8.staticflickr.com/7108/13535158603_f64342e3f2_s.jpg" alt="" width="50" height="50"/></a>
										<a class="afp" href="http://farm4.staticflickr.com/3694/13535158463_9668ee4328_z.jpg" data-lightbox="afp" title="App Generated fingerprint"><img class="afp" src="http://farm4.staticflickr.com/3694/13535158463_9668ee4328_s.jpg" alt="" width="50" height="50"/></a>
										<a class="afp" href="http://farm3.staticflickr.com/2859/13535056435_d798ba4e12_z.jpg" data-lightbox="afp" title="Degree of similarity"><img class="afp" src="http://farm3.staticflickr.com/2859/13535056435_d798ba4e12_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>Quakes</td>
									<td>
										EarthQuakes Data Visualization Using Google maps and USGS earthquake data<br/><br/>
										<center>
										<a class="quakes" href="http://farm4.staticflickr.com/3735/13535082943_4c3b2eb0eb_z.jpg" data-lightbox="quakes" title="Quakes Homepage"><img class="quakes" src="http://farm4.staticflickr.com/3735/13535082943_4c3b2eb0eb_s.jpg" alt="" width="50" height="50"/></a>
										<a class="quakes" href="http://farm3.staticflickr.com/2879/13535298164_4bfe1b5d15_z.jpg" data-lightbox="quakes" title="Quakes color classification based on magnitude"><img class="quakes" src="http://farm3.staticflickr.com/2879/13535298164_4bfe1b5d15_s.jpg" alt="" width="50" height="50"/></a>
										<a class="quakes" href="http://farm6.staticflickr.com/5166/13535083073_a42b672c17_z.jpg" data-lightbox="quakes" title="Quakes color classification based on magnitude"><img class="quakes" src="http://farm6.staticflickr.com/5166/13535083073_a42b672c17_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>RockOn</td>
									<td>
										Social Music Recommender system with graph visualization powered by ROR, sigma.js(graph visuals), omniauth-facebook<br/><br/>
										<center>
										<a class="RockOn" href="http://farm3.staticflickr.com/2273/13191526454_5b50e3d5bb_z.jpg" data-lightbox="RockOn" title="RockOn Homepage"><img class="RockOn" src="http://farm3.staticflickr.com/2273/13191526454_5b50e3d5bb_s.jpg" alt="" width="50" height="50"/></a>
										<a class="RockOn" href="http://farm4.staticflickr.com/3711/13195696555_7cf80fb0cc_z.jpg" data-lightbox="RockOn" title="RockOn data retreival from facebook"><img class="RockOn" src="http://farm4.staticflickr.com/3711/13195696555_7cf80fb0cc_s.jpg" alt="" width="50" height="50"/></a>
										<a class="RockOn" href="http://farm4.staticflickr.com/3730/13200555603_9d8e884d9d_z.jpg" data-lightbox="RockOn" title="RockOn rawdata view"><img class="RockOn" src="http://farm4.staticflickr.com/3730/13200555603_9d8e884d9d_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>Github Report Card</td>
									<td>
										Username based Github report card generation usin data from github api powered by ROR, morris.js(pie chart), ajax<br/><br/>
										<center>
										<a class="githubreportcard" href="http://farm3.staticflickr.com/2837/13212171273_225b3ba922_z.jpg" data-lightbox="githubreportcard" title="Githubreportcard Homepage"><img class="githubreportcard" src="http://farm3.staticflickr.com/2837/13212171273_225b3ba922_s.jpg" alt="" width="50" height="50"/></a>
										<a class="githubreportcard" href="http://farm4.staticflickr.com/3804/13212186443_230ac0f936_z.jpg" data-lightbox="githubreportcard" title="Githubreportcard data loading using github api"><img class="githubreportcard" src="http://farm4.staticflickr.com/3804/13212186443_230ac0f936_s.jpg" alt="" width="50" height="50"/></a>
										<a class="githubreportcard" href="http://farm4.staticflickr.com/3810/13212597914_3c0ac424ca_z.jpg" data-lightbox="githubreportcard" title="Githubreportcard result show"><img class="githubreportcard" src="http://farm4.staticflickr.com/3810/13212597914_3c0ac424ca_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>SkunkWorks</td>
									<td>
										Real time pinging between server & client. Powered by NodeJS, Websockets<br/><br/>
										<center>
										<a class="pings" href="http://farm3.staticflickr.com/2809/13241774243_556a5aecc0_z.jpg" data-lightbox="pings" title="Pings Homepage"><img class="pings" src="http://farm3.staticflickr.com/2809/13241774243_556a5aecc0_s.jpg" alt="" width="50" height="50"/></a>
										<a class="pings" href="http://farm8.staticflickr.com/7048/13242305314_2195ba016b_z.jpg" data-lightbox="pings" title="Pings data from server"><img class="pings" src="http://farm8.staticflickr.com/7048/13242305314_2195ba016b_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>Livefilter</td>
									<td>
										Multi degree ajax + rails filter search application with movies data from IMDB<br/><br/>
										<center>
										<a class="livefilter" href="http://farm8.staticflickr.com/7438/12789178415_b290098c5a_z.jpg" data-lightbox="livefilter" title="Livefilter Homepage"><img class="livefilter" src="http://farm8.staticflickr.com/7438/12789178415_b290098c5a_s.jpg" alt="" width="50" height="50"/></a>
										<a class="livefilter" href="http://farm8.staticflickr.com/7294/12789623544_4d69ed0d81_z.jpg" data-lightbox="livefilter" title="Ajax loading"><img class="livefilter" src="http://farm8.staticflickr.com/7294/12789623544_4d69ed0d81_s.jpg" alt="" width="50" height="50"/></a>
										<a class="livefilter" href="http://farm4.staticflickr.com/3809/12789624454_015603a2ed_z.jpg" data-lightbox="livefilter" title="Single Degree search"><img class="livefilter" src="http://farm4.staticflickr.com/3809/12789624454_015603a2ed_s.jpg" alt="" width="50" height="50"/></a>
										<a class="livefilter" href="http://farm8.staticflickr.com/7393/12789179045_eb903ed51c_z.jpg" data-lightbox="livefilter" title="Multiple Degree search"><img class="livefilter" src="http://farm8.staticflickr.com/7393/12789179045_eb903ed51c_s.jpg" alt="" width="50" height="50"/></a>
										<a class="livefilter" href="http://farm8.staticflickr.com/7360/12789281433_872fa036a8_z.jpg" data-lightbox="livefilter" title="Multiple Degree search"><img class="livefilter" src="http://farm8.staticflickr.com/7360/12789281433_872fa036a8_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
							    <tr>
									<td>Voisearch</td>
									<td>
										Web app using Web speech recognition for voice recognition and an unique recomendation system implemented using Ruby on Rails, Nokogiri, Web speech API. <span style="float:right; font-size:10px;"><b>Works only in Google Chrome and microphone needed</b></span><br/><br/>
										<center>
										<a class="voisearch" href="http://farm8.staticflickr.com/7364/9644965371_7938b58674_z.jpg" data-lightbox="voisearch" title="VoiSearch app test page"><img class="voisearch" src="http://farm8.staticflickr.com/7364/9644965371_7938b58674_s.jpg" alt="Plants: image 1 0f 5 thumb" width="50" height="50"/></a>
										<a class="voisearch" href="http://farm6.staticflickr.com/5545/12348224493_b6805fe472_z.jpg" data-lightbox="voisearch" title="VoiSearch app test page"><img class="voisearch" src="http://farm6.staticflickr.com/5545/12348224493_b6805fe472_s.jpg" alt="Plants: image 1 0f 5 thumb" width="50" height="50"/></a>
										<a class="voisearch" href="http://farm4.staticflickr.com/3808/12348046565_3c5cf18f02_z.jpg" data-lightbox="voisearch" title="VoiSearch app test page results"><img class="voisearch" src="http://farm4.staticflickr.com/3808/12348046565_3c5cf18f02_s.jpg" alt="Plants: image 2 0f 5 thumb" width="50" height="50"/></a>
										<a class="voisearch" href="http://farm6.staticflickr.com/5475/12348505584_c12f4eaf58_z.jpg" data-lightbox="voisearch" title="VoiSearch app Voice recognition"><img class="voisearch" src="http://farm6.staticflickr.com/5475/12348505584_c12f4eaf58_s.jpg" alt="Plants: image 3 0f 5 thumb" width="50" height="50"/></a>
										<a class="voisearch" href="http://farm8.staticflickr.com/7314/12348115273_4c48265cd6_z.jpg" data-lightbox="voisearch" title="VoiSearch Chrome app"><img class="voisearch" src="http://farm8.staticflickr.com/7314/12348115273_4c48265cd6_s.jpg" alt="Plants: image 4 0f 5 thumb" width="50" height="50"/></a>
										<a class="voisearch" href="http://farm8.staticflickr.com/7309/12348395744_91ce5f30ec_z.jpg" data-lightbox="voisearch" title="VoiSearch Chrome app settings"><img class="voisearch" src="http://farm8.staticflickr.com/7309/12348395744_91ce5f30ec_s.jpg" alt="Plants: image 5 0f 5 thumb" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>MyGraph</td>
									<td>An app showing user's Facebook social graph powered by D3 js, Ruby on Rails , Omniauth-facebook, Koala and Nokogiri. <br/><br/>
										<center>
										<a class="mygraph" href="http://farm6.staticflickr.com/5537/12189377585_50d7595378_z.jpg" data-lightbox="mygraph" title="MyGraph Homepage"><img class="mygraph" src="http://farm6.staticflickr.com/5537/12189377585_50d7595378_s.jpg" alt="" width="50" height="50"/></a>
										<a class="mygraph" href="http://farm4.staticflickr.com/3760/12189665034_c175b53a5b_z.jpg" data-lightbox="mygraph" title="Graph Using facebook data and D3.js (Nodes represents friends and Green node represents the user)"><img class="mygraph" src="http://farm4.staticflickr.com/3760/12189665034_c175b53a5b_s.jpg" alt="" width="50" height="50"/></a>
										<a class="mygraph" href="http://farm6.staticflickr.com/5547/12189238065_d603d66cf5_z.jpg" data-lightbox="mygraph" title="Graph Using facebook data and D3.js (Nodes represents friends and Bigger node represents the user)"><img class="mygraph" src="http://farm6.staticflickr.com/5547/12189238065_d603d66cf5_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>Jarvizz</td>
									<td>Web app using jesture recognition from webcam to scroll through the website done using NodeJS, WebRTC, Jquery Scrollpath. <span style="float:right; font-size:10px;"><b>Works only in Google Chrome and webcam needed</b></span><br/><br/>
										<center>
										<a class="Jarvizz" href="http://farm8.staticflickr.com/7346/9564826752_4c434ca762_z.jpg" data-lightbox="Jarvizz" title="Jarvizz Homepage (permission for using webcam asked at the top)"><img class="Jarvizz" src="http://farm8.staticflickr.com/7346/9564826752_4c434ca762_s.jpg" alt="" width="50" height="50"/></a>
										<a class="Jarvizz" href="http://farm4.staticflickr.com/3682/12789997253_697ea7f9fc_z.jpg" data-lightbox="Jarvizz" title="Jquery Scrollpath"><img class="Jarvizz" src="http://farm4.staticflickr.com/3682/12789997253_697ea7f9fc_s.jpg" alt="" width="50" height="50"/></a>
										<a class="Jarvizz" href="http://farm8.staticflickr.com/7313/12790339814_d32a26c926_z.jpg" data-lightbox="Jarvizz" title="Jquery Scrollpath"><img class="Jarvizz" src="http://farm8.staticflickr.com/7313/12790339814_d32a26c926_s.jpg" alt="" width="50" height="50"/></a>
										<a class="Jarvizz" href="http://farm3.staticflickr.com/2844/12789898155_63252db2e3_z.jpg" data-lightbox="Jarvizz" title="Jquery Scrollpath"><img class="Jarvizz" src="http://farm3.staticflickr.com/2844/12789898155_63252db2e3_s.jpg" alt="" width="50" height="50"/></a>
										<a class="Jarvizz" href="http://farm8.staticflickr.com/7337/12790340464_8e0fde8655_z.jpg" data-lightbox="Jarvizz" title="Gesture Recognition"><img class="Jarvizz" src="http://farm8.staticflickr.com/7337/12790340464_8e0fde8655_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>E-buZZ</td>
									<td>This is an online platform powered by ruby on rails and nokogiri that provide recommendations and help you discover new music, movies, shows, books, authors or games, based on what you like. <br/><br/>
										<center>
										<a class="E-buZZ" href="http://farm3.staticflickr.com/2861/9564608534_3d620cf351_z.jpg" data-lightbox="E-buZZ" title="E-buZZ app home page"><img class="E-buZZ" src="http://farm3.staticflickr.com/2861/9564608534_3d620cf351_s.jpg" alt="" width="50" height="50"/></a>
										<a class="E-buZZ" href="http://farm6.staticflickr.com/5505/12790073955_84d0e65b63_z.jpg" data-lightbox="E-buZZ" title="E-buZZ app searching"><img class="E-buZZ" src="http://farm6.staticflickr.com/5505/12790073955_84d0e65b63_s.jpg" alt="" width="50" height="50"/></a>
										<a class="E-buZZ" href="http://farm4.staticflickr.com/3770/12790514624_61b11e04b5_z.jpg" data-lightbox="E-buZZ" title="E-buZZ app information retreival"><img class="E-buZZ" src="http://farm4.staticflickr.com/3770/12790514624_61b11e04b5_s.jpg" alt="" width="50" height="50"/></a>
										<a class="E-buZZ" href="http://farm4.staticflickr.com/3681/12790513644_d8d8f74ae6_z.jpg" data-lightbox="E-buZZ" title="E-buZZ app information"><img class="E-buZZ" src="http://farm4.staticflickr.com/3681/12790513644_d8d8f74ae6_s.jpg" alt="" width="50" height="50"/></a>
										<a class="E-buZZ" href="http://farm8.staticflickr.com/7424/12790075225_55603a35ac_z.jpg" data-lightbox="E-buZZ" title="E-buZZ Chrome extension"><img class="E-buZZ" src="http://farm8.staticflickr.com/7424/12790075225_55603a35ac_s.jpg" alt="" width="50" height="50"/></a>
										<a class="E-buZZ" href="http://farm8.staticflickr.com/7343/12790074375_343d6fd5dc_z.jpg" data-lightbox="E-buZZ" title="E-buZZ Chrome extension"><img class="E-buZZ" src="http://farm8.staticflickr.com/7343/12790074375_343d6fd5dc_s.jpg" alt="" width="50" height="50"/></a>
										<a class="E-buZZ" href="http://farm6.staticflickr.com/5512/12790175863_266fbf168d_z.jpg" data-lightbox="E-buZZ" title="E-buZZ Chrome extension"><img class="E-buZZ" src="http://farm6.staticflickr.com/5512/12790175863_266fbf168d_s.jpg" alt="" width="50" height="50"/></a>
										<a class="E-buZZ" href="http://farm3.staticflickr.com/2851/12790512594_507dabb604_z.jpg" data-lightbox="E-buZZ" title="E-buZZ Chrome extension"><img class="E-buZZ" src="http://farm3.staticflickr.com/2851/12790512594_507dabb604_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>Skimphotos</td>
									<td>An application that allows you view photos that were taken near your current, physical, location. This is a JavaScript web app built on top of the YUI App Framework, YQL, Metro Interface using metro UI CSS and Flickr. The USP of our online platform is that user no more requires to use the mouse or joystick, you can interact with the interface in a unique way by using hand gesture recognition with webcam. <span style="float:right; font-size:10px;"><b>Works only in Google Chrome and webcam needed</b></span> <br/><br/>
										<center>
										<a class="Skimphotos" href="http://farm8.staticflickr.com/7354/9561816577_035f29ab58_z.jpg" data-lightbox="Skimphotos" title="Skimphotos Homepage"><img class="Skimphotos" src="http://farm8.staticflickr.com/7354/9561816577_035f29ab58_s.jpg" alt="" width="50" height="50"/></a>
										<a class="Skimphotos" href="http://farm3.staticflickr.com/2825/12790459243_ea78ce3636_z.jpg" data-lightbox="Skimphotos" title="Gesture Recognition"><img class="Skimphotos" src="http://farm3.staticflickr.com/2825/12790459243_ea78ce3636_s.jpg" alt="" width="50" height="50"/></a>
										<a class="Skimphotos" href="http://farm6.staticflickr.com/5499/12790356935_2b91c762cd_z.jpg" data-lightbox="Skimphotos" title="Scrolling with gesture recognition"><img class="Skimphotos" src="http://farm6.staticflickr.com/5499/12790356935_2b91c762cd_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>KRSSG</td>
									<td>A Website using twitter bootstrap and Timeline JS for timeline developed for research group Kharagpur Robosoccer Students' Group. <br/><br/>
										<center>
										<a class="krssg_new" href="http://farm8.staticflickr.com/7354/9561816577_035f29ab58_z.jpg" data-lightbox="krssg_new" title="K.R.S.S.G. Homepage"><img class="krssg_new" src="http://farm8.staticflickr.com/7354/9561816577_035f29ab58_s.jpg" alt="" width="50" height="50"/></a>
										<a class="krssg_new" href="http://farm8.staticflickr.com/7415/12790460533_6365ba564a_z.jpg" data-lightbox="krssg_new" title="K.R.S.S.G. Homepage"><img class="krssg_new" src="http://farm8.staticflickr.com/7415/12790460533_6365ba564a_s.jpg" alt="" width="50" height="50"/></a>
										<a class="krssg_new" href="http://farm8.staticflickr.com/7373/12790795644_d4786acbc5_z.jpg" data-lightbox="krssg_new" title="Code-O-Soccer Event page"><img class="krssg_new" src="http://farm8.staticflickr.com/7373/12790795644_d4786acbc5_s.jpg" alt="" width="50" height="50"/></a>
										<a class="krssg_new" href="http://farm8.staticflickr.com/7303/12790358455_6a243ab144_s.jpg" data-lightbox="krssg_new" title="K.R.S.S.G. Timeline"><img class="krssg_new" src="http://farm8.staticflickr.com/7303/12790358455_6a243ab144_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>ChemInsight</td>
									<td>A PHP website with registration and messaging developed for annual technical symposium ChemInsight <br/><br/>
										<center>
										<a class="ChemInsight" href="http://farm8.staticflickr.com/7302/9561816979_49a491fca7_z.jpg" data-lightbox="ChemInsight" title="ChemInsight (Annual technical symposium of Chemical Engineering Department, IIT Kharagpur)"><img class="ChemInsight" src="http://farm8.staticflickr.com/7302/9561816979_49a491fca7_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>Shaurya</td>
									<td>A PHP website with registration and messaging which had to handle very large data developed for annual sports fest Shaurya <br/><br/>
										<center>
										<a class="Shaurya" href="http://farm4.staticflickr.com/3756/9561817983_6083b15f44_z.jpg" data-lightbox="Shaurya" title="Shaurya (Sports Fest of IIT Kharagpur)"><img class="Shaurya" src="http://farm4.staticflickr.com/3756/9561817983_6083b15f44_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
								<tr>
									<td>KRSSG</td>
									<td>My first PHP website developed using Codeigniter with registration and messaging developed for research group Kharagpur Robosoccer Students' Group <br/><br/>
										<center>
										<a class="krssg_old" href="http://farm4.staticflickr.com/3699/9564608556_c03d9d6a58_z.jpg" data-lightbox="krssg_old" title="Kharagpur RoboSoccer Students' Group"><img class="krssg_old" src="http://farm4.staticflickr.com/3699/9564608556_c03d9d6a58_s.jpg" alt="" width="50" height="50"/></a>
										</center>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- End Features -->
	<!-- Certificates Section -->
	<div class="section section-alt" id="certificates">
		<div class="container">
			<div class="content">
				<div class="row" >
					<div class="title">
						<h2>Certificates</h2>
						<div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
						<p>I have done various MOOC's based on my interests, Below are the certifications for them.</p>
					</div>
				</div>
				<div class="row">
				    <div class="span4 i-block">
                        <a class="certi" href="http://farm4.staticflickr.com/3689/13257808904_b72e753e50_o.png" data-lightbox="certi" title="Introduction to Databases By Stanford University"><img class="certi" src="http://farm4.staticflickr.com/3689/13257808904_6595a5677c_n.jpg" alt="" style="margin-bottom:5px;" width="300px"/></a>
                        <br/>
						<h4 style="color: #a1a1a1;">Introduction to Databases By Stanford University</h4>
						<a href="https://verify.class.stanford.edu/SOA/5564588d080148f3a1eaa1ad981eba92/" target="none">Authentication URL</a>
					</div>
					<div class="span4 i-block">
                        <a class="certi" href="http://farm8.staticflickr.com/7331/12316449925_5373fd2c02_o.png" data-lightbox="certi" title="MongoDB for DBA's By MongoDB University"><img class="certi" src="https://farm8.staticflickr.com/7331/12316449925_1fcc864c89_n.jpg" alt="" style="margin-bottom:5px;" width="300px"/></a>
                        <br/>
						<h4 style="color: #a1a1a1;">MongoDB for DBA's By MongoDB University</h4>
					</div>
					<div class="span4 i-block">
                        <a class="certi" href="http://farm4.staticflickr.com/3703/11578802143_ec8771406c_o.png" data-lightbox="certi" title="An Introduction to Interactive Programming in Python By RICE University"><img class="certi" src="http://farm4.staticflickr.com/3703/11578802143_246d2298d9_n.jpg" alt="" style="margin-bottom:5px;" width="300px"/></a>
                        <br/>
						<h4 style="color: #a1a1a1;">An Introduction to Interactive Programming in Python By RICE University</h4>
					</div>
				</div>
				<div class="hr hr-invisible"></div>
				<div class="row">
				    <div class="span4 i-block">
                        <a class="certi" href="http://farm6.staticflickr.com/5507/12007820884_28f63c2f78_b.jpg" data-lightbox="certi" title="Web Scraping for Sales & Growth Hackers"><img class="certi" src="http://farm6.staticflickr.com/5507/12007820884_28f63c2f78_n.jpg" alt="" style="margin-bottom:5px;" width="300px"/></a>
                        <br/>
						<h4 style="color: #a1a1a1;">Web Scraping for Sales & Growth Hackers</h4>
					</div>
				    <div class="span4 i-block">
                        <a class="certi" href="http://farm4.staticflickr.com/3788/11492384735_2e4bb8b48d_o.png" data-lightbox="certi" title="Design and Analysis of Algorithm Part-2 By Stanford University"><img class="certi" src="http://farm4.staticflickr.com/3788/11492384735_da35b88125_n.jpg" alt="" style="margin-bottom:5px;" width="300px"/></a>
                        <br/>
						<h4 style="color: #a1a1a1;">Design and Analysis of Algorithm Part-2 By Stanford University</h4>
					</div>
					<div class="span4 i-block">
                        <a class="certi" href="http://farm8.staticflickr.com/7459/9653427304_f06af66421_o.png" data-lightbox="certi" title="Design and Analysis of Algorithm Part-1 By Stanford University"><img class="certi" src="http://farm8.staticflickr.com/7459/9653427304_301efedeaf_n.jpg" alt="" style="margin-bottom:5px;" width="300px"/></a>
                        <br/>
						<h4 style="color: #a1a1a1;">Design and Analysis of Algorithm Part-1 By Stanford University</h4>
					</div>
				</div>
				<div class="hr hr-invisible"></div>
				<div class="row">
					
				</div>
			</div>
		</div>
	</div>
	<!-- End certificates Section -->
	<!-- Contact Section -->
	<div class="section" id="contact" >
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="span12">
						<div class="title">
							<h2>Contact Me</h2>
							<div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
							<p>If you want to get in touch, shoot me a message I will try to respond as early as possible.</p>

						</div>
					</div>
					<div class="span8">
						<iframe width="100%" height="317" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Nehru+Hall+of+Residence,+Kharagpur,+West+Bengal&amp;aq=1&amp;oq=Nehru&amp;sll=22.314526,87.311386&amp;sspn=0.022511,0.042272&amp;ie=UTF8&amp;hq=Nehru+Hall+of+Residence,&amp;hnear=Kharagpur,+West+Medinipur,+West+Bengal&amp;ll=22.319948,87.298196&amp;spn=0.001407,0.002642&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=12284519986240832642&amp;output=embed"></iframe>
					</div>
					<div class="span4">
						<h4>My Location</h4>
						<p>C-214, Nehru Hall of Residence, IIT Kharagpur, Kharagpur, West Bengal - 721302</p>
						<hr class="grey"/>
						<h4>Email</h4>
						<p>rajeev.reddy.d@gmail.com</p>
						<hr class="grey"/>
						<h4>Other means</h4>
						<div class="social">
							<a href="http://facebook.com/rajeev.reddy.d" target="none" ><img class="fb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEjElEQVR42r2X+1PUZRTG+Rf6S2ym37qJmhllmZUgl70h7AKKKHdYYMEm6WZKpSEs4iiwC7ssLJSURlTepnFyqtGaMqame0MiCiJettN7XubZ9+zudxt+kpnPnHOe91welh+ADP564KG6BxXdiqn7RDfflMenipoiM3u7zsT29Z6n13vOWoK35PjmEcxASz/X3n02xrf4pjbBbgobh2f2HPyMKl89SR7f++RuGTf4xqm07QTgWlPS+gF6ZC9H3Sd1aGWKivYJernzc+KbfDuDnXjf/iRWvneCPGppUcsYYgqetoR35IzskdEy39n+IXkPTMb49rKBjklyt47TtuYoFTaNaop94zJPW/MMakd9mDaX+SnL1UEbHPvpKaeJ/A74VvM7UxQ3UL9/kpyNI2rZGIjXLu/ocmwc1ZrWm/S7Bn222hDZq3vp5OnLNH9ziZK+MK9MR3Ws23fKGNitfi6F3qj6DiKIIJ2eorm9QZqbv0X3Yv9awr0SddMYKH/lBDkaRjQFtWHkKRpyuzrIURKauEi378bSwjNyh7ppDHh8Ud2QXxNSH+Uw8hXBvczlK3/S4tK9tKAPM+6WqDFQ1BRVroY1uVVDDGo1EJYaYkrvwuLdBD468yMVt4zpNyDnXI0RYyCvepCydwcot3oIpKsRU7i+cCcBR0NYzmq2Vg3Gc3XTGMipHKSXKgbiZO8KktQ4Z2S+pSKAWsfZG3ck6AMWO4SBLbsCBF4o7wOo1bGBhHfkmblvaFbnvEYz125LWOM3YLXfGHh++3ECL+4ciLN5Rx805Kh1/Ovq0krBTswrA/3GwHOlx0ihHvvUoX7EBDaVHece1Dr/febWivj4/DRmxE5hYJNytbHkKHFEzsT1smOWb7/+vbgiTp2blvuAMfCscva0u1fDOUCNt+T65z9urohDgQtyH3JjYKPnKDFZRT0cATQZ0+bTvy1I/m8fdGPgyUI/MRu29RDyrOJe5JY1NOg//DIvUUeOJM/gBuaMARYlTzi7ZI6IBZbv3/10Q8I6kL0yGgPrXX5a7/TTWvthDdcMclFbRubS9HWJ1Tw0YAysc3QRk1nwno5rCjpRp2Wd3fQzX1+Zk+ANfagB19LAYXo87yCtsXVylEDXyJ7M/EMa1Be/n5OgN+0OddMYWGt7lx7JfoseVjyW26F5NOeAjtAANETkF769JpG9ljOr8zqMgRLfCDnrh8hRN8jovLAxLDVdI7qUjhp8cWlWonpCWnc1hLg3pb+4KZxowF4bBDzEpGiIbAw1OPfNVQn3oN9yn1sacDeHqaAmQA41BNglNI725VpjUwug4+30V/9I5CzyhJpvmj/J2ED1AOVXJaCcDibUtuqg1qDL+OmXM5LkWbU/AE1/c6W+iPgEvOEYfyx5fEQ1WcFvwFaTXAcT6nx1TMwgB8pAkDzNwzEY6H7G7Z8tbRslZ8MQ5atlzNbKfqCGAjriLVctQS36ZI/MxVtA3+BbfBP/mq3SvxE9/tni5lBsx54olbZGiCOAhmhFWduI6RFxuzomtRJfJMa3+CbfziAimLjf/56v4tv/AZV863+91et3AAAAAElFTkSuQmCC" /></a>
							<a href="https://plus.google.com/104803465564916287423" target="none" ><img class="g" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowNjgwMTE3NDA3MjA2ODExODNCNEQ3ODA2MUJDRTBGNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozQjM4QTc2NjgxQzMxMUUxQkRFM0I3Mjc5MjMzOTg0MSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozQjM4QTc2NTgxQzMxMUUxQkRFM0I3Mjc5MjMzOTg0MSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjAyODAxMTc0MDcyMDY4MTE4Q0JDRDUxRTI3NzU5NDNEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjA2ODAxMTc0MDcyMDY4MTE4M0I0RDc4MDYxQkNFMEY2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+QiX9rQAABQRJREFUeNq8V2tsFFUU/ubO7Hvb7hZKaYFu2RaaVDSVRhGtQUOEUkGwNUIiP3wkoPaHMf4wYogmoIlgYqxYURTCHx4aiMaEiASx0AoGiqRSYIFWCu22S4vdbme7Ozsv7+7SaSfdbQconuTsZOae1z33O+ee5TbOzcV8l7k8IMgH+2PKjCFZZXEfyc4ysttMunItbPXZYKyZK3OZK1tD4qH5JV6m0pMPp9VyP/2DjwrshQ5/wVlf++myLPNK5quH8m8UewtnzrPIUMODIHmzwJbMA8l0gUzNBZlRAMZqH9eo3HYJkV2fQ40JaWWIawqU4C0wJjMYRwZaYxwut/3j5/po2pdJIZieqYalshpkWh7UIT6hxNidE+4o1vALhnamd+4+0JR4DqyvhqqCysWo0i0UExZNgpLHqRYrk731O7AzCyFdbAH/6fuQ2nwJJdZTBPsrb8H0YLlmMO4osu9bGmQYaiiI2J8NhlKv3uZhYhUZkqoyJNtTmHAeNzSwsRbiVV8yUsrStTaENr2D2MljmiJjtsC8YBGivx2CcKpBk03HWgBp1gjDMElw7K6HIitQ6IKORRGhuo+g9AY0YxzFiG3Na2NlU/AwKUi9RhKLfAiSvzPtLpRIBOH9O3UptVU+D1hshjOANGtcIoCBoC7aVDR07DAcL9eCODM1gJrKH0e08agmM/2nprT6U3YcHPvthVXJDICQCVMp06MQmk/pDLCzZqdMt1EyWa3JDLDuKVAZ2gAVZVwF4VIrbIuW6ABJgay9d62oGKMz4+fGtGs9/lAyA4zVNmY3qVikOBlN0u2jMwJChja1tCCMk/XRiolRLUq6AKIXzxsOQFUxfgAZK2qgmizjGuM8Xs2g2HkdkQvGA1AmCoB1Z8P96pvpjTEEGUuXJ3cjieit25K6b9xhH+BGpzTruZpEzfft2q5LdRxs02rfhrmwKPHeW/8Zwi3nDCH9SmXFuOtcvLx0l8fqtXAuWgy+qQExmmZL0RzYy8phnlkAVRDQvXUzBk8cm7TrmQv1dOPfA/vgqloJYrMl63N6Htw1a/SStES7Pv4A/MnGSZ0POIHn0bN9G3q+qYfjYbpT6jxOmU8+DUf5I5rgwO9HEfqjcdIHFG4YoaCAGjxzegQPS6r0NR8M3lW3m4hIuhJhMzJ1gllPLQabk2voBjTK4wbA/92iT1V2Noq/2A5rSen/E0D37l2Qw7z+8piagzl1X8K9tGrSAkj2Ac4M+9wS2LxeOOhTm/cCN+k3/VzIcCZ43t0A6+widNZvu3cQ2t1uzNu7H2a6u9GAEwIBRLs6wbeeh+uJCpjoEYym3BdXgzgcuLblk3sLIJOWXdx5//Hj6P31MMI+H915QJ/6HTvgfW8DXAsX6r7nPLscMu2cHXV1dx0Au2xOwYeWhhPw79mDSEcHZD48du6PRtF35Agk2jMyy8roMYx0cGfpAxg405zI2J3SNVEAUSQJwb/OGQKN//sf0LJuHSLXr+sM5b+09u6roL+9XRXpZT3RcDnM4avtaFn/Boba2rUAXI8toOgkhm0kRn76w4JRiYOw3TdlUfvjYITFUAi+TZtHKoPOlMTpvCMbAeoz7ptkMOzrHWJUvSEJEBTjmeAvX0HU352cD+hFJQ1FDOnFfcR9xX3GfTMq/fp1qad8UJF/jEDOp8dBjIIou8ADhmUh0Wt6wN9lbBJmGIVOoP4Mwq5af6Gj+T8BBgD0dRW9Dw1BtwAAAABJRU5ErkJggg==" /></a>
							<a href="http://in.linkedin.com/in/rajeevreddy/" target="none" ><img class="in" width="32px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAqCAYAAADFw8lbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowMjgwMTE3NDA3MjA2ODExODhDNjk2M0UzQTYzMDg2QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo0RjEzRUE1MUQ4QkIxMUUxODFGNEEwOTE4OTc4RjdBNSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo0RjEzRUE1MEQ4QkIxMUUxODFGNEEwOTE4OTc4RjdBNSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjAyODAxMTc0MDcyMDY4MTE4OEM2OTYzRTNBNjMwODZDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjAyODAxMTc0MDcyMDY4MTE4OEM2OTYzRTNBNjMwODZDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+fq67HgAAA69JREFUeNrUmFlsTFEYx//3zG1L92JGdSVNBBVLiC2WRBCJ2D15Ubx4ItJ4IRIJIbG+eEKERERiiSV4QCRCQkVQqeWNLqlRNdM1d5Z7PufczjQd5Z5rhs7tyZw5c/bf/M/5vnPu1ZbUXoQMelHOSm5EzvJQpBScNKQxaDoztREZb1imvurh3o1+q0yCevJHnjO7jO0VVT54iwvBPCydnAiHovC3/IC/NRhleVkbHu3bdEdbevDqVjPYe75qejk6OaErFBGCUlpBM4RQhSMzwboMNDe2Gyx3hNdTuWD9fW/Z6NxvnMOImEgzoxVMIVhPOIqwAM7VmG6EIhU6RUxfUOOuAPw1hEwTpkcDRc2FusBnJhN70oWgFqxQUHyydZkhcillH1yfV5Jf3MWccqW1OKgTRUvys7F5VpWVvmr6jtsNjZaH+O8+VZIKvpiiatCTa+eipCDb+j27fAzGCeCjj+v/P6hAk17d8uzC5m3jLAEWh4yHNVMrlP3+RSQM2KMqQT/4g9Yy52Vl9Je9bGobEpcm56B+RUXOLnYYYRx59BYtHb1W57rGNpx++kHZ719ESrB6B2b/4FOLFYf8gkJ9xu7YmNIV2N/60de16xLyL760Yce1Z3+sn3nippVunDYeyyeWYm6l18o3d/TgRv1nXBex01C7Nx5Lk1ZUWqNdv0m+AuxaXI15lb6E8rKCHOxcVI1lAn7P7ToL3N6YrCPUmTH9Cciu/tjqOYMgB4YpYwuxf8UMx8aUNCgpQMsKc5SrIv/IZAFsO3dsruSNidT9Gr4GsPvWczQFe1AuwE+tnYfq4qKENnLvvmv9Ybv0crIUFLWv7xS+t+bKE3wJdFv1Mj3z/OOgdtVji9TLH196k6vj704Mu/p3rQEEesMJbe6+bx7UTp52dvPyPkFT86Oqfk7HtWsXP0JTcE+KCRyOq2rHEx2+ixUFpXaEEpFiyciZospxMDwUjVt90s9MpOhHDsdVjjNsFMVARXmSe5RT0vWOx+F/+XCXPquPXaCX1F6kt1nufazPF6eTz8Q3feDl1I0h5YvzUL7RIdLg+ndPBG14vHvq96MUy5Gbl16CRsW1z0PwhF0KmiHvvUC73q1Rg5e0ac2aO21/lLjbG6DLeg/RthKwOqEo87vMUVUSk0bU/vF4zSG9DOxVC/iWCmIX8gFPl0boRvr2rHwNlyssPU9AZgKBAGhmv9WXgl1qBL8nKg4XEZtfDEwQTsGTDlCxH3tDoE8iPqw/XnMgXv5TgAEAiruRJeH0ERoAAAAASUVORK5CYII=" /></a>
							<a href="https://github.com/drreddy" target="none" ><img class="git" src="data:image/png;base64,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" /></a>
						</div>

					</div>
				</div>
			</div>
		</div> 

	</div>
	<!-- End Contact Section -->
	<div id="footer">
		&copy; 2014 D Rajeev Reddy || Powered by: <a href='http://heroku.com' target='none'>Heroku</a> .
	</div>
	
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-49393972-1', 'drreddy.herokuapp.com');
      ga('send', 'pageview');
    </script>
	
</body>
</html>