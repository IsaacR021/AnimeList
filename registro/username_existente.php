
<script>
     document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("info-mensagem").innerHTML = "<p class=\'inforegistro\'>Username já existe. Por favor, escolha outro.</p>";
            });


     var s_email = <?php echo json_encode($email); ?>;
     var s_username = <?php echo json_encode($username); ?>;
     var s_senha = <?php echo json_encode($senha); ?>;
     var s_conf_senha = <?php echo json_encode($conf_senha); ?>;
     var s_data_aniversario= <?php echo json_encode($data_aniversario); ?>;

        document.getElementById('email').value = s_email;
        document.getElementById('username').focus();
        document.getElementById('senha').value = s_senha;
        document.getElementById('conf_senha').value = s_conf_senha;
        document.getElementById('data_aniversario').value = s_data_aniversario;
   
</script>