<?php
Yii::app()->clientScript->registerCoreScript('jquery'); 
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="box-head">
                <h1 align="center"><?php echo $judul; ?></h1>
                <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Tambah</a><br>
                <div class="box-search" style="margin: 5px 0;text-align: right;">
                    <input type="text" name="search" id="search" class="col-md-2 col-xs-12" placeholder="testing">
                </div>
            </div>
            <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'a-grid-id',
                    'dataProvider' => $model,
                    'ajaxUpdate' => true, //false if you want to reload aentire page (useful if sorting has an effect to other widgets)
                    'filter' => null, //if not exist search filters
                    'columns' => array(
                       //untuk mengatur set nama colom yang akan di tampilkan     
                        array(
                            'header' => 'Kode Pasien',
                            'name' => 'kd_pasien',
                            'htmlOptions'=>array('width'=>'20%'),
                        ),
                        array(
                            'header' => 'Nama Pasien',
                            'name' => 'nama_pasien',
                             'htmlOptions'=>array('width'=>'20%'),
                        ),
                        array(
                            'header' => 'No Hp',
                            'name' => 'no_hp',
                             'htmlOptions'=>array('width'=>'20%'),
                        ),
                        array(
                            'header' => 'Alamat',
                            'name' => 'alamat',
                            'htmlOptions'=>array('width'=>'20%'),
                        ),
                        // 'type', //just use it in default way (but still we could use array(header,name)... )
                        array( //we have to change the default url of the button(s)(Yii by default use $data->id.. but $data in our case is an array...)
                            'class' => 'CButtonColumn',
                            'template' => '{cedit}{cdel}',
                            'buttons' => array(
                                //start default button yii
                                // 'delete' => array('url' => '$this->grid->controller->createUrl("delete", array("id"=> $data["id"]))'),
                                //end default button yii
                                //start custom button yii
                                'cedit' => array('options'=> array('class'=>'cedit','id' => 'cedit'),'imageUrl'=> Yii::app()->request->baseUrl.'/images/edit.png', 'url'=>'Yii::app()->createUrl("tes/gdata", array("id"=> $data["id"]))'),
                                'cdel' => array('options'=> array('class'=>'cdel','id' => 'cdel'),'label'=>'cdel','imageUrl'=> Yii::app()->request->baseUrl.'/images/delete.png','url'=>'Yii::app()->createUrl("tes/cdelete", array("id"=> $data["id"]))',
                                ),
                                 //end custom button yii
                            ),
                        ),
                    ),
                ));
            ?>
        </div>
    </div>
    <div class="row"></div>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" id="form-pasien">
        <div class="control-group">
            <label class="control-label" for="inputKodepasien">Kode Pasien</label>
            <div class="controls">
              <input type="text" id="inputKodepasien" placeholder="Kode Pasien">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNamapasien">Nama Pasien</label>
            <div class="controls">
              <input type="text" id="inputNamapasien" placeholder="Nama Pasien">
            </div>
        </div>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
