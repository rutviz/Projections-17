  <!DOCTYPE html>
  <html>
    <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link rel="stylesheet" href="css/detail_contact_card.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/detailpage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/Event_title_reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/Event_title_style.css"> <!-- Resource style -->
	<script src="js/Event_title_modernizr.js"></script> <!-- Modernizr -->	
	
    <link href="css/registerfloatbutton.css" rel="stylesheet">
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>-->
	
		<style>
		 a{
		color:white!important;
		font-weight:Bold!important;
		}
		.tab a.active {
			outline:none;
		}
		</style>
			
		
		<style>
		a{
		outline:none;
		}
		.indicator
		{
		background-color:white!important;
		}
		#titlename{
		height:35%;width:100%;background:url(img/London-Banner.jpg);background-size:cover;
		}
		#tabs-swipe-demo{
		margin-top:-1%!important;
		color:white;
		}
		@media screen and (max-height: 900px) and (max-width: 500px){
		#titlename{
		margin-top:17%;
		}
		 a{
		 font-size:10px!important;
		}
		#tabs-swipe-demo{
		margin-top:-1%!important;
		}
		}
		
		</style>
    </head>

    <body onscroll="navcolor();" class="black">
	<?php 
		include('header.html');
	?>

		<div id="titlename" >
		<center><h1 class="cd-headline clip is-full-width" >

			<span class="cd-words-wrapper" id="eventtitle1">
				<b class="is-visible">Chemo Quest</b>
				<b >चेमो क्वेस्ट</b>
				<b >ચેમો કુએસ્ત</b>
				
				
				
			</span>
		</h1></center>
		 <ul id="tabs-swipe-demo" class="tabs swipe transparent center " >
    <li class="tab col s3" onclick="moveit(0)"><a class="active" href="#test-swipe-0">Description</a></li>
    <li class="tab col s3" onclick="moveit(1)"><a href="#test-swipe-1" >Rounds</a></li>
    <li class="tab col s3" onclick="moveit(2)"><a href="#test-swipe-2">Rules</a></li>
    <li class="tab col s3" onclick="moveit(3)"><a href="#test-swipe-3">Contact</a></li>
  </ul>	

		</div>

	      
	        
	       
     <!-- cd-intro -->
	 <!-- Resource jQuery -->
	 


	
	<div class="swiper-container swiper-container-v" id="detailswiper">
	<div class="swiper-wrapper ">
	
	<div class="swiper-slide" id="#test-swipe-0" style="background:#44A08D; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #44A08D , #093637); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #44A08D , #093637); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
        
	 <p style="font-size:150%; font-weight:600;">Solve the quest, feel like a scientist !!</p>
      

<p style="font-size:150%;">Relive your school days and fun in chemistry lab. Test your basic knowledge about chemistry </p>

<p style="font-size:150%;" > PARTICIPANTS :-    Individual or a team of 2 </p>
<p style="font-size:150%;">Registration fees:- 150 per person </p>
<button class="demo" onclick="window.open('register_portal_1.php')">Register Button</button>	
  <script src="js/registerfloatbutton.js"></script>
	
	</div>
	<div class="swiper-slide" id="#test-swipe-1" style="

background: #C04848; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #C04848 , #480048); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #C04848 , #480048); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        " >  
    <div class="swiper-container swiper-container-h">
        <div class="swiper-wrapper" >
            <div class="swiper-slide">
                    <p style="font-size:150%; font-weight:600;">Round-1</p>
      

<p style="font-size:150%;">•	Topics from which questions is to be asked will be give to team at the beginning of round 1.</p>  
<p style="font-size:150%;">•	Each team has to choose 1 topic and questions would be asked from that topic only. FIRST COME FIRST SERVE.</p>  
 <p style="font-size:150%; font-weight:600;">Round-2</p>
      

<p style="font-size:150%;">•	Participants would be given the list to find out the chemicals. They would be given clues according to it. </p>  
<p style="font-size:150%;">•	As per maximum answer given, the participant will be selected for next round.</p>   

<p style="font-size:150%; font-weight:600;">Round-3</p>
      

<p style="font-size:150%;">•	The procedure and the chemicals would be given and they have to make the product as per the procedure.</p>  
<p style="font-size:150%;">•	Selection would be done on the basis of accurate product and the first one to complete it.</p>  

            </div>
        </div>
        <!-- Add Scroll Bar -->
        <div class="swiper-scrollbar swiper-scrollbar-h"></div>
    </div>
	</div>
	<div class="swiper-slide" id="#test-swipe-2" style="background: #5A3F37; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #5A3F37 , #2C7744); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #5A3F37 , #2C7744); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">  <p style="font-size:150%">•	No use of internet until instructed to.</p>
