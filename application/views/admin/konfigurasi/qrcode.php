<?php
// Notifikasi 
if($this->session->flashdata('sukses')) {
  echo '<p class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<?php
// Error Upload
if(isset($error)) {
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}

// Notifikasi Error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form open
echo form_open_multipart(base_url('admin/konfigurasi/qrcode'),' class="form-horizontal"');
?>

<div class="form-group">
  <label class="col-md-3 control-label">Nama Website </label>
  <div class="col-md-8">
    <input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Upload QR Code</label>
  <div class="col-md-8">
    <input type="file" name="qrcode" class="form-control" placeholder="Upload QR Code" value="<?php echo $konfigurasi->qrcode ?>" required>
     Icon lama: <br>
    <img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->qrcode) ?>" class="img img-responsive img-thumbnail" width="200">
  </div>
</div>

 <div class="form-group">
  <label class="col-md-3 control-label"></label>
  <div class="col-md-5">
  <button class="btn btn-success" name="submit" type="submit">
  	<i class="fa fa-save"></i> Simpan
  </button>
  <button class="btn btn-info" name="reset" type="reset">
  	<i class="fa fa-times"></i> Reset
  </button>
  </div>
  
</div>

<br>

<?php echo form_close(); ?>