<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>
            Hello world! 
        </h1>
        
        

        <h3>Casa automobilistica: {{$marca}}</h3>
        <h3>Modello: {{$modello}}</h3>
        <h4>Punteggio utenti: {{$punteggio}}</h4>

        <h3>I tester della prova sustrada sono:</h3>
        <ol>
            @foreach ($testers as $tester)
                <li>{{$tester}}</li>
            @endforeach
        </ol>
        
    </body>
</html>