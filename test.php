<html>
<head>
<style>
.mix{
	padding:50px;
	background-color:#336699;
	margin:10px;
}
</style>
</head>

	<body>
		<button type="button" data-filter="all">All</button>
		<button type="button" data-filter=".category-a">Category A</button>
		<button type="button" data-filter=".category-b">Category B</button>
		<button type="button" data-filter=".category-c">Category C</button>
		<div class="container">
			<div class="mix category-a" data-order="1">A</div>
			<div class="mix category-b" data-order="2">B</div>
			<div class="mix category-b category-c" data-order="3">C</div>
			<div class="mix category-a category-d" data-order="4">D</div>
		</div>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
		<script>
			
		var mixer = mixitup('.container');
$( document ).ready(function(){mixitup();});
		</script>
	</body>
</html>
