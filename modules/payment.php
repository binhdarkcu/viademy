<section class="payment">
	<div class="container">
		<div class="row">
			<div class="title">
				<h3 class="alignleft">Thanh toán</h3>
			</div>
			<div class="tablecell">
				<h4 class="alignleft">Hình thức thanh toán</h4>
				<div class="paymentbox">
					<div class="head">
						<h5>&nbsp</h5>
						<h2>100.000đ</h2>
						<span>/ tháng</span>
					</div>
					<div class="upCon">
						<label for="paymonth">
							<input id="paymonth" type="radio" name="payoption"> <span>Thanh toán một tháng</span>
						</label>
					</div>
				</div>
				<div class="paymentbox last">
					<div class="head">
						<h5>Ưu đãi</h5>
						<h2>800.000đ</h2>
						<span>/ năm</span>
					</div>
					<div class="upCon">
						<label for="payyear">
							<input id="payyear" type="radio" name="payoption"> <span>Thanh toán một năm</span>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="paymentTable">
	<div class="container">
		<div class="row">
			<div class="tbpayment">
				<div class="tbhead">
					<div class="col col1 total-label">Tổng cộng: </div>
					<div class="col col2 total-value">800.000đ</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="tbpayment">
				<div class="tbhead">
					<div class="col col1 subtitle">Thanh toán </div>
					<div class="clear"></div>
				</div>

				<div class="payment-card">
					<form method="" action="" class="ccjs-card">
						<label id="visa" class="lb">
							<img src="images/visa.png" alt=""/>
							<div class="number">
								<label class="ccjs-number">
						          <input type="text" name="cc-number" placeholder="••••   ••••   ••••   ••••" class="ccjs-number"/>
						        </label>
							</div>
							<input class="expire" type="text" value="" name="expire" placeholder="mm/yy">
							<input class="ccv" type="text" value="" name="ccv">
							<input id="visa" type="radio" value="" name="setpayment"/>
						</label>
						<label id="paypal" class="lb">
							<img src="images/paypal.png" alt=""/>
							<input name="payemail" type="text" value="" class="payemail"/>
							<input id="paypal" type="radio" value="" name="setpayment"/>
						</label>
						<input type="submit" value="Thanh toán" class="btn btnblue"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script src='js/creditcardjs-v0.10.12.min.js'></script>