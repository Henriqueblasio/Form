<?php
 if(isset($_POST['submit']))
 {
   //print_r('Nome:' . $_POST['nome']);
   //print_r('<br>');
   //print_r('Email:' . $_POST['email']);
   //print_r('<br>');
   //print_r('Telefone:' . $_POST['telefone']); 
   //print_r('<br>');
   //print_r('Sexo:' . $_POST['genero']);
   //print_r('<br>');
   //print_r('Data de nascimento:' . $_POST['data_nascimento']);
   //print_r('<br>');
   //print_r('Cidade:' . $_POST['cidade']);  
   //print_r('<br>'); 
   //print_r('Estado:' . $_POST['estado']);
   //print_r('<br>');
   //print_r('Endereço:' . $_POST['endereco']);

   include_once('config.php');

   $nome = $_POST['nome'];
   $email =  $_POST['email'];
   $telefone =  $_POST['telefone']; 
   $sexo = $_POST['genero'];
   $data_nasc =  $_POST['data_nascimento'];
   $cidade =  $_POST['cidade']; 
   $estado = $_POST['estado'];
   $endereco =  $_POST['endereco'];

   $result = mysqli_query($conexao, "INSERT INTO usuário(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
  
    
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(140, 147, 250), rgb(17, 54, 71));
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .box {
            background-color: rgba(0, 0, 0, 10);
            padding: 20px;
            border-radius: 15px;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            box-sizing: border-box; 
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        legend {
            font-size: 1.2em;
            margin-bottom: 10px;
            
        }
        .inputBox {
            position: relative;
            margin-bottom:5px;
            height: 20px;
        }
        .inputUser {
            width: 100%;
            padding: 1px;
            border: none;
            border-radius: 5px;
            outline: none;
            background: #fff;
            color: #000000;
            box-sizing: border-box;
        }
        .inputBox label {
            position: absolute;
            top: -15px;
            left: 5px;
            font-size: 0.8em;
            color: #20d0ff;
            pointer-events: none;
            transition: 0.5s;
        }
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #20d0ff;
            color: black;
            font-size: 1em;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #1c9bbd;
        }
        .radio-group {
            margin-bottom: 10px;
        }
        .radio-group label {
            margin-right: 10px;
        }
    </style>

    <script> 
       function validateForm() {
           var nome = documentgetElementByild ('nome').value;
           var email = documentgetElementByild ('email').value;
           var telefone = documentgetElementByild ('telefone').value;
           var sexo = documentgetElementByild ('sexo').value;
           var data_nascimento = documentgetElementByild ('data_nascimento').value;
           var cidade = documentgetElementByild ('cidade').value;
           var estado = documentgetElementByild ('estado').value;
           var endereco = documentgetElementByild ('endereco').value;
         
           if (nome == "" || email == "" ||   telefone  == "" ||  sexo  == "" || data_nascimento  == "" || cidade  == "" || estado == "" ||  endereco  == "" ) {
              alert("Todos os campos devem ser preenchidos");
              return false;
            
           }
           return true;

       }

 </script>

</head>
<body>
    <div class="box">
        <form action="Formulário.php" method="POST">
            <fieldset>
                <legend><b>Formulário de clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone">Telefone</label>
                </div>
                <br>
                <div class="radio-group">
                    <p><b>Sexo</b></p>
                    <input type="radio" id="feminino" name="genero" value="Feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="Masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="genero" value="Outro" required>
                    <label for="outro">Outro</label>
                </div>
                <br>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>
