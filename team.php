<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	 
	 
<title>Team Page
</title>
<link rel="stylesheet" type="text/css" href="./css/team.css">
<style type="text/css">
	
	#menu{
		margin-right: 2%;
	}

	.controls{
	  padding: 2%;
	  margin-top: 10%;
	  background: #333;
	  color: #eee;
	}

	button{
	  display: inline-block;
	  padding: .4em .8em;
	  background: #666;
	  border: 0;
	  color: #ddd;
	  font-size: 16px;
	  font-weight: 300;
	  border-radius: 4px;
	  cursor: pointer;
	}

	button.active{
	  background: #68b8c4;
	}

	button:focus{
	  outline: 0 none;
	}

	.wrapper .mix,
	.wrapper .gap{
	  display: inline-block;
	}

	.wrapper .mix{
	  display: none;
	}

	@media all and (min-width: 420px){
	  .wrapper .mix,
	  .wrapper .gap{
	    width: 32%;
	  }
	}

	@media all and (min-width: 640px){
	  .wrapper .mix,
	  .wrapper .gap{
	    width: 27.5%;
	  }
	}
</style>
</head>

<body>

     <?php
	include("header.html");	
	?>
	  
<div class="controls">
	  <label>Team:</label>
	  
	  <button class="filter-1" data-filter=".core">Core Team</button>
	  <button class="filter-1 active" data-filter=".web">Web Team</button>
	  
	</div>


<div class="wrapper" id="MixItUp1">

	<div data-active="inactive" class="card card--small mix core"><button title="Social Networks" class="card__btn ico"></button>

		<div class="social">
			<a href="https://www.facebook.com/harshitks2203" target="_blank" class="social__link ico"></a>
			<a href="https://www.twitter.com/harshitks2203" target="_blank" class="social__link ico"></a>
			<a href="https://plus.google.com/+HarshitSingh22" target="_blank" class="social__link ico"></a>
			<a href="https://www.instagram.com/harshitks" target="_blank" class="social__link ico"></a>
		</div>

		<figure class="card__image-container card__image-container--small"><img src="./images/4.jpg" alt="Image" class="card__image"/></figure><article class="review review--small"><h2 class="review__name review__name--small">Harshit Singh</h2><h3 class="review__city">Chief creative officer, Tokyo</h3>

		<p class="review__content review__content--small">This man is able to write a complete web app just using the windows notepad, that's awesome...</p></article>
	</div>

	<div data-active="inactive" class="card card--small mix web"><button title="Social Networks" class="card__btn ico"></button>

		<div class="social">
			<a href="https://www.facebook.com" target="_blank" class="social__link ico"></a>
			<a href="https://www.twitter.com/" target="_blank" class="social__link ico"></a>
			<a href="https://plus.google.com/" target="_blank" class="social__link ico"></a>
			<a href="https://www.instagram.com/" target="_blank" class="social__link ico"></a>
		</div>

		<figure class="card__image-container card__image-container--small"><img src="./images/3.jpg" alt="Image" class="card__image"/></figure><article class="review review--small"><h2 class="review__name review__name--small">Rutviz Vyas</h2><h3 class="review__city">Chief creative officer, Tokyo</h3>

		<p class="review__content review__content--small">This man is able to write a complete web app just using the windows notepad, that's awesome...</p></article>
	</div>

	<div data-active="inactive" class="card card--small mix core"><button title="Social Networks" class="card__btn ico"></button>

		<div class="social">
			<a href="https://www.facebook.com" target="_blank" class="social__link ico"></a>
			<a href="https://www.twitter.com/" target="_blank" class="social__link ico"></a>
			<a href="https://plus.google.com/" target="_blank" class="social__link ico"></a>
			<a href="https://www.instagram.com/" target="_blank" class="social__link ico"></a>
		</div>

		<figure class="card__image-container card__image-container--small"><img src="./images/2.jpg" alt="Image" class="card__image"/></figure><article class="review review--small"><h2 class="review__name review__name--small">Dhrumit Patel</h2><h3 class="review__city">Chief creative officer, Tokyo</h3>

		<p class="review__content review__content--small">This man is able to write a complete web app just using the windows notepad, that's awesome...</p></article>
	</div>

	<div data-active="inactive" class="card card--small mix core"><button title="Social Networks" class="card__btn ico"></button>

		<div class="social">
			<a href="https://www.facebook.com" target="_blank" class="social__link ico"></a>
			<a href="https://www.twitter.com/" target="_blank" class="social__link ico"></a>
			<a href="https://plus.google.com/" target="_blank" class="social__link ico"></a>
			<a href="https://www.instagram.com/" target="_blank" class="social__link ico"></a>
		</div>

		<figure class="card__image-container card__image-container--small"><img src="./images/1.jpg" alt="Image" class="card__image"/></figure><article class="review review--small"><h2 class="review__name review__name--small">Sunny Radadiya</h2><h3 class="review__city">Chief creative officer, México</h3>

		<p class="review__content review__content--small">This man is able to write a complete web app just using the windows notepad, that's awesome...</p></article>
	</div>

	<div data-active="inactive" class="card card--small mix web"><button title="Social Networks" class="card__btn ico"></button>

		<div class="social">
			<a href="https://www.facebook.com" target="_blank" class="social__link ico"></a>
			<a href="https://www.twitter.com/" target="_blank" class="social__link ico"></a>
			<a href="https://plus.google.com/" target="_blank" class="social__link ico"></a>
			<a href="https://www.instagram.com/" target="_blank" class="social__link ico"></a>
		</div>

		<figure class="card__image-container card__image-container--small"><img src="./images/1.jpg" alt="Image" class="card__image"/></figure><article class="review review--small"><h2 class="review__name review__name--small">Harshit Singh</h2><h3 class="review__city">Founder & chief executive officer, Mars</h3>

		<p class="review__content review__content--small">This man is able to write a complete web app just using the windows notepad, that's awesome...</p></article>
	</div>

	<div data-active="inactive" class="card card--small mix web"><button title="Social Networks" class="card__btn ico"></button>

		<div class="social">
			<a href="https://www.facebook.com" target="_blank" class="social__link ico"></a>
			<a href="https://www.twitter.com/" target="_blank" class="social__link ico"></a>
			<a href="https://plus.google.com/" target="_blank" class="social__link ico"></a>
			<a href="https://www.instagram.com/" target="_blank" class="social__link ico"></a>
		</div>

		<figure class="card__image-container card__image-container--small"><img src="./images/1.jpg" alt="Image" class="card__image"/></figure><article class="review review--small"><h2 class="review__name review__name--small">Harshit Singh</h2><h3 class="review__city">Founder & chief executive officer, Mars</h3>

		<p class="review__content review__content--small">This man is able to write a complete web app just using the windows notepad, that's awesome...</p></article>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="./js/main.min.js">
 $(document).ready(function(){
      $('.parallax').parallax();
	  $(".button-collapse").sideNav();
    });
</script>
</body>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="./css/main.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.js"></script>

<script>
	$(function(){
  $('#MixItUp1').mixItUp({
    selectors: {
      filter: '.filter-1'
    }
  });
});
</script>

</html>