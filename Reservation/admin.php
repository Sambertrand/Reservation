<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        table, th, td
        {
            
            border-collapse: collapse;
            text-align: center;
            border-left:  1px solid black;
        }
    </style>
    <title>
        Admin
    </title>
</head>

    <body>
        <h1>Admin's Data Base</h1>
        <?php echo $display ?>

        <form method='post' action='index.php'>
            <input type='hidden' name='page' value='controller_reserv'/>								
			<input type='submit' class="btn btn-secondary btn-sm" value='Retour'/>
        </form>
    </doby>
</html>