<html>
<head>
    <title>example</title>
	<%@ include file="/sitewide/globals-w.jsp" %>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.1/handlebars.min.js"></script>
	<style type="text/css">
		body {
			padding: 20px;
		}
		#search-form, .form-control {
			margin-bottom: 20px;
		}
		.cover {
			width: 300px;
			height: 300px;
			display: inline-block;
			background-size: cover;
		}
		.cover:hover {
			cursor: pointer;
		}
		.cover.playing {
			border: 5px solid #e45343;
		}
	</style>

	<title>Spotify Web API - Search for an Artist (and Lookup) Demo by JMPerez</title>







	<script type='text/javascript'>//<![CDATA[
	window.onload=function(){
// find template and compile it
		var templateSource = document.getElementById('results-template').innerHTML,
				template = Handlebars.compile(templateSource),
				resultsPlaceholder = document.getElementById('results'),
				playingCssClass = 'playing',
				audioObject = null;

		var fetchTracks = function (albumId, callback) {
			$.ajax({
				url: 'https://api.spotify.com/v1/albums/' + albumId,
				success: function (response) {
					callback(response);
				}
			});
		};

		var searchAlbums = function (query) {
			$.ajax({
				url: 'https://api.spotify.com/v1/search',
				data: {
					q: query,
					type: 'album'
				},
				success: function (response) {
					resultsPlaceholder.innerHTML = template(response);
				}
			});
		};

		results.addEventListener('click', function (e) {
			var target = e.target;
			if (target !== null && target.classList.contains('cover')) {
				if (target.classList.contains(playingCssClass)) {
					audioObject.pause();
				} else {
					if (audioObject) {
						audioObject.pause();
					}
					fetchTracks(target.getAttribute('data-album-id'), function (data) {
						audioObject = new Audio(data.tracks.items[0].preview_url);
						audioObject.play();
						target.classList.add(playingCssClass);
						audioObject.addEventListener('ended', function () {
							target.classList.remove(playingCssClass);
						});
						audioObject.addEventListener('pause', function () {
							target.classList.remove(playingCssClass);
						});
					});
				}
			}
		});

		document.getElementById('search-form').addEventListener('submit', function (e) {
			e.preventDefault();
			searchAlbums(document.getElementById('query').value);
		}, false);
	}//]]>

	</script>


</head>

	<body>
		<div class="container">
			<h1>Search for an Artist</h1>
			<p>Type an artist name and click on "Search". Then, click on any album from the results to play 30 seconds of its first track.</p>
			<form id="search-form">
				<input type="text" id="query" value="" class="form-control" placeholder="Type an Artist Name"/>
				<input type="submit" id="search" class="btn btn-primary" value="Search" />
			</form>
			<div id="results"></div>
		</div>
		<script id="results-template" type="text/x-handlebars-template">
			{{#each albums.items}}
			<div style="background-image:url({{images.0.url}})" data-album-id="{{id}}" class="cover"></div>
			{{/each}}
		</script>

	</body>

</html>

