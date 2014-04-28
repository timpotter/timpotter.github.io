<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- STYLESHEET -->
    <style>
    
    body {
    	font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
    	-webkit-font-smoothing: antialiased;
    	text-align: center;
    	padding: 60px 20px;
    	}

    h1 {
    	font-size: 2.875em; /* 46/16 */
    	}

    .little {
        font-size: 50%;
        }

    </style>
    

</head>
<body>
    <h1>Say Hello to my <span class="little">little friend</span></h1>

    <p><?php echo "Today is " . date("d/m/Y");?></p>
</body>
</html>