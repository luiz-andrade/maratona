<title>Erro 404</title>
<panel class="alert">
    <h1>Opss...</h1>
    <br />
<h5>Pagina <strong><?php echo $arquivo ?></strong> não localizada</h5>
    <div style='color: red;'>
    <?php
      header( "refresh:5;url=http://jiparanainfo.zz.vc/maratona/" ); //redireciona pagina em 5 segundos
     echo 'Você será redirecionado em 5 segundos. Caso não aconteça, clique <a href="http://jiparanainfo.zz.vc/maratona/">aqui</a>.';
    ?>
    </div>
<br />
</panel>