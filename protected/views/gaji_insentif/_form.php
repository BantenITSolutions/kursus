<?php
/* @var $this Gaji_insentifController */
/* @var $model TransaksiPenggajian */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-penggajian-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_guru'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'TransaksiPenggajian[id_guru]', // input name
			   'value' => $model->id_guru, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Pengajar::model()->findAll(),'id_pengajar','nama')
			));
		?>
		<?php echo $form->error($model,'id_guru'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'id_program'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'TransaksiPenggajian[id_program]', // input name
			   'value' => $model->id_program, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Program::model()->findAll(),'id_program','nama')
			));
		?>
		<?php echo $form->error($model,'id_program'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_murid_reguler'); ?>
		<?php echo $form->textField($model,'jumlah_murid_reguler', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_murid_reguler'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_murid_privat'); ?>
		<?php echo $form->textField($model,'jumlah_murid_privat', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_murid_privat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bulan'); ?>
        <select name="TransaksiPenggajian[bulan]">
        	<?php $this->widget('SelectOpBulan', array('id_select' => $model->bulan)); ?>
        </select>
		<?php echo $form->error($model,'bulan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
        <select name="TransaksiPenggajian[tahun]">
        	<?php $this->widget('SelectOpTahun', array('id_select' => $model->tahun)); ?>
        </select>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>