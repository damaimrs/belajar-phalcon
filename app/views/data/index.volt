{% extends 'base.volt' %}
 
{% block content %} 
 
<div class="container-fluid" style="margin-top:100px">    
    <div class="row">
        <div class="col-md-4">          
          {{form('data/create', 'role':'form')}}
            <h2>Tambah Pegawai</h2> 
              <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input type="text" class="form-control" placeholder="nama pegawai.." name="nama-pegawai" required>
              </div>
              <div class="form-group">
                  <label>Email Pegawai</label>
                  <input type="email" class="form-control" placeholder="email pegawai.." name="email-pegawai" required>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
        <div class="col-md-8">
          <h2>Daftar Pegawai</h2>
            {% for p in pegawai %}
            <div class="modal fade" id="{{'edit-modal-' ~ p.id_pegawai }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    {{form('data/update/'~p.id_pegawai, 'role':'form')}}
                        <div class="form-group">
                            <label>Nama Pegawai</label>
                            <input type="text" class="form-control" placeholder="nama pegawai.." name="nama-pegawai" value="{{ p.nama_pegawai }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email Pegawai</label>
                            <input type="email" class="form-control" placeholder="email pegawai.." name="email-pegawai" value="{{ p.email_pegawai }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            {% if loop.first %}
            <table class="table table-condensed table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              {% endif %}

              <tbody>
                  <tr>                    
                    <td>{{ p.nama_pegawai }}</td>
                    <td>{{ p.email_pegawai }}</td>
                    <td>
                      <a class="btn btn-warning" data-toggle="modal" data-target="{{'#edit-modal-' ~ p.id_pegawai }}">
                        <span class="glyphicon glyphicon glyphicon-pencil"></span>
                        Edit
                      </a> 
                      <a href="{{ url('data/delete/' ~ p.id_pegawai) }}" class="btn btn-danger">
                        <span class="glyphicon glyphicon glyphicon-remove"></span>
                        Hapus
                      </a>
                    </td>                    
                  </tr>
              </tbody>
            {% if loop.last %}  
            </table>
            {% endif %}

            {% endfor %}


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
{% endblock %}