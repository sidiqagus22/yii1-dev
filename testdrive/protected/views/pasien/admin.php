<?php
/* @var $this PasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Pasiens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Create Pasien', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	// alert('panggil');
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	// alert('panggil2');
	$('#pasien-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
 $(document).delegate('.cedit', 'click', function(e) {
       e.preventDefault();
       $('#myModal').modal('show');
       var url = $(this).attr('href');
       $.ajax({
             url: url,
             type: 'GET',
             // dataType: 'JSON',
             data: {param1: 'value1'},
             success: function(response){
                 var obj =  $.parseJSON(response);
                 // console.log(obj.message);
                 $('#inputKodepasien').val(obj.kd_pasien);
                 $('#inputNamapasien').val(obj.nama_pasien);
                 $('#btn-simpan').val('update');
                 $('#btn-simpan').text('Update');
             },
             error: function(xhr, textStatus, errorThrown){
                  // /
             }
       })
      });
       $(document).delegate('.cdel', 'click', function(e) {
       e.preventDefault();
       var url = $(this).attr('href');
       if(!confirm('apakah benar anda akan menghapus data ini ???')) return false;
       $.ajax({
             url: url,
             type: 'GET',
             // dataType: 'JSON',
             data: {param1: 'value1'},
             success: function(response){
                var obj =  $.parseJSON(response);
                // alert(obj.message);
                window.location.reload();
             },
             error: function(xhr, textStatus, errorThrown){
                  // /
             }
       })
      });
      $(document).delegate('#btn-tambah', 'click', function(e) {
       e.preventDefault();
        $('#myModal').modal('show');
        $('#btn-simpan').val('simpan');
        $('#btn-simpan').text('Simpan');
        return false;
      });
    $(document).delegate('#form-pasien', 'submit', function(e) {
        var url = $('#btn-simpan').data('url');
        if($('#btn-simpan').attr('value') == 'update'){
          alert('true');
        }else{
          $.ajax({
             url: url,
             type: 'POST',
             // dataType: 'JSON',
             data: {kd_pasien: 'value1', nama_pasien: 'value2'},
             success: function(response){
               var obj =  $.parseJSON(response);
                alert(obj.message);
                window.location.reload();
             },
             error: function(xhr, textStatus, errorThrown){
                  // /
             }
        })
        }
        return false;
    });
");
?>

<h1>Manage Pasiens</h1>
<button class="btn btn-primary" id="btn-tambah">Tambah</button>
<!-- <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?> -->
<div class="search-form" style="display:inline;">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pasien-grid',
	'dataProvider'=>$model->search(),
	'filter'=> null, // dikosongkan dulu agar tidak tampil kalau di kembalikan dijadikan $model
	'columns'=>array(
		'id_pasien',
		'kd_pasien',
		'nama_pasien',
		'no_hp',
		'alamat',
		array(
			'class' => 'CButtonColumn',
            'template' => '{cedit}{cdel}',
            'buttons' => array(
            	'cedit' => array('options'=> array('class'=>'cedit','id' => 'cedit'),'imageUrl'=> Yii::app()->request->baseUrl.'/images/edit.png', 'url'=>'Yii::app()->createUrl("pasien/gdata", array("id"=> $data->id_pasien))'),
            	'cdel' => array('options'=> array('class'=>'cdel','id' => 'cdel'),'imageUrl'=> Yii::app()->request->baseUrl.'/images/delete.png', 'url'=>'Yii::app()->createUrl("pasien/cdelete", array("id"=> $data->id_pasien))'),
            ),	
		),
	),
)); ?>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <form class="form-horizontal" id="form-pasien" action="#">
  <div class="modal-body">
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
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" value="" id="btn-simpan" type="submit" data-url="<?php echo Yii::app()->createUrl('pasien/simpan'); ?>">Save changes</button>
  </div>
  </form>
</div>
