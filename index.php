
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" 
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
		crossorigin="anonymous">

	<style>
	.form-group {
		padding: 10px;
	}

	#contain {
		margin: 50px;
	}
	</style>

	<title>Curators' Helper</title>
</head>

<body class="d-flex flex-column justify-content-center align-items-center 
	jumbotron"> 
<div id="contain" class="d-inline-flex flex-column justify-content-center 
	align-items-center">
	<h1 class="text-center">The Curator's Helper</h1>
	<span class="text-center">For non-English posts please set Grammar to "None".</span>
	<hr />
	<form action="#" method="get" onclick="run()" class="container">
		<div class="row">
			<div class="col">
				<h5>Words:</h5>
				<div class="custom-control custom-radio">
				  <input type="radio" id="wordRadio0" name="words"
				  class="custom-control-input" value="1">
				  <label class="custom-control-label" for="wordRadio0">No Minimum</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="wordRadio1" name="words"
				  class="custom-control-input" value="100">
				  <label class="custom-control-label" for="wordRadio1">100</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="wordRadio2" name="words"
				  class="custom-control-input" value="250">
				  <label class="custom-control-label" for="wordRadio2">250</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="wordRadio3" name="words"
				  class="custom-control-input" value="500">
				  <label class="custom-control-label" for="wordRadio3">500</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="wordRadio4" name="words"
				  class="custom-control-input" value="1000">
				  <label class="custom-control-label" for="wordRadio4">1000</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="wordRadio5" name="words"
				  class="custom-control-input" value="2000">
				  <label class="custom-control-label" for="wordRadio5">2000</label>
				</div>
			<!-- end word count group -->
				<br />

				<div class="row">
					<div class="col">
						<h5>Grammar:</h5>
						<div class="custom-control custom-radio">
						  <input type="radio" id="grammarRadio1" name="grammar"
						  class="custom-control-input" value="10">
						  <label class="custom-control-label" for="grammarRadio1">Up to 10%</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="grammarRadio2" name="grammar"
						  class="custom-control-input" value="25">
						  <label class="custom-control-label" for="grammarRadio2">Up to 25%</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="grammarRadio3" name="grammar"
						  class="custom-control-input" value="50">
						  <label class="custom-control-label" for="grammarRadio3">Up to 50%</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="grammarRadio4" name="grammar"
						  class="custom-control-input" value="100">
						  <label class="custom-control-label" for="grammarRadio4">None</label>
						</div>
					</div><!-- end grammar col -->
				</div>
				<br />
				<div class="row">
					<div class="col">
					<h5>Look Through:</h5>
						<div class="custom-control custom-radio">
						  <input type="radio" id="totalRadio1" name="total"
						  class="custom-control-input" value="10">
						  <label class="custom-control-label" for="totalRadio1">10 Posts</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="totalRadio2" name="total"
						  class="custom-control-input" value="25">
						  <label class="custom-control-label" for="totalRadio2">25 Posts</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="totalRadio3" name="total"
						  class="custom-control-input" value="50">
						  <label class="custom-control-label" for="totalRadio3">50 Posts</label>
						</div>
						<div class="custom-control custom-radio">
						  <input type="radio" id="totalRadio4" name="total"
						  class="custom-control-input" value="100">
						  <label class="custom-control-label" for="totalRadio4">Maximum</label>
						</div>
					</div>
				</div>

			</div><!-- end word and grammar grid -->
			<br />
			<div class="col-5">
				<h5>Topic:</h5><!-- 19 total -->
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio1" name="topic"
				  class="custom-control-input" value="art">
				  <label class="custom-control-label" for="customRadio1">Art</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio2" name="topic"
				  class="custom-control-input" value="bitcoin">
				  <label class="custom-control-label" for="customRadio2">Bitcoin</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio18" name="topic"
				  class="custom-control-input" value="cryptocurrency">
				  <label class="custom-control-label"
					  for="customRadio18">Cryptocurrency</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio3" name="topic"
				  class="custom-control-input" value="christianity">
				  <label class="custom-control-label"
					  for="customRadio3">Christianity</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio4" name="topic"
				  class="custom-control-input" value="education">
				  <label class="custom-control-label" for="customRadio4">Education</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio5" name="topic"
				  class="custom-control-input" value="food">
				  <label class="custom-control-label" for="customRadio5">Food</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio6" name="topic"
				  class="custom-control-input" value="health">
				  <label class="custom-control-label" for="customRadio6">Health</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio7" name="topic"
				  class="custom-control-input" value="introduceyourself">
				  <label class="custom-control-label" for="customRadio7">Introduce
					  Yourself</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio8" name="topic"
				  class="custom-control-input" value="life">
				  <label class="custom-control-label" for="customRadio8">Life</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio9" name="topic"
				  class="custom-control-input" value="money">
				  <label class="custom-control-label" for="customRadio9">Money</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio10" name="topic"
				  class="custom-control-input" value="news">
				  <label class="custom-control-label" for="customRadio10">News</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio11" name="topic"
				  class="custom-control-input" value="photography">
				  <label class="custom-control-label" for="customRadio11">Photography</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio12" name="topic"
				  class="custom-control-input" value="religion">
				  <label class="custom-control-label" for="customRadio12">Religion</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio13" name="topic"
				  class="custom-control-input" value="science">
				  <label class="custom-control-label" for="customRadio13">Science</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio14" name="topic"
				  class="custom-control-input" value="steem">
				  <label class="custom-control-label" for="customRadio14">Steem</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio15" name="topic"
				  class="custom-control-input" value="story">
				  <label class="custom-control-label" for="customRadio15">Story</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio16" name="topic"
				  class="custom-control-input" value="technology">
				  <label class="custom-control-label" for="customRadio16">Technology</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio17" name="topic"
				  class="custom-control-input" value="writing">
				  <label class="custom-control-label" for="customRadio17">Writing</label>
				</div>
			</div><!-- end topic group -->
		</div>
		<br />
		<div id="postButton" class="row">
			<button type="submit" class="col btn btn-lg btn-block btn-primary" onclick="pgShow()">
				Get Posts!</button>
		</div>
		<div id="bar" style="display:none">
			<div class="progress">
				<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" 
				role="progressbar" aria-valuenow="100" aria-valuemin="0" 
				aria-valuemax="100" style="width: 100%"></div>
			</div>
			<p class="text-center">Please be patient as we get your posts.<br /> 
				This process may take up to a minute.</p>
		</div>
	</form>
</div>

<?php
	if ($_GET) {
		$cmd = escapeshellcmd(
			'python3 ezCurator.py '.$_GET['topic'].' '.
			$_GET['words'].' '.$_GET['grammar'].' '.$_GET['total']
		);
		$output = system($cmd);
		echo '<a class="btn btn-lg btn-success" href="curated.html">Click here to view posts.</a>';
	}
?>

<!-- scripts -->
<script>
	function pgShow() {
		var bar = document.getElementById("bar");
		bar.style.display = "block";
		var bar = document.getElementById("postButton");
		bar.style.display = "none";
	}
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
	crossorigin="anonymous"></script>
</body>
</html>
