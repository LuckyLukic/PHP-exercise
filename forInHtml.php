<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for in html</title>
</head>
<body>

<form action="forInHtml.ph" meethod="post">

<label for="name">name</label>
<input type="text" name="name" placeholder="Inserisci il nome">
<label for="cognome">cognome</label>
<input type="text" name="cognome" placeholder="Inserisci il cognome">
<input type="submit" value""submit">


</form>

<ul>

    <?php for ($i = 1 ; $i < 6 ; $i++) : ?>

        <li> List Item <?php echo $i ?></li>
        <?php endfor; ?> 
 
</ul>
    
</body>
</html>