<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                <?php $levuser=$this->session->userdata('admin_level'); ?>
                <?php if($levuser=='1' or $levuser=='9'){ ?>

                <h3 class="box-title">

                    <a href="<?php echo base_url(); ?>admin/tambah_produk_bakery" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-edit"></i> Tambah Produk Bakery</a>

                  </h3>
                  <?php } ?>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
						<th>No.</th>
                        <th>Kode</th>
						<th>Nama Produk</th>
                        <th>Stok</th>
						<th>Kode Pintas</th>
            <th>Category</th>
						<th>Harga</th>
						<th>Disc/Pot</th>
						

						<th width=150>Action</th>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($dataamor as $lihat):
                        ?>
                    	<tr>
							<td><?php echo $no++ ?></td>
                    		<td><?php echo $lihat->productBarcode; ?></td>
							<td><?php echo $lihat->productName; ?></td>
							<td><?php echo $lihat->productStock; ?></td>
							<td><?php echo $lihat->productShortcut; ?></td>
              <td><?php echo $lihat->categoryID; ?></td>
							<td>
							<?php if($lihat->productSalePrice<=0){ ?>
							 <a href="<?php echo base_url(); ?>admin/edit_produk/<?php echo $lihat->productID ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Set Harga</a>
							<?php } else { ?>
							<?php echo number_format($lihat->productSalePrice); ?>
							 <?php } ?></td>
							<td><?php echo $lihat->productDiscount; ?></td>

							
                        <td align="center">
							<a href="<?php echo base_url(); ?>admin/edit_produk/<?php echo $lihat->productID ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_produk/<?php echo $lihat->productID ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data : <?php echo $lihat->productName; ?> ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </td>                  		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>