<p style="font-size:150%">•	Take safety measure for chemicals.</p>
<p style="font-size:150%">•	Any damage to the property, participants would be responsible and has to pay fine as per it.</p>
<p style="font-size:150%">•	Discipline is must.</p>
</p></div>

<div class="swiper-slide" id="#test-swipe-3"style="padding:0;background: #F3904F; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #F3904F , #3B4371); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #F3904F , #3B4371); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ">
<div class="teammember">
	<div class="teammember__img" title="Image of Jinil Patel" style="background: url(https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/000/0c0/17c/10a99d5.jpg); background-size: cover;">
	</div>
	<div class="teammember__content">
		<h1 class="teammember__content__name"> Jinil K. Patel
		</h1>
		<h3 class="teammember__content__job"> Co-ordinator
		</h3>
		<ul class="teammember__content__contact">
			<li id="phone" data-clipboard-text="+91 9173709999" class="teammember__content__contact__phone">+91 9173709999
			</li>
			<li id="email" data-clipboard-text="pateljinil02@gmail.com" class="teammember__content__contact__email">pateljinil02@gmail.com
			</li>
			
		</ul>
		
	</div>
	
</div>
<div class="teammember">
	<div class="teammember__img" title="Image of Jinil Patel" style="background: url(https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/000/0c0/17c/10a99d5.jpg); background-size: cover;">
	</div>
	<div class="teammember__content">
		<h1 class="teammember__content__name"> Jinil K. Patel
		</h1>
		<h3 class="teammember__content__job"> Co-ordinator
		</h3>
		<ul class="teammember__content__contact">
			<li id="phone" data-clipboard-text="+44 (0) 7702 422 203" class="teammember__content__contact__phone">+91 9173709999
			</li>
			<li id="email" data-clipboard-text="tim.mueller@marketgravity.com" class="teammember__content__contact__email">pateljinil02@gmail.com
			</li>
			
		</ul>
		
	</div>
	
	
</div>
	
</div>
 <div class="swiper-pagination swiper-pagination-v"></div>
 
 </div>
	
	<?php include('footer.html'); ?>
	
	
	
<script src="js/Event_title_jquery-2.1.1.js"></script>
<script src="js/Event_title_main.js"></script>
    <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container-h', {
        scrollbar: '.swiper-scrollbar-h',
        direction: 'vertical',
        slidesPerView: 'auto',
        mousewheelControl: true,
        freeMode: true	
		});
	var swiper1 = new Swiper('.swiper-container-v', {
        
        direction: 'horizontal',
        slidesPerView: 'auto',
		paginationClickable: true,
        mousewheelControl: false,
        freeMode: false,
		keyboardControl:true,
		hashnav:true
    });
    </script>
	 <script src="js/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard by passing a HTML element -->
    <script>
    var btn = document.getElementById('phone');
	var btn = document.getElementById('email');
    var clipboard = new Clipboard(btn);

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
<script type="text/javascript" src="js/details_contact_card.js"></script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script>
	var currentswiper=0,b=0;
	function moveit(a)
	{
		b=1;
		swiper1.slideTo(a,1000,true);
		currentswiper= a;
		b=0;
		//alert(currentswiper);
	}
	swiper1.on('onSlidePrevStart',function(){
		//alert(currentswiper);
		currentswiper=currentswiper-1;
		if(b==0){
		if(currentswiper==2)
		{
		$('ul.tabs').tabs('select_tab','test-swipe-2');
		}else if(currentswiper==1)
		{
		$('ul.tabs').tabs('select_tab','test-swipe-1');
		}else if(currentswiper==0)
		{
		$('ul.tabs').tabs('select_tab','test-swipe-0');
		}
		
		//currentswiper= currentswiper+1;
		
		}
		//alert(currentswiper);
		//alert("change");
  });
  
swiper1.on('onSlideNextStart',function(){
		//alert(currentswiper);
		currentswiper=currentswiper+1;
		if(b==0){
		if(currentswiper==1)
			$('ul.tabs').tabs('select_tab','test-swipe-1');
		else if(currentswiper==2)
		{
		$('ul.tabs').tabs('select_tab','test-swipe-2');
		}else if(currentswiper==3)
		{
		$('ul.tabs').tabs('select_tab','test-swipe-3');
		}
		}
		//alert(currentswiper);
		
		//alert("change");
  });
 function navcolor(){
 	 if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $("header").css("background-color","#000");
    } else {
        $("header").css("background-color","transparent");
    }
 	
 }
  $(document).ready(function(){
      $('.parallax').parallax();
	  $(".button-collapse").sideNav();
    });
  
 </script>

</body>
</html>
        