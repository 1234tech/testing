<!doctype html>

<html>

<head>
<link href="main.css" rel="stylesheet">



	<title>Project 1</title>

	<meta charset='utf-8'>

		

</head>

<body>

    <img src="Avatar-headshot.png">
    
    <h1>Introduction</h1>    
    
    <p>My name is Schermann and I use they/them/their pronouns.  I’m currently living in the United States.  I’m pursuing an ALM in Digital Media Design at Harvard.  My background includes both music (education and performance) as well as tech (computer repair and web design).  

    I enrolled in this course because future projects will include work on both the client side and the server side.  Since I am able to create web-sites using HTML, CSS and Javascript, I thought this course would be a great first step in learning the server side.
    </p>

    <br>
    <br>

    <h2>Quote of the Day</h2> 

    <div class="quote">    
    <?php

        //array of three quotes
            $quotes = array("To know oneself, and to be oneself is a great, great joy. - King Friday XIII, Mr. Roger's Neighborhood", "It's a great day for hockey! - Robert 'Badger Bob' Johnson, Former Head Coach of the Pittsburgh Penguins", "Great minds discuss ideas; average minds discuss events; small minds discuss people. - Eleanor Roosevelt");

        //select random value of the array 
            $randomSelection = array_rand($quotes);


        //assign the random array value
            $finalDisplay = $quotes[$randomSelection];

        //display the random array value on the screen
            echo $finalDisplay;

    ?>    

    </div>
    
</body>

</html>