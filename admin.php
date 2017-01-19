<?php 
    include "header-admin.php";
?>
<div>
    <br>
    <div class="container">
        <?php if(isDataBiodataNull($conn, $_SESSION['id'])){
                ?><div class="alert alert-warning"><center>Anda Belum Mengisi Biodata</center></div><?php
            } ?>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;">Berita</div>
                    <div class="panel-body">
                        <?php include 'admin-home-berita.php'; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;">Agenda</div>
                    <div class="panel-body">
                        <?php include 'admin-home-agenda.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>