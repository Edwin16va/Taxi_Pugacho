<?= $this->extend('./plantilla/layout')?>
<?= $this->section('titulo')?>
<?php echo $title ?>
<?= $this->endSection()?>

<?= $this->section('contenido')?>

<br>
<?=$this->include('/admin/users/formulario') ?>

<?=$this->include('/admin/users/tabla') ?>


<?= $this->endSection()?>

<?= $this->section('scripts')?>
<?=$this->include('/admin/users/user') ?>
<?= $this->endSection()?>