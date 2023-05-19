 <!DOCTYPE html>
 <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formulario.css">
  </head>
  <body>
    <div class="container">

    <div class="header">
    <h2>Cadastro de Usuário</h2>    
    </div>

    <form class='form' id='form' method="POST" action="cadastrar.php">

    <div class="form-control">
         <label for='username'>Nome</label>
         <input type='text' name='nome' placeholder='Digite seu nome'>
      </div>

    <div class="form-control">
         <label for='email'>Email</label>
         <input type='email' name='email' placeholder='endereço@exemplo.com'>        
    </div>

    <div class="form-control">
         <label for='senha'>Senha</label>
         <input type='password' name='senha' placeholder='Crie uma senha'>        
    </div>
      
      <button type='submit'>Cadastrar</button>
    </form>
    
    </div>