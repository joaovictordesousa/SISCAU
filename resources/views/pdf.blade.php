<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    @foreach ($GuiasRecolhimento as $Guias)
        <h2>Nome: {{$Guias->auxtiporecolhimento}}</h2><br>
    @endforeach
</body>
</html>