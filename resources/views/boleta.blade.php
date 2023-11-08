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
            Boleta Electoral
        </div>
        <div class="election-title">
            Elecciones Generales
        </div>
        <div class="candidate-list">
            <div class="candidate-item">
                <label>
                    <input type="radio" name="president" value="candidate1"> Candidato 1 - Partido A
                </label>
            </div>
            <div class="candidate-item">
                <label>
                    <input type="radio" name="president" value="candidate2"> Candidato 2 - Partido B
                </label>
            </div>
            <div class="candidate-item">
                <label>
                    <input type="radio" name="president" value="candidate3"> Candidato 3 - Partido C
                </label>
            </div>
        </div>
        <div class="election-title">
            Elección de Diputados
        </div>
        <div class="candidate-list">
            <div class="candidate-item">
                <label>
                    <input type="radio" name="deputy" value="candidate4"> Candidato 4 - Partido A
                </label>
            </div>
            <div class="candidate-item">
                <label>
                    <input type="radio" name="deputy" value="candidate5"> Candidato 5 - Partido B
                </label>
            </div>
            <div class="candidate-item">
                <label>
                    <input type="radio" name="deputy" value="candidate6"> Candidato 6 - Partido C
                </label>
            </div>
        </div>
    </div>
</body>
</html>