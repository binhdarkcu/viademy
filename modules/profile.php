<section class="profile padtop65">
	<div class="container">
		<?php include('profile/menu.php');?>
		
		<div class="profileRight">
			<form method="" action="">
				<span class="subtitle">Thông tin cá nhân</span>
				<div class="payoption">
					<a href="#" class="selected btn ">Trả phí</a>
					<a href="#" class="btn ">Miễn phí</a>
				</div>
				<div class="fileUpload ">
					<span>Chọn ảnh đại diện</span>
					<input type="file" class="upload" name="p_picture_temp"/>
				</div>
				<div class="clear"></div>
				<div class="prow">
					<span>Email</span>
					<input type="text" value="" name="useremail" placeholder="">
				</div>
				<div class="prow">
					<span>Họ và tên</span>
					<input type="text" value="" name="username" placeholder="">
				</div>
				<div class="prow">
					<span>Số điện thoại</span>
					<input type="text" value="" name="telephone" placeholder="">
				</div>
				<input type="submit" value="Lưu lại" class="btn btnblue"/>
			</form>
		</div>
	</div>
</section>