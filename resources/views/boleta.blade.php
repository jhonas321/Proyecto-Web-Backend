<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Boleta Electoral</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .election-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .candidate-list {
            margin-top: 20px;
        }
        .candidate-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
        {{$title}}
        </div>
        @foreach ($frentes as $frente)
        <div class="election-title">
            {{@$frente->NOMBRE_FRENTE}}
        </div>
            @foreach ($frente->candidatos as $candidato)
            <div class="candidate-list">
                <div class="candidate-item">
                    <label>
                        <input type="radio" name="president" value="candidate1"> {{$candidato->CARGO}}
                    </label>
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
</body>
</html>