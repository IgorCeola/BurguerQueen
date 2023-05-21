
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
    
    
    $(document).ready(function() {
    
    	$("#frmTelaInicial #btUsuario").click(function() {
        	$("#frmTelaInicial #dsAba").val('Usuario');	
        	exibeTela();	
        });
        
        $("#frmTelaInicial #btCliente").click(function() {
        	$("#frmTelaInicial #dsAba").val('Cliente');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btProduto").click(function() {
        	$("#frmTelaInicial #dsAba").val('Produto');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btCategoria").click(function() {
        	$("#frmTelaInicial #dsAba").val('Cardapio');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btFormaPagamento").click(function() {
        	$("#frmTelaInicial #dsAba").val('FormaPagamento');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btFreteEntrega").click(function() {
        	$("#frmTelaInicial #dsAba").val('FreteEntrega');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btIngrediente").click(function() {
        	$("#frmTelaInicial #dsAba").val('Ingrediente');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btPromocao").click(function() {
        	$("#frmTelaInicial #dsAba").val('Promocao');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btPrivilegio").click(function() {
        	$("#frmTelaInicial #dsAba").val('Privilegio');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btRelatorio").click(function() {
        	$("#frmTelaInicial #dsAba").val('Relatorio');
        	exibeTela();		
        });
        
        $("#frmTelaInicial #btConfiguracao").click(function() {
        	$("#frmTelaInicial #dsAba").val('Configuracao');
        	exibeTela();		
        });
    
    });
    
    function exibeTela(){
    	$.ajax({
          url: 'controller/Controller'+$("#frmTelaInicial #dsAba").val()+'.php?action=winConsulta&',
          type: "GET",
          success: function(data) {
          	
            $("#content").html(data);
              
          },
          error: function(jqXHR, textStatus, errorThrown) {
            // Callback function para tratar erros, se necessário
            console.error("Erro na requisição AJAX:", textStatus, errorThrown);
          }
        });	
    }
</script>

<!DOCTYPE html>

<html>
<head>
    <title>Menu</title>
    <style>
        /* Estilos CSS */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #sidebar {
            width: 15%;
            height: 100vh;
            background-color: gray;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li {
            margin-top: 10px;
            background-color: transparent;
            padding: 5px;
            cursor: pointer;
        }

        #sidebar ul li:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        #content {
            margin-left: 20%;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form id="frmTelaInicial" action="javascript:void(0)">
    
    	<input type="hidden" id="dsAba">
    	
        <div id="sidebar">
            <ul>
                <li><span id="btUsuario">Usuários</span></li>
                <li><span id="btCliente">Clientes</span></li>
                <li><span id="btProduto">Produtos</span></li>
                <li><span id="btPedido">Pedidos</span></li>
                <li><span id="btCategoria">Categorias</span></li>
                <li><span id="btFormaPagamento">Formas de Pagamento</span></li>
                <li><span id="btFreteEntregadores">Frete/Entregadores</span></li>
                <li><span id="btIngrediente">Ingredientes</span></li>
                <li><span id="btPromocao">Promoções</span></li>
                <li><span id="btPrivilegio">Privilégios</span></li>
            </ul>
        </div>
    
        <div id="content">
            <!-- Conteúdo da página -->
        </div>
    </form>
</body>
</html>