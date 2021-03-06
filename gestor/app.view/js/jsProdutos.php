<script>
    $(document).ready(function() 
    { 
        $('#produtosForm').submit(function(e)
        {
            var valor = $('#valor').val();
            valor = valor.split("R$ ").join("");
            valor = valor.split(".").join("");
            valor = valor.split(",").join(".");

            desc = tinyMCE.get('descricao').getContent();

            var quantidadeImagens   = $('#quantidadeImagens').val();
            var imagens             = '';

            for(i=1; i<=quantidadeImagens; i++)
            {
                var img         = $('#imagemCaminho_'+i).val();
                var titulo      = $('#titulo_'+i).val();
                var descricao   = $('#descricao_'+i).val();
                var posicao     = $('#posicao_'+i).val();

                if  (
                        (img         != ''  &&  img         != null &&  img         != 'undefined') &&
                        (titulo      != ''  &&  titulo      != null &&  titulo      != 'undefined') &&
                        (descricao   != ''  &&  descricao   != null &&  descricao   != 'undefined') &&
                        (posicao     != ''  &&  posicao     != null &&  posicao     != 'undefined')
                    )
                {
                    imagens = imagens + img + "²" + titulo + "²" + descricao + "²" + posicao + "³";
                }
            }

            $.ajax
            ({
                type: "POST",
                url: "../../app.control/ajax.php",
                data: 
                {
                    codigo:     $('#codigo').val(),
                    nome:       $('#nome').val(),
                    valor:      valor,
                    peso:       $('#peso').val(),
                    descricao:  desc,
                    ativo:      $('#ativo').val(),
                    imagens:    imagens,
                    request:    'salvaProdutos'
                },
                success: function(data) 
                {
                    if(data == 1)
                    {
                        top.location='/produtos';
                        alert('Salvo com sucesso!');
                    }
                    else
                    {
                        alert('Erro ao salvar o conteúdo!');
                    }
                }
            });
        });
    }); 
</script>