
<style type="text/css">
    .hide-me {
        visibility: hidden;
        opacity: 0;
        transform: scale(.75);
    }

    #pre {
        float: right;
        width: 50%;
    }
</style>
<h4> ~ Looping through a JSON array </h4>
<div class="boxed row">
    <div class="col" style="max-width:48%;">
        <button type="button" class="btn" id="btn">Get Info on 3 Dogs</button>
        <p>&nbsp;</p>
        <div id="animal-info"></div>
    </div>
    <div class="col" id="pre">

					<pre>
var pageCounter = 1;
var animalContainer = document.getElementById("animal-info");
var btn = document.getElementById("btn");

btn.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'dogs-' + pageCounter + '.json');
  ourRequest.onload = function() {
    if (ourRequest.status >= 200 && ourRequest.status < 400) {
      var ourData = JSON.parse(ourRequest.responseText);
      renderHTML(ourData);
    } else {
      console.log("We connected to the server, but it returned an error.");
    }

  };

  ourRequest.onerror = function() {
    console.log("Connection error");
  };

  ourRequest.send();
  pageCounter++;
  if (pageCounter > 3) {
    btn.classList.add("hide-me");
  }
});

function renderHTML(data) {
  var htmlString = "";

  for (i = 0; i < data.length; i++) {
    htmlString += "p" +
        data[i].name + " is a " + data[i].breed + " that likes to eat ";
        for (ii = 0; ii < data[i].foods.likes.length; ii++) {
        if (ii == 0) {
        htmlString += data[i].foods.likes[ii];
        } else {
        htmlString += " and " + data[i].foods.likes[ii];
        }
        }
        htmlString += ' but hates ';
        for (ii = 0; ii < data[i].foods.hates.length; ii++) {
        if (ii == 0) {
        htmlString += data[i].foods.hates[ii];
        } else {
        htmlString += " and " + data[i].foods.hates[ii];
        }
        }
        htmlString += './p';
  }
  animalContainer.insertAdjacentHTML('beforeend', htmlString);
					</pre>
    </div>
</div>
<script type='text/javascript'>
    var pageCounter = 1;
    var animalContainer = document.getElementById("animal-info");
    var btn = document.getElementById("btn");

    btn.addEventListener("click", function () {
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'dogs-' + pageCounter + '.json');
        ourRequest.onload = function () {
            if (ourRequest.status >= 200 && ourRequest.status < 400) {
                var ourData = JSON.parse(ourRequest.responseText);
                renderHTML(ourData);
            } else {
                console.log("We connected to the server, but it returned an error.");
            }

        };

        ourRequest.onerror = function () {
            console.log("Connection error");
        };

        ourRequest.send();
        pageCounter++;
        if (pageCounter > 3) {
            btn.classList.add("hide-me");
        }
    });

    function renderHTML(data) {
        var htmlString = "";

        for (i = 0; i < data.length; i++) {
            htmlString += "<p>" + data[i].name + " is a " + data[i].breed + " that likes to eat ";

            for (ii = 0; ii < data[i].foods.likes.length; ii++) {
                if (ii == 0) {
                    htmlString += data[i].foods.likes[ii];
                } else {
                    htmlString += " and " + data[i].foods.likes[ii];
                }
            }

            htmlString += ' but hates ';

            for (ii = 0; ii < data[i].foods.hates.length; ii++) {
                if (ii == 0) {
                    htmlString += data[i].foods.hates[ii];
                } else {
                    htmlString += " and " + data[i].foods.hates[ii];
                }
            }

            htmlString += '.</p>';

        }

        animalContainer.insertAdjacentHTML('beforeend', htmlString);
    }
</script>
