<?php
session_start();
?>
<!DOCTYPE html>
<html>

    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mecânica do Taz</title>
    <link rel="stylesheet" href="perfil.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
    
    
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey"><a  target="_blank">Mecânica</a></h3>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <div class="box">
                     <form action="cadastro.php" method="POST">

                            <div class="field">
                                <div class="control">
                                    <input name="aluno" type="aluno" class="input is-large" placeholder="aluno">
                                </div>
                            </div>
                               <div class="field">
                                <div class="control">
                                    <input name="sobrenome" class="input is-large" type="sobrenome" placeholder="sobrenome">
                                </div>
                            </div>
                             <div class="field">
                                <div class="control">
                                    <input name="telefone" class="input is-large" type="telefone" placeholder="telefone">
                                </div>
                            </div> 
                                
                             <div class="field">
                                <div class="control">
                                    <input name="cpf" class="input is-large" type="cpf" placeholder="cpf">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="email" class="input is-large" type="email" placeholder="email">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="senha" placeholder="senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
