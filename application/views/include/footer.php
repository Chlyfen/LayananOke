<script src="<?php echo config_item('bootstrap'); ?>js/bootstrap.min.js"></script>
<div class="modal" id="ModalGue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
                <h4 class="modal-title" id="ModalHeader"></h4>
            </div>
            <div class="modal-body" id="ModalContent"></div>
            <div class="modal-footer" id="ModalFooter"></div>
        </div>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>LayananOke</th>
            <th>Pencari Layanan</th>
            <th>Penyedia Layanan</th>
             <th>KOntak Kami</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tentang Layanan Oke</td>
            <td>Layanan yang tersedia</td>
            <td>Cara Kerja</td>
            <td>Whatasapp : 085241818227</td>
        </tr>
        <tr>
            <td>Bantuan</td>
            <td>Pemesanan Layanan</td>
            <td>Buat Profil</td>
            <td>Email : info@layananoke.com</td>
            
        </tr>
        <tr>
            <td>Kebijakan </td>
            
            <td>Keuntungan Penyedia</td>
            
        </tr>
         <tr>
            <td>Karir</td>
           
        </tr>
    </tbody>
</table>


<script>
    $('#ModalGue').on('hide.bs.modal', function () {
        setTimeout(function () {
            $('#ModalHeader, #ModalContent, #ModalFooter').html('');
        }, 500);
    });
</script>
</body>
</html>