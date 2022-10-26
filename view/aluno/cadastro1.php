<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../public\assets\css\styleCADASTRO.css">
    <title>Formulário Cadastro</title>
</head>
<body>


    <div class="container">
<!--b.o no css, ver isso amanhã-->
        <div class="form-image">
            <img src="../../public\assets\img\undraw_security_re_a2rk.svg" width="50%" height="100%" alt="public\assets\img\undraw_security_re_a2rk.svg"/>
        </div>
       
        <div class="form" >
            <form id="Forms" action="/cadastro" method="POST">
                <div class="form-header">

                    <div class="title">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Logar</a></button>
                    </div>

                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname" class="form-label" >Nome</label>
                        <input type="text" name="nome" id="firstname" placeholder="DIGITE SEU NOME" class="input required" oninput="nameValidate();">
                        
                        <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>

                    </div>



                    <div class="input-box">
                        <label for="RM">RM</label>
                        <input type="number" name="rm" id="rm" placeholder="ex:21134" class="input required" oninput="rmValidate();"> 
                        
                        <span class="span-required">Digite um RM validos</span>
                    </div>

                    <div class="input-box">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="senha" id="password" placeholder="DIGITE UMA SENHA" class="input required" oninput="senhaValidate();" >
                        
                        <span class="span-required">Senha com no mínimo 8 caracteres</span>

                    </div>

                    <div class="input-box">
                        <label for="password" class="form-label">Confirmação/senha</label>
                        <input type="password" name="password" id="confirmpassword" placeholder="CONFIRME SUA SENHA" class="input required" oninput="confirmValidate();">
                        
                        <span class="span-required">Senha devem ser compatíveis</span>

                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input type="number" name="telefone" id="celular" placeholder="(xx) xxxx-xxxx" class="input required" oninput="TelValidate();">

                        <span class="span-required">Numero invalido</span>

                    </div>

                    <div class="input-box">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="DIGITE SEU EMAIL" class="input required" oninput="emailValidate();">

                        <span class="span-required">Email invalido</span>
                    </div>
                     
                    <div class="input-box">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="number" name="cpf" id="cpf" placeholder="DIGITE SEU CPF" class="input required" oninput="cpfValidate();">

                        <span class="span-required">CPF invalido</span>
                    </div>

                    <div class="input-box">
                        <label for="sobrenome" class="form-label" >Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="DIGITE SEU NOME" class="input required" oninput="sobreValidate();">
                        
                        <span class="span-required">Sobrenome deve ter no mínimo 4 caracteres</span>

                    </div>

<!-- 
                    <div class="input-box">
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
                    </div> -->

                </div>

                <!-- <div class="periodo-inputs">
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

                < <div class="cadastrar-button">
                    <button type="submit" id="enviar" name="cadastrar">Cadastrar</button>
                </div> 
                

              <!-- <button type="submit" name="cadastrar">Cadastrar</button> -->
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

    form.addEventListener('', (event) => {
        event.preventDefault();
        nameValidate();
        senhaValidate();
        confirmValidate();
        TelValidate();
        emailValidate();
        rmValidate();
        cpfValidate();
        sobreValidate(); 
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

    function rmValidate(){
        if(campos[1].value.length==5)
        {
            RemoveError(1);
        }
        else
        {
            setError(1);
        }
    }

     function senhaValidate(){
         if (campos[2].value.length<8)
         {
             setError(2);
         }
         else
         {
             RemoveError(2);
         }
     }
        //corrigido bug da array , tava comparando a arr3 com a arr1 , a certa é 3==2
     function confirmValidate(){
         if (campos[3].value==campos[2].value){
             RemoveError(3);
         }
         else{
             setError(3);
         }

     }

     function TelValidate(){
         if(campos[4].value.length==11){
            RemoveError(4);
    }
        else{
            setError(4);
        }
     }

     function emailValidate(){
        if (emailRegex.test(campos[5].value))
        {
            RemoveError(5);
        }
        else
        {
           setError(5);
        }
    }
    function cpfValidate(){
        if (cpfRegex.test(campos[6].value))
        {
            RemoveError(6);
        }
        else
        {
           setError(6);
        }
    }

    function sobreValidate(){
        if (campos[7].value.length<4)
        {
            setError(7);
        } 
        else
        {
            RemoveError(7);
        }
    }


</script>
</html>
<!--https://www.youtube.com/watch?v=YcTkoIAi0Bg&ab_channel=GustavoNeitzke Link do JS que to vendo vsf-->