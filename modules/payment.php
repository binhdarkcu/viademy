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
					<div class="col col1">Tổng cộng: </div>
					<div class="col col2"></div>
					<div class="col col3 total">800.000đ</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="tbpayment">
				<div class="tbhead">
					<div class="col col1 bold">Thanh toán </div>
				</div>
				<div class="tbhead">
					<div class="col payment-way col1">
						<input class="visa-code" type="text">
						<input class="date" type="text" placeholder="mm/yy">
						<input class="ccv" type="text">
					</div>
					<div class="col payment-way col2">
						<input id="visa" type="radio" name="visaoption">
					</div>
					<div class="clear"></div>
				</div>
				<div class="tbhead">
					<div class="col payment-way col1">
						<input class="paypal-code" type="text">
					</div>
					<div class="col payment-way col2">
						<input id="paypal" type="radio" name="paypaloption">
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<a href="#" class="btn btnblue">Thanh toán</a>
		</div>
	</div>
</section>