<div id="sidebar"><div id="sidebar-wrapper">
			
			<h1 id="sidebar-title"><a href="#">Trang Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				 <h4> <a href="signout.php" title="Sign Out">Đăng xuất</a></h4>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				
				
				<li> 
					<a href="index.php" class="nav-top-item "> <!-- Add the class "current" to current menu item -->
					Sản phẩm
					</a>
					<ul>
						<li>
						<a href="index.php?controller=product"> <!-- Add the class "current" to current menu item -->
					Danh sách sản phẩm
					</a>
						</li>
						<li>
						<a href="index.php?controller=product&action=insert"> <!-- Add the class "current" to current menu item -->
					Thêm sản phẩm
					</a>
						</li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				
				<li>
					<a href="index.php" class="nav-top-item">
						Loại
					</a>
					<ul>
						<li>
						<a href="index.php?controller=type"> <!-- Add the class "current" to current menu item -->
					Danh sách loại
					</a>
						</li>
						<li>
						<a href="index.php?controller=type&action=insert"> <!-- Add the class "current" to current menu item -->
					Thêm loại
					</a>
						</li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				
				<li>
					<a href="index.php" class="nav-top-item">
						Thể loại
					</a>
					<ul>
						<li>
						<a href="index.php?controller=categories"> <!-- Add the class "current" to current menu item -->
					Danh sách thể loại
					</a>
						</li>
						<li>
						<a href="index.php?controller=categories&action=insert"> <!-- Add the class "current" to current menu item -->
					Thêm thể loại
						</li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				<li> 
					<a href="index.php" class="nav-top-item "> <!-- Add the class "current" to current menu item -->
					Thương hiệu
					</a>
					<ul>
						<li>
						<a href="index.php?controller=brand"> <!-- Add the class "current" to current menu item -->
					Danh sách thương hiệu
					</a>
						</li>
						<li>
						<a href="index.php?controller=brand&action=insert"> <!-- Add the class "current" to current menu item -->
					Thêm thương hiệu
					</a>
						</li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				<li> 
					<a href="index.php" class="nav-top-item "> <!-- Add the class "current" to current menu item -->
					Size
					</a>
					<ul>
						<li>
						<a href="index.php?controller=size"> <!-- Add the class "current" to current menu item -->
					Danh sách  Size
					</a>
						</li>
						<li>
						<a href="index.php?controller=size&action=insert"> <!-- Add the class "current" to current menu item -->
					Thêm  size
					</a>
						</li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				<li> 
					<a href="index.php" class="nav-top-item "> <!-- Add the class "current" to current menu item -->
					Khuyến mãi
					</a>
					<ul>
						<li>
						<a href="index.php?controller=discount"> <!-- Add the class "current" to current menu item -->
					Danh sách khuyễn mãi
					</a>
						</li>
						<li>
						<a href="index.php?controller=discount&action=insert"> <!-- Add the class "current" to current menu item -->
					Thêm khuyến mãi
					</a>
						</li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				<li> 
					<a href="index.php" class="nav-top-item "> <!-- Add the class "current" to current menu item -->
					Danh sách hóa đơn
					</a>
					<ul>
						<li>
						<a href="index.php?controller=list"> <!-- Add the class "current" to current menu item -->
					Hóa đơn 
					</a>
						</li>
						 <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				
				
				
				
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div>