<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        h1 {
            font-family: arial;
        	font-size: 25px;
        	text-align: center;
            background-color: #FCC292;
            padding: 3px;
        }
        h2 {
            font-family: calibri;
        	font-size: 16px;
        	text-align: center;
        	font-weight: normal;
        }
        h3 {
            font-family: verdana;
        	font-size: 15px;
            
        }
        h6 {
            font-family: verdana;
        	font-size: 12px;
        	text-align: center;
        }
        img {
            position: relative;
		    left: 390px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 3px;
            overflow: hidden;
            background-color: #161710;
        }
        
        li {
            float: left;
            border-right:0px solid #bbb;
        }
        
        li:last-child {
            border-right: none;
        }
        
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 18px 22px;
            text-decoration: none;
        }
        
        li a:hover:not(.active) {
            background-color: white;
        }
        
        .active {
            background-color: #FCA45D;
        }
        #login{
            padding: 3px;
        }
        
        .btn-success{
            border-color: #FCA45D;
            background-color:#FCA45D; 
        }
        
        .inicial{
            padding: 50px;
            position: relative;
            left: 470px;
        }
        
    </style>
</head>
<body>

<?php
    $User = $_POST['usuario'];
    $Senha = $_POST['senha'];
    
    
  if (($User == 'user')&&($Senha == '1234')){
    ?>
    
        <h1>Seja bem-vindo a sua página inicial!</h1><br>
        <img src = "cafe.jpg">
    
    <?php
  }else{

    ?>

    <form action="index.php" method="post">
    <ul>
    <li><a class="active" href="#home">Home</a></li><div id = "login" style="float:right">
    <li><input type = "text" placeholder="Usuário" name = "usuario" id = "usuario" class="form-control input-lg"></li>
    <li ><input type = "password" placeholder="Senha" name = "senha" id = "senha" class="form-control input-lg"></li>
    <li ><input type="submit" class="btn btn-success btn-lg" id = "enviar"></input></li></div>
    </ul>
    </form>
    <br>
    <img class="inicial" src = "dark.jpg">
    <?php
    
  }
  

?>
</body>
</html>