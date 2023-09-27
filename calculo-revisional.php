
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>

</head>
<body>
<form action="enviar.php" method="POST">
<div class="row container">
<h4 class="center">Cálculo Revisional</h4>
<fieldset class="formulario">

        <h5 class="center">Informações de contato</h5>
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input name="nome" type="text" class="validate">
          <label for="nome">Nome Completo</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="email" type="text" class="validate">
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="numero" type="text" class="validate">
          <label for="numero">Numero WhatsApp</label>
        </div>

        <br><br><br><h3 class="center">Informações do Contrato:</h3>

        <p class="center">
      <label>
      <i class="material-icons prefix">directions_car</i>
        <input type="radio" name="tipo" value="Financiamento de Veiculo" checked/>
        <span>Financiamento de Veiculo</span>
      </label>&nbsp;&nbsp;&nbsp;

      <label>
      <i class="material-icons prefix">monetization_on</i>
        <input type="radio" name="tipo" value="Emprestimo Bancario" checked/>
        <span>Empréstimo Bancário</span>
      </label>&nbsp;&nbsp;&nbsp;

      <label>
      <i class="material-icons prefix">credit_card</i>
        <input type="radio" name="tipo" value="Cartao de Credito" checked/>
        <span>Cartão de Credito</span>
      </label>&nbsp;&nbsp;&nbsp;

      <label>
      <i class="material-icons prefix">card_membership</i>
        <input type="radio" name="tipo" value="Cheque Especial" checked/>
        <span>Cheque Especial</span>
      </label>&nbsp;&nbsp;&nbsp;

      <label>
      <i class="material-icons prefix">cached</i>
        <input type="radio" name="tipo"  value="Outros" />
        <span>Outros</span>
      </label>&nbsp;
    </p>



<!--
        <div class="input-field col s6">
        <i class="material-icons prefix">attach_money</i>
        <input name="valorfinanciado" type="text" class="validate">
        <label for="valorfinanciado">Valor Financiado*</label>
        </div>

        -->

        <div class="input-field col s6">
        <i class="material-icons prefix">live_help</i>
        <input name="quantidadeparcelastotal" type="text" class="validate">
        <label for="quantidadeparcelastotal">Quantidades Total de Parcelas</label>
        </div>
  <!--
        <div class="input-field col s6">
        <i class="material-icons prefix">live_help</i>
        <input name="quantidadeparcelasvencer" type="text" class="validate">
        <label for="quantidadeparcelasvencer">Quantidades Parcelas a Vencer</label>
        </div>

        -->

        <div class="input-field col s6">
        <i class="material-icons prefix">event_available</i>
        <input name="quantidadeparcelaspagas" type="text" class="validate">
        <label for="quantidadeparcelaspagas">Quantidade de Parcelas Pagas</label>
        </div>


        <div class="input-field col s6">
        <i class="material-icons prefix">monetization_on</i>
        <input name="valorparcelas" type="text" class="validate">
        <label for="valorparcelas">Valor da(s) Parcela(s)</label>
        </div>

       

        <div class="input-field col s6">
        <i class="material-icons prefix">money_off</i>
        <select name="parcelaematraso" id="select">
        <option value="" disabled selected>Selecione</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
        </select>
        <label>Possui parcelas em atraso ?</label>
        </div>
        
        <div class="input-field col s12">
        <i class="material-icons prefix">comment</i>
        <textarea name="mensagem" id="mensagem" type="text" placeholder="Digite aqui sua mensagem.."></textarea>
        </div>

    </fieldset><br>
<center><button class="btn waves-effect waves-light" type="submit" name="action">Calcular</button></center>
</div>


<script type="text/javascript" src="/js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
</body>
</html>