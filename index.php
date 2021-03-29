<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Somogyvári Ferenc</title>
        <link href="stilus.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
        <script src="feldolgoz.js" type="text/javascript"></script>
    </head>
    <body>
        <main>
        <h1>TEENDŐK</h1>
        <div id="tarolo">
            <form  id ="todolista" name="todolista" method="POST">
            <label for="taneve">TODO lista</label>
            <input type="text" name="todo" value="">
             <input type="date" name="datum" >
             <input type="submit" id="add" name="add" value="Add">
             <input type="submit" id="betolt" name="betolt" value="Betolt">
        </form>
            <ul>
                
            </ul>
            <p>Somogyvári Ferenc</p>
            </div>
        </main>
    </body>
</html>
