<?php $this->load->view('dashboard/inc/header'); ?>

<div class="row mt">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-right">ویرایش تگ<i class="fa fa-tags pull-right"></i></h3>
                <a class="pull-left" href="<?= base_url('dashboard/tags'); ?>">تگ ها</a>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="well">
                            <div class="row">

                                <?= form_open('dashboard/tag_update'); ?>
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="form-group">
                                        <label for="name">عنوان :</label>
                                        <input type="text" name="name" placeholder="" required="required"
                                               autocomplete="off" value="<?=$tag->name;?>"
                                               class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-2 ">
                                    <br>
                                    <button type="submit" class="btn btn-primary mt">
                                        ویرایش<span class="glyphicon glyphicon-ok mr" aria-hidden="true"></span>
                                    </button>
                                    <input type="hidden" name="tag_id" value="<?=$tag->id;?>">
                                </div>
                                <?= form_close() ?>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>

</div>


<?php $this->load->view('dashboard/inc/footer'); ?>
