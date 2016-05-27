
<section class="profile padtop65 setpayment">
	<div class="container">
		<?php include('profile/menu.php');?>
		
		<div class="profileRight">
			<form method="" action="" class="ccjs-card">
				<span class="subtitle">Phương thức thanh toán</span>
				
				<div class="clear"></div>
				<label id="visa" class="lb">
					<input type="radio" value="" name="setpayment"/>
					<img src="images/visa.png" alt=""/>
					<div class="number">
						<label class="ccjs-number">
				          <input type="text" name="cc-number" placeholder="••••   ••••   ••••   ••••" class="ccjs-number"/>
				        </label>
					</div>
					
					<input name="expire" type="text" value="" class="expire"/>
				</label>
				<label id="paypal" class="lb">
					<input type="radio" value="" name="setpayment"/>
					<img src="images/paypal.png" alt=""/>
					<input name="payemail" type="text" value="" class="payemail"/>
				</label>
				<input type="submit" value="Thêm hình thức thanh toán" class="btn btnblue"/>
			</form>
		</div>
	</div>
</section>
<script src='js/creditcardjs-v0.10.12.min.js'></script>