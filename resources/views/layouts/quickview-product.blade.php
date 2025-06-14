<div id="quick-view-product" class="quickview-product" style="display:none;">
	<div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
	<div class="quick-view-product"></div>
	<div id="quickview-modal" style="display:none;">
		<div class="block-quickview primary_block details-product">
			<div class="row">
				<div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-5">
					<div class="image-block large-image col_large_default">
						<span class="view_full_size">
							<a class="img-product" title="Ảnh sản phẩm" href="javascript:;">
								<img src="../bizweb.dktcdn.net/100/506/650/themes/944598/assets/logod27c.png?1739018973665" id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" alt="quickview"  />
							</a>
						</span>
						<div class="loading-imgquickview" style="display:none;"></div>
					</div>
					<div class="more-view-wrapper clearfix">
						<div class="thumbs_quickview owl_nav_custome1 swiper-container" id="thumbs_list_quickview">
							<ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper" id="thumblist_quickview"></ul>
							<div class="swiper-button-prev">
							</div>
							<div class="swiper-button-next">
							</div>
						</div>
					</div>
				</div>
				<div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-7 details-pro style_product style_border">
					<div class="box-product-info">
						<div class="head-qv group-status">
							<h3 class="qwp-name title-product">abc</h3>
							<div class="vend-qv group-status">
								<div class="left_vend">
									<div class="first_status ">Thương hiệu:
										<span class="vendor_ status_name"></span>
									</div>
									<span class="line_tt">|</span>
									<div class="top_sku first_status">Mã sản phẩm:
										<span class="sku_ status_name"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="quickview-info">
							<span class="prices price-box">
								<span class="price product-price"></span>
								<del class="old-price"></del>
							</span>
						</div>

						<div class="product-description product-summary">
							<div class="rte">

							</div>
						</div>

						<form action="https://sudes-nest.mysapo.net/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart form-product">
							<span class="price-product-detail d-none" style="opacity: 0;">
								<span class=""></span>
							</span>
							<select name='variantId' class="d-none" style="display:none"></select>
							<div class="form_product_content">
								<div class="count_btn_style quantity_wanted_p">
									<div class=" soluong1 clearfix">
										<div class="input_number_product">
											<a class="btn_num num_1 button button_qty" href="javascript:;" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">-</a>
											<input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
											<a class="btn_num num_2 button button_qty" href="javascript:;" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
										</div>
									</div>
									<div class="button_actions clearfix">
										<button type="submit" class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail btn btn-primary">
											<span class="btn-content text_1">Thêm vào giỏ hàng</span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		<a title="Close" class="quickview-close close-window" href="javascript:;">
			<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10"><path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path></svg>
		</a>
	</div>
</div>
<script type="text/javascript">
	Bizweb.doNotTriggerClickOnThumb = false;
	function changeImageQuickView(img, selector) {
		var src = $(img).attr("src");
		src = src.replace("_compact", "");
		$(selector).attr("src", src);
	}
	function validate(evt) {
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode( key );
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		}
	}
	var selectCallbackQuickView = function(variant, selector) {
		$('#quick-view-product form').show();
		var productItem = jQuery('.quick-view-product .product-item'),
			addToCart = productItem.find('.add_to_cart_detail'),
			productPrice = productItem.find('.price'),
			comparePrice = productItem.find('.old-price'),
			form2 = jQuery('.soluong1'),
			status = productItem.find('.soluong'),
			sku = productItem.find('.sku_'),
			totalPrice = productItem.find('.total-price span');

		if(variant && variant.sku ){
			sku.text(variant.sku);
		}else{
			sku.text('Đang cập nhật');
		}
		if (variant && variant.available) {

			var form = jQuery('#' + selector.domIdPrefix).closest('form');
			for (var i=0,length=variant.options.length; i<length; i++) {
				var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');

			}
			addToCart.removeClass('disabled').removeAttr('disabled');
			addToCart.html('<span class="btn-content text_1">Thêm vào giỏ hàng</span>').removeAttr('disabled');
			status.text('Còn hàng');
			if(variant.price < 1){
				$("#quick-view-product .price").html('Liên hệ');
				$("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
				$("#quick-view-product .prices .old-price").hide();
				form2.hide();
			}else{
				productPrice.html(Bizweb.formatMoney(variant.price, "1000000₫"));
													 if ( variant.compare_at_price > variant.price ) {
								  comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "1000000₫")).show();
								  productPrice.addClass('on-sale');
			} else {
				comparePrice.hide();
				productPrice.removeClass('on-sale');
			}

			$(".quantity_wanted_p").show();
			$(".input_qty_qv_").show();
			form2.show();
		}

		updatePricingQuickView();

							/*begin variant image*/
							if (variant && variant.featured_image) {

			var originalImage = $("#product-featured-image-quickview");
			var newImage = variant.featured_image;
			var element = originalImage[0];
			Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
				$('#thumblist_quickview img').each(function() {
					var parentThumbImg = $(this).parent();
					var productImage = $(this).parent().data("image");
					if (newImageSizedSrc.includes(productImage)) {
						$(this).parent().trigger('click');
						return false;
					}
				});

			});
			$('#product-featured-image-quickview').attr('src',variant.featured_image.src);
		}
	} else {
		addToCart.addClass('disabled').attr('disabled', 'disabled');
		addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
		status.text('Hết hàng');
		$(".quantity_wanted_p").show();
		if(variant){
			if(variant.price < 1){
				$("#quick-view-product .price").html('Liên hệ');
				$("#quick-view-product del").hide();
				$("#quick-view-product .quantity_wanted_p").hide();
				$("#quick-view-product .prices .old-price").hide();
				form2.hide();
				comparePrice.hide();
				productPrice.removeClass('on-sale');
				addToCart.addClass('disabled').attr('disabled', 'disabled');
				addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
			}else{
				if ( variant.compare_at_price > variant.price ) {
					comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "1000000₫")).show();
														 productPrice.addClass('on-sale');
									  } else {
									  comparePrice.hide();
					productPrice.removeClass('on-sale');
					$("#quick-view-product .prices .old-price").html('');
				}
				$("#quick-view-product .price").html(Bizweb.formatMoney(variant.price, "1000000₫"));
																		$("#quick-view-product del ").hide();
													 $("#quick-view-product .prices .old-price").show();
				$(".input_qty_qv_").hide();
				form2.hide();
				addToCart.addClass('disabled').attr('disabled', 'disabled');
				addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
			}
		}else{
			$("#quick-view-product .price").html('Liên hệ');
			$("#quick-view-product del").hide();
			$("#quick-view-product .quantity_wanted_p").hide();
			$("#quick-view-product .prices .old-price").hide();
			form2.hide();
			comparePrice.hide();
			productPrice.removeClass('on-sale');
			addToCart.addClass('disabled').attr('disabled', 'disabled');
			addToCart.removeClass('d-none').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
		}
	}
	/*begin variant image*/
	if (variant && variant.featured_image) {

		var originalImage = $("#product-featured-image-quickview");
		var newImage = variant.featured_image;
		var element = originalImage[0];
		Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
			$('#thumblist_quickview img').each(function() {
				var parentThumbImg = $(this).parent();
				var productImage = $(this).parent().data("image");
				if (newImageSizedSrc.includes(productImage)) {
					$(this).parent().trigger('click');
					return false;
				}
			});

		});
		$('#product-featured-image-quickview').attr('src',variant.featured_image.src);
	}
	};

</script>
