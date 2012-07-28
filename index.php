<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap.my.css" rel="stylesheet">
		<link href="css/tampon.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">
						Tampon
					</a>
				</div>
			</div>
		</div>
		
		<div class="container">
			<!-- 
			<div class="alert fade in">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				This post has been deleted
			</div>
			
			<div class="alert alert-success fade in">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				This post has been successfully queued to be posted to Twitter
			</div>
			
			<div class="hero-unit">
				<h1>Tampon, an open source Buffer app.</h1>
				<p>Stock up some great tweets and have them automatically shared throughout the day.</p>
				<p>
					<a class="btn btn-primary btn-large">
						Sign in with Twitter
					</a>
				</p>
			</div>
			
			 -->
			
			<div class="composer">
				
				<div class="profile avatar twitter">
					<img src="http://a0.twimg.com/profile_images/2428060144/j9s79sbvn1teypf89qzq_normal.jpeg">
					<span></span>
				</div>
				
				<textarea class="input-xlarge" id="textarea" rows="3" placeholder="Write your post here"></textarea>
				
				<div class="form-actions">
					<button id="postnow" class="btn">Post now</button>
					<button id="addtoposts" type="submit" class="btn btn-primary">Add to Tampon</button>
				</div>
			</div>
			
			
			<div class="posts">
				<h2>Pending posts</h2>
				
				<ul class="timeline">
					<li class="heading"><h3>Today</h3></li>
					
					
					
					<li class="heading"><h3>Tomorrow</h3></li>
					
					
					
				</ul>
			</div>
			
			
			<hr>
			
			<footer>
				<span>Powered by <a href="http://tamponapp.com">Tampon</a></span>
				·
				<span>Inspired by <a href="http://bufferapp.com">Buffer</a></span>
			</footer>
			
		</div>
		
		
		
		<!-- Mustache Templates -->
		
		<script id="tpl-post" type="text/html">
			<li class="update" id="post-{{id}}">
				<span class="time-due">
					{{time}}
				</span>
				<div class="update-body">
					{{content}}
				</div>
				<div class="options">
					<div class="btn-group">
						<a class="btn sort-handle" href="#" title="Drag to re-order" rel="tooltip"><i class="icon-move"></i></a>
						<a class="btn" href="#" title="Post this now" rel="tooltip"><i class="icon-play-circle"></i></a>
						<a class="btn" href="#" title="Delete this post" rel="tooltip"><i class="icon-remove"></i></a>
					</div>
				</div>
			</li>
		</script>
		
		
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="js/jquery-ui-1.8.22.custom.min.js"></script>
		<script src="js/mustache.js"></script>
		<script src="js/underscore.js"></script>
		<script src="js/backbone.js"></script>
		<script src="js/tampon.js"></script>
	</body>
</html>