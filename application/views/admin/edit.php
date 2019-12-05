

<div style=" 
background: #060606;
padding: 40px 0px;
"><br></div>


<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-right">
                    <h2>GET IN TOUCH</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $barang['id'];?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama barang"  data-error="Please enter your name" value="<?= $barang['nama_barang']?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form>
                                      <select id="jenis_barang" name="jenis_barang" class="form-control">
                                        <?php foreach($jenis_barang as $j ) :  ?>
                                    <?php if( $j == $barang['jenis_barang'] ) : ?>
                                        <option value="<?= $j; ?>"selected><?= $j; ?>
                                    </option>
                                    <?php else : ?>
                              <option value="<?= $j; ?>" ><?= $j; ?></option>
                              <?php endif; ?>
                             
                         <?php endforeach; ?>

                                       <!--  <option selected>Pilih Jenis barang</option>
                                        <option value="1">Sayurah</option>
                                        <option value="2">Buah</option> -->
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="harga_barang" name="harga_barang" placeholder="Harga barang"  data-error="Please enter your Subject " value="<?= $barang['harga_barang']?>" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" min="0" step="1" class="c-input-text qty text form-control" id="stock_barang" name="stock_barang" placeholder="Stock barang"value="<?= $barang['stock_barang']?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <form>
                                    <input type="file"  id="img_barang"  data-error name="img_barang">
                                    <label class="custom-file-label" class="form-control" for="img_barang" value="<?= $barang['img_barang']?>">Choose file</label>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang" placeholder="Deskripsi barang" value="<?= $barang['deskripsi_barang']?>" rows="4" data-error="Write your message" ></textarea>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn hvr-hover" name="edit" type="submit">Upgrade Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>