<link href="<?=base_url('assets/main/');?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">

                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Security Report</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Daily Report / Daily Security Report / Detail Daily Security Report</span>
							</div>
						</div>
					</div>
                    <div class="row row-sm">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Detail Daily Security Report</h4>
										<div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="#" class="btn btn-warning"><i class="mdi mdi-plus"></i> Edit</a>
											</div>
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                                <button type="submit" class="btn btn-danger mt-0 mb-3 mr-3" onclick="delete_daily()"> Delete</button>
											</div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
                                    <h4 style="text-align:center">FORMULIR LAPORAN HARIAN & MINGGUAN SECURITY (DRAFT)</h4><br>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <table border="1" class="table">
                                                <tr>
                                                    <td>Site / Lokasi</td>
                                                    <td><?=$data->location;?></td>
                                                </tr>
                                            <?php
                                                $shift = "";
                                                switch($data->shift){
                                                    case "1":$shift="Shift I  (07.00 – 15.00)";break;
                                                    case "2":$shift="Shift II (15.00 – 23.00)";break;
                                                    case "3":$shift="Shift III (23.00 – 07.00)";break;
                                                }
                                            ?>
                                                <tr>
                                                    <td>Shift</td>
                                                    <td><?=$shift;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pembuat laporan</td>
                                                    <td><?=$data->nama;?></td>
                                                </tr>
                                            <?php
                                                $kegiatan = "";
                                                switch($data->kegiatan){
                                                    case "1":$kegiatan="Melakukan Patroli rutin";break;
                                                    case "2":$kegiatan="Pengecekan lokasi";break;
                                                    case "3":$kegiatan="Pengecekan karyawan";break;
                                                    case "4":$kegiatan="Pengecekan mobil";break;
                                                }
                                            ?>
                                                <tr>
                                                    <td>Jenis Kegiatan</td>
                                                    <td><?=$kegiatan;?></td>
                                                </tr>
                                            <?php
                                                $sub_kegiatan = "";
                                                switch($data->sub_kegiatan){
                                                    case "1":$sub_kegiatan="Keadaan Lingkungan";break;
                                                    case "2":$sub_kegiatan="Kelistrikan";break;
                                                    case "3":$sub_kegiatan="Keadaan Lingkungan";break;
                                                    case "4":$sub_kegiatan="Safety";break;
                                                    case "5":$sub_kegiatan="Dll";break;
                                                    case "6":$sub_kegiatan="Main Gate";break;
                                                    case "7":$sub_kegiatan="Pos Jaga I";break;
                                                    case "8":$sub_kegiatan="Pos Jaga II";break;
                                                    case "9":$sub_kegiatan="Warehouse";break;
                                                    case "10":$sub_kegiatan="Area Parking";break;
                                                    case "11":$sub_kegiatan="Production";break;
                                                    case "12":$sub_kegiatan="Kamar Mandi";break;
                                                    case "13":$sub_kegiatan="APAR";break;
                                                    case "14":$sub_kegiatan="Dll";break;
                                                    case "15":$sub_kegiatan="Barang Bawaan";break;
                                                    case "16":$sub_kegiatan="Perlengkapan perkantoran (ID Card, Helmet, dll)";break;
                                                    case "17":$sub_kegiatan="Dll";break;
                                                    case "18":$sub_kegiatan="Bagasi";break;
                                                    case "19":$sub_kegiatan="Barang bawaan";break;
                                                    case "20":$sub_kegiatan="Kap mesin";break;
                                                    case "21":$sub_kegiatan="Dll";break;
                                                }
                                            ?>
                                                <tr>
                                                    <td>Sub Jenis Kegiatan</td>
                                                    <td><?=$sub_kegiatan;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ringkasan Kegiatan</td>
                                                    <td><?=$data->ringkasan;?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xl-4">
                                            <table border="1" class="table">
                                                <tr><td><?=$data->tanggal;?></td></tr>
                                                <tr><td>DR-XXXX-0001</td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    ASET
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <table border="1" class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Kode Barang</th>
                                                        <th class="border-bottom-0">Nama Barang</th>
                                                        <th class="border-bottom-0">Jumlah</th>
                                                        <th class="border-bottom-0">Kondisi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1010102030102</td>
                                                        <td>Handy Talkie (HT)</td>
                                                        <td>10</td>
                                                        <td>Baik</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Foto</h4>
                                        <div class="d-flex my-xl-auto right-content">
                                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
												<a href="<?=base_url('user/r_daily_new/security_add_img/'.$data->id_daily_security_new);?>" class="btn btn-primary"><i class="mdi mdi-plus"></i> Tambah Foto</a>
											</div>
                                        </div>
									</div>
								</div>
								<div class="card-body">
                                    <div class="row">
                                    <?php 
                                        $no = 0;
                                        foreach($foto->result() as $row){
                                            $no++;
                                    ?>
                                        <div class="col-sm-4">
                                            <div class=" border p-1 card thumb  mb-xl-0">
                                                <a href="#" class="image-popup" title="Screenshot-2" style="text-align: center;"> <img src="<?=base_url('user_data/report/daily/security/'.$row->file);?>" class="thumb-img" alt="work-thumbnail" style="max-height:200px;"> </a>
                                                <h4 class="text-center tx-14 mt-3 mb-0">Foto-<?=$no;?></h4>
                                                <div class="ga-border"></div>
                                                <button type="submit" class="clipboard-icon" onclick="delete_img(<?=$row->id_daily_security_new_img;?>)"> <i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>                                            
                                    <?php } ?>   
                                    </div>
								</div>
							</div>
						</div>
                    </div>

