</div>
<p><br><br></p>
    <p class="text-center">Copyright &copy; <?php echo date('Y');?> | <a href="http://www.cagricagman.com">A.Çağrı ÇAĞMAN</a></p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script>
    $('.table').dataTable();
    viewData();
    $('#update').prop("disabled",true);

    function viewData() {
        $.get("<?php echo site_url('welcome/view') ?>",function (data) {
            $('tbody').html(data)
        })
    }

    function saveData() {
        var id = $('#id').val()
        var name = $('#name').val()
        var lastname = $('#lastname').val()
        var email = $('#email').val()
        var phone = $('#phone').val()
        var address = $('#address').val()
        $.post('<?php echo site_url("welcome/add") ?>',{id:id, name:name, lastname:lastname, email:email, phone:phone, address:address},function (data) {
            viewData()
            $('#id').val(' ')
            $('#name').val(' ')
            $('#lastname').val(' ')
            $('#email').val(' ')
            $('#phone').val(' ')
            $('#address').val(' ')
        })
    }

    function editData(id, name, lastname, email, phone, address){
        $('#id').val(id)
        $('#name').val(name)
        $('#lastname').val(lastname)
        $('#email').val(email)
        $('#phone').val(phone)
        $('#address').val(address)
        $('#id').prop("readyonly",true)
        $('#save').prop("disabled",true)
        $('#update').prop("disabled",false)
    }

    function updateData(){
        var id = $('#id').val()
        var name = $('#name').val()
        var lastname = $('#lastname').val()
        var email = $('#email').val()
        var phone = $('#phone').val()
        var address = $('#address').val()
        $.post('<?php echo site_url("welcome/update") ?>',{id:id, name:name, lastname:lastname, email:email, phone:phone, address:address},function (data) {
            viewData()
            $('#id').val(' ')
            $('#name').val(' ')
            $('#lastname').val(' ')
            $('#email').val(' ')
            $('#phone').val(' ')
            $('#address').val(' ')
            $('#id').prop("readyonly",false)
            $('#save').prop("disabled",false)
            $('#update').prop("disabled",true)
        })
    }

    function deleteData(id){
        $.post('<?php echo site_url("welcome/remove") ?>',{id:id},function (data) {
            viewData()
        })
    }

    function removeConfirm(id){
        var con = confirm('Veriyi Silmek İstediğinizden Emin Misiniz?');
        if (con == '1'){
            deleteData(id);
        }
    }

    $(function(){
        var $sidebar = $('#sidebar'),
            $window = $(window),
            offset = $sidebar.offset(),
            topPadding = 15;
        $window.scroll(function(){
            if($window.scrollTop() > offset.top){
                $sidebar.stop().animate({
                    marginTop : $window.scrollTop() - offset.top + topPadding
                });
            } else {
                    $sidebar.stop().animate({
                    marginTop:0
                });
            }
        });
    });

</script>


</body>
</html>