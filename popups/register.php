<div class="popup register" id="registerDialog">
	<div class="overlays" onclick="SiteMain.closePopup()"></div>
	<div class="popupContent">
		<form action="" method="">
			<h3>ĐĂNG KÝ</h3>
			<p>
				<input type="text" value="" name="username" placeholder="Họ Tên"/>
			</p>
			<p>
				<input type="text" value="" name="email" placeholder="Email "/>
			</p>
			<p>
				<input type="password" value="" name="password" placeholder="Mật khẩu"/>
			</p>
			<p>
				<input type="password" value="" name="repassword" placeholder="Nhập lại Mật khẩu"/>
			</p>
			<input type="submit" class="btn btnblue" value="Đăng ký" />
			<span class="or">HOẶC</span>
			
			<a href="#" class="btn btnfb">Đăng ký với tài khoản Facebook</a>
			<a href="#" class="btn btngp">Đăng ký với tài khoản Google +</a>

			<div class="claim">
				Bạn đồng ý với <br/>
				<a href="#">Điều khoản sử dụng và Chính sách bảo mật</a> của chúng tôi.
			</di>

			<div class="hasaccount">
				Đã có tài khoản?
				<a href="javascript:void(0);" class="createAccount" onclick="SiteMain.openPopup('#loginDialog')">Đăng nhập ngay</a>
			</div>
		</form>
	</div>
</div>