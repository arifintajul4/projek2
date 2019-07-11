<!-- Begin Page Content -->
<div class="container-fluid" style="min-height: 70%">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $tittle; ?></h1>
    </div>
    <hr>
    <?= $this->session->flashdata('message'); ?>
    <form action="" method="post">
    	<div class="form-group">
		    <label for="judul">Judul Berita</label>
		    <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" required>
		</div>
		<div class="form-group">
		    <label for="judul">Isi Berita</label>
		    <textarea class="ckeditor form-control" id="ckeditor" name="isi"></textarea>
		</div>
		<div class="form-group">
			<label for="keterangan">Keterangan</label>
			<textarea class="form-control" type="text" id="keterangan" name="keterangan"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-danger">Batal</button>
    </form>


</div>