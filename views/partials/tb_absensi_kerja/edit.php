<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Edit  Tb Absensi Kerja</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tb_absensi_kerja/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nama_karyawan">Nama Karyawan <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-nama_karyawan"  value="<?php  echo $data['nama_karyawan']; ?>" type="text" placeholder="Enter Nama Karyawan"  required="" name="nama_karyawan"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tanggal_masuk">Tanggal Masuk <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input id="ctrl-tanggal_masuk" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['tanggal_masuk']; ?>" type="datetime" name="tanggal_masuk" placeholder="Enter Tanggal Masuk" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="waktu_masuk">Waktu Masuk <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input id="ctrl-waktu_masuk" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['waktu_masuk']; ?>" type="time" name="waktu_masuk" placeholder="Enter Waktu Masuk" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-status"  value="<?php  echo $data['status']; ?>" type="text" placeholder="Enter Status"  required="" name="status"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="waktu_selesai_kerja">Waktu Selesai Kerja <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <input id="ctrl-waktu_selesai_kerja" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['waktu_selesai_kerja']; ?>" type="time" name="waktu_selesai_kerja" placeholder="Enter Waktu Selesai Kerja" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="created_at">Created At <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-created_at"  value="<?php  echo $data['created_at']; ?>" type="text" placeholder="Enter Created At"  required="" name="created_at"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="updated_at">Updated At <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group">
                                                                        <input id="ctrl-updated_at" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['updated_at']; ?>" type="datetime"  name="updated_at" placeholder="Enter Updated At" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-ajax-status"></div>
                                                        <div class="form-group text-center">
                                                            <button class="btn btn-primary" type="submit">
                                                                Update
                                                                <i class="fa fa-send"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
