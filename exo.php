<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcul" method="post">
input1 <input type="number" placeholder="entrer un nombre">
       <br><br>
       input2 <input type="number" placeholder="entrer un nombre">
       <br><br>
       button<button id="cloche">envoyer</button>
       <select  id="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
       </select> <br><br>
       resultat<input type="text" id="result"/>
       <script>
        function somme () {
            var nbr1, nbr2, sum;
            Number (document.getElementById('nbr1').value);
            Number (document.getElementById('nbr2').value);
            
        }
    </script>
    </form>
</body>
</html>