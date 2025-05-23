<div id="modal-banner" class="modal-banner" style="display:none;" data-delay="5000">
	<div class="modalbanner-overlay fancybox-overlay fancybox-overlay-fixed"></div>
	<div class="modal-banner-promo">
		<div class="modal-body" >

			<form>
				<a href="{{popupads()->url ?? '#'}}" title="{{popupads()->name ?? ''}}" class="banner-promotion" data-section="banner_popup">
					{{-- <script type="text/x-custom-template" data-template="banner_popup"> --}}
						<img width="600" height="600" alt="{{popupads()->name ?? ''}}" src="{{asset('/images/'. popupads()->image ?? '/images/popup_banner.jpg')}}" />
					{{-- </script> --}}
				</a>
				<div class="check-close">
					<input type="checkbox" id="check-close-banner" name="vehicle1" value="Bike">
					<label for="check-close-banner">Không hiển thị hôm nay</label>
				</div>
				<a title="Đóng" class="modalbanner-close close-window" href="javascript:;">
					<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10"><path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path></svg>
				</a>
			</form>

		</div>
	</div>
</div>

<script>
	$(document).ready(function($) {
		var modalPopup = $('.modal-banner');
		var close = $('.modalbanner-close');
		var checkBox = $('#check-close-banner');
		var banner = $('#modal-banner .banner-promotion');

		function hidePopup() {
			modalPopup.hide();
		}

		function isPopupClosed() {
			// Kiểm tra xem cookie hoặc localStorage có thông tin ngày giống với ngày hiện tại hay không
			var storedDate = localStorage.getItem('popupClosedDate');
			if (storedDate) {
				var currentDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Ho_Chi_Minh" });
				return storedDate === currentDate;
			}
			return false;
		}

		$(document).on('click', '#modal-banner .modalbanner-overlay, .fancybox-overlay', function(e) {
			hidePopup();
			if (checkBox.prop('checked')) {
				// Lưu ngày hiện tại vào localStorage
				var currentDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Ho_Chi_Minh" });
				localStorage.setItem('popupClosedDate', currentDate);
			}
		});

		close.click(function() {
			hidePopup();
			if (checkBox.prop('checked')) {
				// Lưu ngày hiện tại vào localStorage
				var currentDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Ho_Chi_Minh" });
				localStorage.setItem('popupClosedDate', currentDate);
			}
		});

		banner.click(function() {
			// Lưu ngày hiện tại vào localStorage
			var currentDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Ho_Chi_Minh" });
			localStorage.setItem('popupClosedDate', currentDate);
		});

		if (!isPopupClosed()) {
			var delayTime = $('#modal-banner').data('delay') || 3000;
			setTimeout(function() {
				var section = $('#modal-banner .banner-promotion');
				var template = $('script[data-template="banner_popup"]').html();
				if(template) {
					$('.banner-promotion[data-section="banner_popup"]').html(template);
					var banner = $('#modal-banner .banner-promotion');
					banner.click(function() {
						// Lưu ngày hiện tại vào localStorage
						var currentDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Ho_Chi_Minh" });
						localStorage.setItem('popupClosedDate', currentDate);
					});
				}
				modalPopup.show();
			}, delayTime);
		}
	});
</script>