<script src="<?=base_url('assets/main/');?>custom/sweetalert.min.js"></script>
<script>
    function delete_daily(){
        swal({
            title: 'Warning!',
            text: 'Anda yakin akan menghapus daily report?',
            icon: 'warning',
            dangerMode: true,
            buttons: [true, "Delete!"],
        }).then(function (result){
            if (result) {
                var url = "<?=base_url('user/r_daily_new/security_delete/'.$data->id_daily_security_new);?>";
                var posting = $.get( url );
                posting.done(function( data ) {
                    if(data == "Success"){
                        swal({
                            title: 'Success!',
                            text: 'Daily Report Berhasil Dihapus',
                            icon: 'success',
                            button: false,
                            timer: 2000
                        }).then(function (){
                            window.location.replace("<?=base_url('user/r_daily_new/security');?>");
                        });;
                    }else{
                        swal({
                            title: 'Warning!',
                            text: 'Daily Report Gagal Dihapus',
                            icon: 'error',
                            button: false,
                            timer: 2000
                        });
                    }
                })
                .fail(function() {
                    swal({
                        title: 'Internal Server Error!',
                        text: 'Please Contact Administrator!',
                        icon: 'error',
                        button: false,
                        timer: 3000
                    });
                });
            }
        });
    }
    function delete_img(id = null){
        if(id != null){
            swal({
                title: 'Warning!',
                text: 'Anda yakin akan menghapus foto?',
                icon: 'warning',
                dangerMode: true,
                buttons: [true, "Delete!"],
            }).then(function (result){
                if (result) {
                    var url = "<?=base_url('user/r_daily_new/security_delete_img/');?>"+id;
                    var posting = $.get( url );
                    posting.done(function( data ) {
                        if(data == "Success"){
                            swal({
                                title: 'Success!',
                                text: 'Foto Berhasil Dihapus',
                                icon: 'success',
                                button: false,
                                timer: 2000
                            }).then(function (){
                                window.location.reload();
                            });;
                        }else{
                            swal({
                                title: 'Warning!',
                                text: 'Foto Gagal Dihapus',
                                icon: 'error',
                                button: false,
                                timer: 2000
                            });
                        }
                    })
                    .fail(function() {
                        swal({
                            title: 'Internal Server Error!',
                            text: 'Please Contact Administrator!',
                            icon: 'error',
                            button: false,
                            timer: 3000
                        });
                    });
                }
            });
        }
    }
</script>