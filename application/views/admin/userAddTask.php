<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<style>
    .importantoAdmin {
        /*background: cornflowerblue;*/
        background: linear-gradient(60deg, #26c6da, #00acc1);
        padding: 5px 10px;
        box-sizing: border-box;
        color: white;
        border-radius: 3px;
    }

    .importantoSimple {
        background: white;
        padding: 5px 10px;
        box-sizing: border-box;
        color: #9c27b0;
        border-radius: 3px;
    }
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">

                        <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>
                            <b><span class="importantoAdmin pull-right">Admin</span></b>
                        <?php } else { ?>
                            <b><span class="importantoSimple pull-right">Sade</span></b>
                        <?php } ?>
                        <h4 class="card-title">Tapşırıq</h4>
                        <p class="card-category">Tapşırıq yarat</p>
                    </div>
                    <div class="card-body">

                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('success') ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('err')) { ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('err') ?>
                            </div>
                        <?php } ?>
                        <form method="post" action="<?php echo base_url('userTaskAddAct') ?>"
                              enctype="multipart/form-data">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Vacibliyi</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="">--Seçin--</option>
                                                <?php foreach ($getAllTaskStatuses as $getAllTaskStatusesKey) { ?>
                                                    <option value="<?php echo $getAllTaskStatusesKey['id'] ?>"><?php echo $getAllTaskStatusesKey['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="" style="padding-top: 10px;">
                                        <label class="bmd-label-floating">Yeni şəkil</label>
                                        <input name="images" type="file" class="form-control" style="margin-top: 2px">
                                    </div>
                                </div>

                            </div>


                            <div class="row">


                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Başlıq</label>
                                            <input name="title" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Ətraflı məlumat</label>
                                            <textarea name="description" class="form-control" id="" cols="30"
                                                      rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <button type="submit" class="btn btn-primary pull-right">Əlavə et</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/leftMenuColorFilter'); ?>
<?php $this->load->view('admin/includes/footerJs'); ?>


