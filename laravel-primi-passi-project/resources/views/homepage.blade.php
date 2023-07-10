<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL ROUTES</title>
</head>

<style>
 header{
    background-color: black;
    color: white;
    text-align: center;
    display: flex;
    justify-content: space-between;
 }

 ul{
    display: flex;
    list-style: none;
    
 }

 li{
    padding: 0px 10px;
 }

 main{
    width: 80%;
    height: 300px;
    margin: auto;
    /* border: 1px, solid, black; */
    background-color: grey;
    
 }

 a{
    text-decoration:none;
    color:white
 }
</style>

<body>

    <header>
        <h1>
        questo è l'header
       </h1>

        <ul>
            <li>
                <a href="prodotti">Prodotti</a>
                
            </li>

            <li>
                <a href="contatti">Contatti</a>
            </li>

           
        </ul>


    </header>

    <main>

        <h1>
            Ciao {{ $name }} questa è la homepage, benvenuto :) 
        </h1>

    </main>

   
    
</body>
</html>