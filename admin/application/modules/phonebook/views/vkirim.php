
<div id="content">
  <div class="container-fluid">


    <div class="row-fluid">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>


        </div>
        <div class="widget-content">
          <div class="row-fluid">
            <div class="span6">


             <?=$this->session->flashdata('pesan')?>

              <form class="form-horizontal" method="post" action="<?=site_url()?>phonebook/send" name="basic_validate" id="basic_validate" novalidate="novalidate" method="POST">
              <input type="hidden" value="<?=$getid->phonebook_id?>" name="phonebook_id" id="phonebook_id" />
                                      <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="namakontak" id="namakontak" value="<?=$getid->namakontak?>">
                                        </div>
                                    </div>

                                      <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Nomor HP</label>
                                    <div class="col-sm-3">
                            <input type="text" name="no_hp" id="no_hp" value="<?=$getid->no_hp?>">
                                        </div>
                                    </div>


                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Isi Pesan</label>
                                    <div class="col-sm-3">
                                            <textarea id="isi" name="isi"></textarea><br>
                                      </div>
                                      </div>

                                    <div class="form-actions">
                                        <input type="submit" value="Validate" class="btn btn-success">
                                    </div>
                                </form>

            </div>
              <div class="span6">


            </div>

          </div>
        </div>
    </div>
    <hr>



  </div>
