<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="materialize/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>






<!--Inicialização JQUERY -->

<script>
$(document).ready(function() {
    $('select').formSelect();
});

$(document).ready(function() {
    $('#listar').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "banco_de_dados/read.php",
            "type": "POST"
        }
    });
});
</script>



</body>

</html>