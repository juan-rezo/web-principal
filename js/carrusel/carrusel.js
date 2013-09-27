$(function() {
				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					auto: false,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					mousewheel: true,
					scroll:3,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
			});