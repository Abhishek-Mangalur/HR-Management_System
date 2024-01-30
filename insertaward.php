<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(3,40,48);
            color: #fff;
        }
        .div1{
            width: 300px;
            margin: auto;
            font-size: 1.4em;
        }

        .div2{
            text-align: center;
        }

        #i1{
            padding: 5px;
            background: #0DCAF0;
            border-radius: 5px;
            width: 100px;
            font-size: 1.2em;
        }

        #i1:hover{
            cursor: pointer;
            opacity: .7;
        }

        input{
            margin-bottom: 10px;
            width: 300px;
            font-size: 0.8em;
            padding: 4px;
            border: none;
        }
    </style>
</head>
<body>
    <form action="processaward.php" method="POST">
        <div class="div1">
            <label for="Name">Name</label><br>
            <input type="text" name="name" required><br>
            <label for="Name">Date</label><br>
            <input type="text" name="date" required><br>
        </div>

        <div class="div2">
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>