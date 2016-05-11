<div class="popup login" id="loginDialog">
	<div class="overlays" onclick="SiteMain.closePopup()"></div>
	<div class="popupContent">
		<form action="" method="">
			<h3>ĐĂNG NHẬP</h3>
			<p>
				<input type="text" value="" name="email" placeholder="Email"/>
			</p>
			<p>
				<input type="password" value="" name="password" placeholder="Mật khẩu"/>
			</p>
			<a href="#" class="forgotpw">Quên mật khẩu</a>
			<input type="submit" class="btn btnblue" value="Đăng nhập"/>
			<div class="remember">
				<label for="ckremember">
					<input type="checkbox" value="" name="ckremember" id="ckremember"/>
					Ghi nhớ tài khoản
				</label>
			</div>
			<a href="#" class="btn btnfb">Đăng nhập với tài khoản Facebook</a>
			<a href="#" class="btn btngp">Đăng nhập với tài khoản Google +</a>

			<a href="javascript:void(0);" class="createAccount" onclick="SiteMain.openPopup('#registerDialog')">Tạo tài khoản</a>
		</form>
	</div>
</div>