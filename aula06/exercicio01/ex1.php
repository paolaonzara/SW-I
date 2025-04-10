<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        tr:nth-child(even){
            background-color: pink;

        }
        tr{
            background-color:palevioletred;
        }
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
            
    </style>
    <table>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <?php
            for ($i=1; $i <= 8 ; $i++) { 
                echo "
                    <tr>
                        <td>coluna 1 linha $i</td>
                        <td>coluna 2 linha $i</td>
                        <td>coluna 3 linha $i</td>
                    </tr>
                ";
            }

            
        ?>
    </table> 


    
</body>
</html>