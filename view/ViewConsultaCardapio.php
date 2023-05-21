<script>
    // Função para buscar e filtrar os registros do cardápio
    function filtrarCardapio() {
      var inputNome = $('#inputNome').val();
      var checkboxAtivo = $('#checkboxAtivo').prop('checked');
      var checkboxIngrediente = $('#checkboxIngrediente').prop('checked');
    
      // Limpar a tabela antes de fazer uma nova busca
      var tabela = $('#tabelaCardapio');
      var tbody = tabela.find('tbody');
      tbody.empty();
    
      // Fazer a requisição AJAX para obter os registros filtrados do cardápio
      $.ajax({
        url: 'controller/controllerCardapio.php',
        method: 'POST',
        data: {
          inputNome: inputNome,
          checkboxAtivo: checkboxAtivo,
          checkboxIngrediente: checkboxIngrediente
        },
        success: function(response) {
          // Iterar pelos registros do cardápio retornados na resposta da requisição
          for (var i = 0; i < response.length; i++) {
            var cardapio = response[i];
    
            // Criar uma nova linha na tabela
            var row = $('<tr></tr>');
            row.append($('<td></td>').text(cardapio.idCardapio));
            row.append($('<td></td>').text(cardapio.nomeCardapio));
            row.append($('<td></td>').text(cardapio.booleanAtivo ? 'Sim' : 'Não'));
            row.append($('<td></td>').text(cardapio.booleanIngrediente ? 'Sim' : 'Não'));
            row.append($('<td></td>').text(cardapio.dataInclusaoCardapio));
    
            tbody.append(row);
          }
        },
        error: function() {
          alert('Ocorreu um erro ao buscar os registros do cardápio.');
        }
      });
    }
    
    // Chamar a função de filtragem ao carregar a página (opcional)
    $(document).ready(function() {
      filtrarCardapio();
    });
</script>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Cardápio</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Consulta de Cardápio</h1>

    <input type="text" id="inputNome" placeholder="Digite o nome do cardápio">
    <input type="checkbox" id="checkboxAtivo"> Ativo
    <input type="checkbox" id="checkboxIngrediente"> Ingrediente

    <button onclick="filtrarCardapio()">Filtrar</button>

    <table id="tabelaCardapio">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ativo</th>
                <th>Ingrediente</th>
                <th>Data de Inclusão</th>
            </tr>
        </thead>
        <tbody>
            <!-- Os registros do cardápio serão adicionados aqui dinamicamente -->
        </tbody>
    </table>
</body>
</html>