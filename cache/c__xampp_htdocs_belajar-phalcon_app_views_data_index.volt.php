<!--  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container-fluid">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">Belajar Phalcon</a>
         </div>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="nav navbar-nav">
                 <li><a href="<?= $this->url->get('index/index') ?>">Home</a></li>
                 <li><a href="<?= $this->url->get('data/index') ?>" >Pegawai</a></li>
                  
             </ul>
         </div>
     </div>
 </nav> -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Phalcon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= $this->url->get('index/index') ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $this->url->get('data/index') ?>">Pegawai</a>
      </li>
  </div>
</nav>
   
 
<div class="container-fluid" style="margin-top:100px">    
    <div class="row">
        <div class="col-md-4">          
          <?= $this->tag->form(['data/create', 'role' => 'form']) ?>
            <h2>Tambah Pegawai</h2> 
              <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input type="text" class="form-control" placeholder="nama pegawai.." name="nama-pegawai" required>
              </div>
              <div class="form-group">
                  <label>Email Pegawai</label>
                  <input type="email" class="form-control" placeholder="email pegawai.." name="email-pegawai" required>
              </div>
              <div class="form-group">
                  <label>Waktu</label>
                  <input type='text' class="form-control" id="datetimepicker4" />
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
        <div class="col-md-8">
          <h2>Daftar Pegawai</h2>
            <?php $v27207522441iterator = $pegawai; $v27207522441incr = 0; $v27207522441loop = new stdClass(); $v27207522441loop->self = &$v27207522441loop; $v27207522441loop->length = count($v27207522441iterator); $v27207522441loop->index = 1; $v27207522441loop->index0 = 1; $v27207522441loop->revindex = $v27207522441loop->length; $v27207522441loop->revindex0 = $v27207522441loop->length - 1; ?><?php foreach ($v27207522441iterator as $p) { ?><?php $v27207522441loop->first = ($v27207522441incr == 0); $v27207522441loop->index = $v27207522441incr + 1; $v27207522441loop->index0 = $v27207522441incr; $v27207522441loop->revindex = $v27207522441loop->length - $v27207522441incr; $v27207522441loop->revindex0 = $v27207522441loop->length - ($v27207522441incr + 1); $v27207522441loop->last = ($v27207522441incr == ($v27207522441loop->length - 1)); ?>
            <div class="modal fade" id="<?= 'edit-modal-' . $p->id_pegawai ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?= $this->tag->form(['data/update/' . $p->id_pegawai, 'role' => 'form']) ?>
                  <div class="modal-body">                    
                        <div class="form-group">
                            <label>Nama Pegawai</label>
                            <input type="text" class="form-control" placeholder="nama pegawai.." name="nama-pegawai" value="<?= $p->nama_pegawai ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email Pegawai</label>
                            <input type="email" class="form-control" placeholder="email pegawai.." name="email-pegawai" value="<?= $p->email_pegawai ?>" required>
                        </div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <?php if ($v27207522441loop->first) { ?>
            <table class="table table-condensed table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php } ?>

              <tbody>
                  <tr>                    
                    <td><?= $p->nama_pegawai ?></td>
                    <td><?= $p->email_pegawai ?></td>
                    <td>
                      <a class="btn btn-warning" data-toggle="modal" data-target="<?= '#edit-modal-' . $p->id_pegawai ?>">
                        <span class="glyphicon glyphicon glyphicon-pencil"></span>
                        Edit
                      </a> 
                      <a href="<?= $this->url->get('data/delete/' . $p->id_pegawai) ?>" class="btn btn-danger">
                        <span class="glyphicon glyphicon glyphicon-remove"></span>
                        Hapus
                      </a>
                    </td>                    
                  </tr>
              </tbody>
            <?php if ($v27207522441loop->last) { ?>  
            </table>
            <?php } ?>

            <?php $v27207522441incr++; } ?>


          </div>         
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Tutorial Memadukan Template Bootstrap dengan Phalcon </p>
            </footer>
        </div>
    </div>
</div>


