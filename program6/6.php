<html>
    <head>
        <title>Viewers Count</title>
        <style>
            h1, h2{
                text-align:center;
            }
        </style>
    </head>
    <body>
    	<h1> Welcome To My WebSite </h1>
    	<h2>
			<?php
				$file = 'count.txt';
				$count = strval(file_get_contents($file));
		        file_put_contents($file, ($count+1) );
		        echo "<h1> Your Visitor Number ::: ".$count."</h1>";
			?>
    	</h2>
    </body>
</html>
