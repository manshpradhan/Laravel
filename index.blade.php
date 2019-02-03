<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Welcome to the site</h1>
    <p>This is for lab test.</P>
    -->
    <h1>Hello, {{$name}}</h1>
    <br>
    <?php
    echo "Hello, ", $name;
    ?>
    <br/>
    <!-- Loop -->
    @for($i=1;$i<=10;$i++)
    {{ $i }}
    <br>
    @endfor
    <!-- For Controller -->
    <br/>
    {{$names}}


</body>
</html>