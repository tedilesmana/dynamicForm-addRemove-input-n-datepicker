<link rel="stylesheet" href="<?= base_url('assets/jquery-ui/') ?>jquery-ui.css">
<link rel="stylesheet" href="<?= base_url('assets/jquery-ui/') ?>jquery-ui.theme.css">
<script src="<?= base_url('assets/jquery-ui/') ?>jquery-ui.js"></script>
<script>
    $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<div class="container-fluid mb-3" style="" id="kop-sma">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <img class="col-lg-11 col-sm-12" src="<?= base_url('assets/images/logo/kop.jpg') ?>" height="270" alt="" style="width:100%;">
        </div>
    </div>
</div>
<!-- Form -->
<form class="text-center" style="color: #757575;" action="" method="post">
    <div class="" style="margin-left: 20px;">
        <div>
            <div class="mb-5">
                <div class="text-center">
                    <h4>FORM PENGAJUAN JADWAL LAB</h4>
                </div>
            </div>
            <div class="">
                <!-- Material form register -->
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>DATA PENGAJUAN</strong>
                    </h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <div class="form-row">
                            <div class="col-3">
                                <!-- First name -->
                                <div class="md-form mt-3">
                                    <input type="text" id="datepicker" class="form-control" placeholder="Tanggal Pengajuan Penggunaan Lab" name="tgl_pengajuan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Material form register -->
                <div class="card mt-5">
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>DATA ALAT DAN BAHAN DI BUTUHKAN</strong>
                    </h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <table class="table mt-5 border">
                            <thead class="black white-text text-center">
                                <tr>
                                    <th scope="">Nama Alat dan Bahan</th>
                                    <th scope="" style="width: 100px;" class="ml-5 pl-5">Jumlah</th>
                                    <th scope="" style="width: 400px;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="drag" class="dynamic dynamic_step" name="langkah">
                                <tr class="border1" id="row_soal1">
                                    <td>
                                        <div class="md-form mt-1">
                                            <input type="text" id="materialContactFormName" class="form-control ml-4" name="nama_ab[1]" placeholder="Masukan Alat dan Bahan Yang Di Perlukan">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="md-form mt-1">
                                            <input type="text" id="materialContactFormName" class="form-control ml-4" name="jumlah[1]" required>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" name="hapus" id="1" class="btn text-danger btn-info btn-hapus ml-4" style="">
                                            <div class="font-weight-bold text-white">HAPUS</div>
                                        </button>
                                        <button type="button" name="1" id="tambah" class="btn text-danger btn-danger btn-tambah ml-4" style="">
                                            <div class="font-weight-bold text-white">TAMBAH</div>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Sign up button -->
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <div class="col-12 text-center">
        <button class="btn btn-info btn-rounded my-4 waves-effect z-depth-0" type="submit">SUBMIT</button>
    </div>
    </div>
</form>
<!-- Form -->
<script type="text/javascript" src="<?php echo base_url('assets/dropify/dist/js/dropify.min.js')?>"></script>
<script type="text/javascript">
$(function() {
    $('.dropify').dropify({
        messages: {
            default: 'Drag atau drop untuk memilih gambar',
            replace: 'Ganti',
            remove: 'Hapus',
            error: 'error'
        }
    });
});

// $('body').on('click', '#addButton', function() {
//    // code here
// });

var i = 2;
$('.dynamic_step').on('click', '.btn-tambah', function() {
    i++;
    $('.dynamic_step').append(



        '<tr class="border' + i + '" id="row_soal' + i + '">' +
        '<td>' +
        '<div class="md-form mt-1">' +
        '<input type="text" id="materialContactFormName" class="form-control ml-4" name="nama_ab[' + i + ']" placeholder="Masukan Alat dan Bahan Yang Di Perlukan">' +
        '</div>' +
        '</td>' +
        '<td>' +
        '<div class="md-form mt-1">' +
        '<input type="text" id="materialContactFormName" class="form-control ml-4" name="jumlah[' + i + ']" required>' +
        '</div>' +
        '</td>' +
        '<td>' +
        '<button type="button" name="hapus" id="' + i + '" class="btn text-danger btn-info btn-hapus ml-4" style="">' +
        '<div class="font-weight-bold text-white">HAPUS</div>' +
        '</button>' +
        '<button type="button" name="tambah" id="' + i + '" class="btn text-danger btn-danger btn-tambah ml-4" style="">' +
        '<div class="font-weight-bold text-white">TAMBAH</div>' +
        '</button>' +
        '</td>' +
        '</tr>'


    );


    $(function() {
        var jum = $('tr').length - 1;
        $('.jum_soal').html(jum);
    });


    $('.dropify').dropify({
        messages: {
            default: 'Drag atau drop untuk memilih gambar',
            replace: 'Ganti',
            remove: 'Hapus',
            error: 'error'
        }
    });

    count();
});

count();

function count() {
    // console.log($('tr').length - 1);
    if ($('tr').length - 1 <= 1) {
        $('.btn-hapus').attr('disabled', 'disabled');
    } else {
        $('.btn-hapus').removeAttr('disabled', 'disabled');
    }
        // $('.btn-hapus').addClass('container');
        // $('.btn-hapus').removeClass('container');
}


$(document).on('click', '.btn-hapus', function() {
    // var jum = $('tr').length - 2;
    // $('.jum_soal').html(jum);
    if ($('tr').length - 1 > 1) {
        var id_btn = $(this).attr("id");
        $('.border' + id_btn + '').remove();
        // count()
    }

    count()
});

$(function() {
    var jum = $('tr').length - 1;
    $('.jum_soal').html(jum);
});
</script>