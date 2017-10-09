<?php
Yii::app()->clientScript->registerCoreScript('jquery'); 
?>
<h1>Daftar Tasks</h1>
<?php echo $judul; ?>
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
            //'value'=>'$data["MAIN_ID"]', //in the case we want something custom
        ),
        array(
            'header' => 'Nama Pasien',
            'name' => 'nama_pasien',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'No Hp',
            'name' => 'no_hp',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        array(
            'header' => 'Alamat',
            'name' => 'alamat',
            //'value'=>'$data["title"]', //in the case we want something custom
        ),
        // 'type', //just use it in default way (but still we could use array(header,name)... )
 
        array( //we have to change the default url of the button(s)(Yii by default use $data->id.. but $data in our case is an array...)
            'class' => 'CButtonColumn',
            'template' => '{cview}{cdel}',
            'buttons' => array(
                //start default button yii
                // 'delete' => array('url' => '$this->grid->controller->createUrl("delete", array("id"=> $data["id"]))'),
                //end default button yii
                //start custom button yii
                'cview' => array('options'=> array('class'=>'cview','id' => 'cview'),'imageUrl'=> Yii::app()->request->baseUrl.'/images/del.png', 'url'=>'Yii::app()->createUrl("tes/cupdate", array("id"=>1))'),
                'cdel' => array('options'=> array('class'=>'cdel','id' => 'cdel'),'label'=>'cdel','imageUrl'=> Yii::app()->request->baseUrl.'/images/del.png','url'=>'Yii::app()->createUrl("tes/cdelete", array("id"=>1))',
                 //end custom button yii
        ),
            ),
        ),
    ),
));
?>



<br>

<script type="text/javascript">
	$(document).ready(function() {
        $('#cview').click(function(e) {
           e.preventDefault();
           if(!confirm('persetujuan ???')) return false;
           alert($(this).attr('href'));
        });
        return false;
    });
</script>
