<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator-container {
            width: 90%;
            margin: 0 auto;
            text-align: center;
        }
        .calculator {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }
        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-family: Arial, sans-serif;
            font-size: 18px;
        }
        
        input.calculator-display {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            
        }

        button {
            width: 50px;
            height: 50px;
            margin: 5px;
            font-size: 18px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .equal-button {
            background-color: #bd0003; /* Color rojo profesional */
            width: 96%; /* Abarca el 90% del ancho */
            font-size: 18px;
        }
        h1 {
            color: #565656; /* Color de texto gris */
        }
    </style>
</head>
<body>
    <div class="calculator-container">
        <h1>Calculadora en PHP</h1> <!-- Título h1 -->
        <div class="calculator">
            <input type="text" id="display" readonly>
            <br> <!-- Añadir un salto de línea para separar el campo de entrada de los botones -->
            <button onclick="addToDisplay('7')">7</button>
            <button onclick="addToDisplay('8')">8</button>
            <button onclick="addToDisplay('9')">9</button>
            <button onclick="addToDisplay('+')">+</button>
            <br>
            <button onclick="addToDisplay('4')">4</button>
            <button onclick="addToDisplay('5')">5</button>
            <button onclick="addToDisplay('6')">6</button>
            <button onclick="addToDisplay('-')">-</button>
            <br>
            <button onclick="addToDisplay('1')">1</button>
            <button onclick="addToDisplay('2')">2</button>
            <button onclick="addToDisplay('3')">3</button>
            <button onclick="addToDisplay('*')">*</button>
            <br>
            <button onclick="addToDisplay('0')">0</button>
            <button onclick="addToDisplay('.')">.</button>
            
            <button onclick="clearDisplay()">C</button>
            <button onclick="addToDisplay('/')">/</button>

            <br>
            <button class="equal-button" onclick="calculate()">=</button>
            <br>
        </div>
    </div>

    <script>
        function addToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function calculate() {
            const display = document.getElementById('display').value;
            try {
                const result = eval(display);
                document.getElementById('display').value = result;
            } catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }
    </script>
</body>
</html>