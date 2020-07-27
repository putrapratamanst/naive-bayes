<?php

use yii\helpers\Html;
?>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Create Data Sample </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form id="demo-form2" action="process-create-sample" data-parsley-validate="" class="form-horizontal form-label-left" method="post">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_lengkap">Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="nama_lengkap" name="nama_lengkap" required class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="L" class="join-btn" data-parsley-multiple="gender" required> &nbsp; Laki-laki &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="P" class="join-btn" data-parsley-multiple="gender" required> Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= Html::dropDownList('1', 1, $dataPendidikan, ['class' => 'form-control' ]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">IPK</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= Html::dropDownList('2', 1, $dataIpk, ['class' => 'form-control' ]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pengalaman Kerja</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= Html::dropDownList('3', 1, $dataPengalamanKerja, ['class' => 'form-control' ]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Umur</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= Html::dropDownList('4', 1, $dataUmur, ['class' => 'form-control' ]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Psikotes</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= Html::dropDownList('5', 1, $dataPsikotes, ['class' => 'form-control' ]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">IQ</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= Html::dropDownList('6', 1, $dataIq, ['class' => 'form-control' ]) ?>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
