<section class="profile padtop65 setpassword">
	<div class="container">
		<?php include('profile/menu.php');?>
		
		<div class="profileRight">
			<form method="" action="">
				<span class="subtitle">Đặt lại mật khẩu</span>
				
				<div class="clear"></div>
				<div class="prow">
					<span>Mật khẩu cũ</span>
					<input type="password" value="" name="oldpassword" placeholder="">
				</div>
				<div class="prow">
					<span>Mật khẩu mới</span>
					<input type="password" value="" name="newpassword" placeholder="">
				</div>
				<div class="prow">
					<span>Nhập lại mật khẩu mới</span>
					<input type="password" value="" name="renewpassword" placeholder="">
				</div>
				<input type="submit" value="Lưu lại" class="btn btnblue"/>
			</form>
		</div>
	</div>
</section>