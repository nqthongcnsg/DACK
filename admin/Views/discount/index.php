<div class="content-box">
				
				
				
				<div class="content-box-header">
                <form class="form-inline my-2 my-lg-0" action='index.php' method='get'>
                        <input type="hidden" name='controller' value='product'>
                        <input type="hidden" name='action' value='search'>
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" name='kw' value=<?php echo $kw ?>>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<table>
							
							<thead>
								<tr>
								
								   <th>ID</th>
								   <th>Tên Khuyến mãi</th>
								   
								</tr>
								
							</thead>
						 
							
						
							<tbody>
								<?php

                                foreach($dataProduct as $r){
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo  $r['idDiscount'] ?></td>
                                            <td><a href="#" title="title"><?php echo $r['nameDiscount'] ?></a></td>
                                            
                                            <td>
                                                <!-- Icons -->
                                                <a href="./index.php?idDiscount=<?php echo$r['idDiscount']  ?>&controller=discount&action=update"><img src="resources/images/icons/pencil.png" alt="Sửa" /></a>
                                                <a href="./index.php?idDiscount=<?php echo $r['idDiscount']  ?>&controller=discount&action=delete" title="Delete"><img src="resources/images/icons/cross.png" alt="Xóa" /></a> 
                                                
                                            </td>
								        </tr>
                                    <?php
                                }
                                ?>

								
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
				 <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>

								
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
				 <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>