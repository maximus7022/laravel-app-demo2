<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/calc.css')}}">
    <title>Calculator</title>
</head>
<body>
    <section>
        <input type="text" id="screen">
        <table>
            <tr>
                <td><button>(</button></td>
                <td><button>)</button></td>
                <td><button>c</button></td>
                <td><button>%</button></td>
            </tr> 
            <tr>
                <td><button>7</button></td>
                <td><button>8</button></td>
                <td><button>9</button></td>
                <td><button>*</button></td>
            </tr> 
            <tr>
                <td><button>4</button></td>
                <td><button>5</button></td>
                <td><button>6</button></td>
                <td><button>-</button></td>
            </tr> 
            <tr>
                <td><button>1</button></td>
                <td><button>2</button></td>
                <td><button>3</button></td>
                <td><button>+</button></td>
            </tr> 
            <tr>
                <td><button>0</button></td>
                <td><button>.</button></td>
                <td><button>/</button></td>
                <td><button>=</button></td>
            </tr>
        </table>
    </section>
    <footer>
        <div>
            <a href="/">Home</a>
            <a href="/drum">Drum Kit</a>
            <a href="/dicee">Dicee Game</a>
            <a href="/colors">Color Generator</a>
            <a href="/calc">Simple Calc</a>
        </div>
    </footer>
    <script src="{{asset('js/calc.js')}}"></script>
</body>
</html>