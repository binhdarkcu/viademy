<section class="profile padtop65 setnotification">
	<div class="container">
		<?php include('profile/menu.php');?>
		
		<div class="profileRight">
			<form method="" action="">
				<span class="subtitle">Cài đặt thông báo</span>
				
				<div class="clear"></div>
				<label for="option01">
					<input id="option01" type="checkbox" name="notification" value=""/>
					Nhận thông báo từ giảng viên đã theo dõi
				</label>
				<label for="option02">
					<input id="option02" type="checkbox" name="notification" value=""/>
					Nhận thông báo từ danh mục đã theo dõi
				</label>
				<label for="option03">
					<input id="option03" type="checkbox" name="notification" value=""/>
					Nhận email thông báo từ giảng viên đã theo dõi
				</label>
				<label for="option04">
					<input id="option04" type="checkbox" name="notification" value=""/>
					Nhận email thông báo từ danh mục đã theo dõi
				</label>
				<div class="clear"></div>
				<input type="submit" value="Lưu lại" class="btn btnblue"/>
			</form>
		</div>
	</div>
</section>