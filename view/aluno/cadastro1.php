<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="public\assets\css\styleCADASTRO.css">
   
    <title>Formulário Cadastro</title>
</head>
<body>
    <div class="container">
<!--b.o no css, ver isso amanhã-->
<!-- id="Forms" -->
        <div class="form" >
            <form action="/cadastro" method="POST" >
                <div class="form-header">

                    <div class="title">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/login">Logar</a></button>
                    </div>

                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname" class="form-label" >Nome</label>
                        <input type="text" name="nome" id="firstname" placeholder="DIGITE SEU NOME" required class="input required" oninput="nameValidate();">
                        
                        <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>

                    </div>
                    <div class="input-box">
                        <label for="lastname" class="form-label" >Sobrenome</label>
                        <input type="text" name="sobrenome" id="lastname" placeholder="DIGITE SEU SOBRENOME" required class="input required" oninput="sobreValidate();">
                        
                        <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>

                    </div>
                    <div class="input-box">
                        <label for="RM">RM</label>
                        <input type="number" name="rm" id="number" placeholder="ex:21134" class="input required" required oninput="rmValidate();"> 
                        
                        <span class="span-required">Digite um RM validos</span>
                    </div>

                    <div class="input-box">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="senha" id="password" placeholder="DIGITE UMA SENHA" required class="input required" oninput="senhaValidate();" >
                        
                        <span class="span-required">Senha com no mínimo 8 caracteres</span>

                    </div>

                    <div class="input-box">
                        <label for="password" class="form-label">Confirmação/senha</label>
                        <input type="password" name="password" id="confirmpassword" placeholder="CONFIRME SUA SENHA" required class="input required" oninput="confirmValidate();">
                        
                        <span class="span-required">Senha devem ser compatíveis</span>

                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input type="number" name="telefone" id="telefone" placeholder="(xx) xxxx-xxxx" required class="input required" oninput="TelValidate();">

                        <span class="span-required">Numero invalido</span>

                    </div>

                    <div class="input-box">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="DIGITE SEU EMAIL" required class="input required" oninput="emailValidate();">

                        <span class="span-required">Email invalido</span>
                    </div>


                    <div class="input-box">
	                        <label for="email" class="form-label">Confirme Email</label>
	                        <input type="email" name="confemail" id="email" placeholder="DIGITE SEU EMAIL" class="input required" oninput="confirmEmail();">
	
	                        <span class="span-required">Os campos de email devem ser iguais</span>
	                    </div>
                     
                    <div class="input-box">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="number" name="cpf" id="cpf" placeholder="DIGITE SEU CPF" required class="input required" oninput="cpfValidate();">

                        <span class="span-required">CPF invalido</span>
                    </div>

                    <!-- <div class="input-box">
                        <label for="cursos">Curso</label>
                        <select name="cursos" id="cursos" placeholder="ESCOLHA SEU CURSO" required>
                            <option value="administração-integral">Administração Integral</option>
                            <option value="administração-noite">Administração Noite</option>
                            <option value="nutrição-integral">Nutrição e Dietética Integral</option>
                            <option value="nutrição-noite">Nutrição e Dietética Noite</option>  
                            <option value="administração">Química Integral</option>
                            <option value="administração">Química Noite</option>
                            <option value="administração">Desenvolvimento de Sistemas</option>
                        </select>
                    </div>

                    <div class="periodo-inputs">
                        <div class="periodo-title">
                            <h6>PERÍODO</h6>
                        </div>
    
                        <div class="periodo-group">
                            <div class="periodo-input">
                                <input type="radio" name="periodo" id="integral">
                                <label for="integral">Integral</label>
                            </div>
    
                            <div class="periodo-input">
                                <input type="radio" name="periodo" id="tarde">
                                <label for="tarde">Tarde</label>
                            </div>
    
                            <div class="periodo-input">
                                <input type="radio" name="periodo" id="noite">
                                <label for="noite">Noite</label>
                            </div>
                        </div>
                    </div> -->

                    
                </div>

                <div class="cadastrar-button">
                <button type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>

    </div>
    
</body>
<script>
    const form = document.getElementById('Forms');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    const  emailRegex =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const cpfRegex = /^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        senhaValidate();
        confirmValidate();
        TelValidate();
        emailValidate();
        rmValidate();
        cpfValidate();
        sobreValidate();
        confirmEmail(); 
    }
    );

    function setError(index){
        campos[index].style.border='1px solid #e63636';
        spans[index].style.display = 'Block';
    }

    function RemoveError(index){
        campos[index].style.border='';
        spans[index].style.display = 'none';
    }
   
    function nameValidate(){
        if (campos[0].value.length<3)
        {
            setError(0);
        } 
        else
        {
            RemoveError(0);
        }
    }

    function sobreValidate(){
        if (campos[1].value.length<3)
        {
            setError(1);
        } 
        else
        {
            RemoveError(1);
        }
    }

    function rmValidate(){
        if(campos[2].value.length==5)
        {
            RemoveError(2);
        }
        else
        {
            setError(2);
        }
    }

     function senhaValidate(){
         if (campos[3].value.length<8)
         {
             setError(3);
         }
         else
         {
             RemoveError(3);
         }
     }
        //corrigido bug da array , tava comparando a arr3 com a arr1 , a certa é 3==2
     function confirmValidate(){
         if (campos[4].value==campos[3].value){
             RemoveError(4);
         }
         else{
             setError(4);
         }

     }

     function TelValidate(){
         if(campos[5].value.length==11){
            RemoveError(5);
    }
        else{
            setError(5);
        }
     }

     function emailValidate(){
        if (emailRegex.test(campos[6].value))
        {
            RemoveError(6);
        }
        else
        {
           setError(6);
        }
    }

    function confirmEmail(){
	         if (campos[7].value==campos[6].value){
	             RemoveError(7);
         }
	         else{
	             setError(7);
	         }
	
	     }
    function cpfValidate(){
        if (cpfRegex.test(campos[7].value))
        {
            RemoveError(7);
        }
        else
        {
           setError(7);
        }
    }


</script>
</html>
<!--https://www.youtube.com/watch?v=YcTkoIAi0Bg&ab_channel=GustavoNeitzke Link do JS que to vendo vsf-->