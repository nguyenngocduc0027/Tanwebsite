<div id="list-favorite" class="d-none">
    <div class="list-favorite-right container" data-type="wishlist">
        <div class="list-favorite-main">
            <div class="list-favorite-list row">
            </div>
        </div>
    </div>
</div>
<script>
    var favoriSudes = {};
    favoriSudes.General = {
        init: function() {
            favoriSudes.Wishlist.init();
        },
    }
    favoriSudes.Wishlist = {
        init: function() {
            this.setWishlistProductLoop();
            favoriSudes.Wishlist.wishlistProduct();
        },
        setWishlistProductLoop: function() {
            $('body').on('click', '.remove-wishlist', function(e) {
                favoriSudes.Wishlist.removeWishlist($(this).attr('data-wish'));
                theme.alert.new('Xóa khỏi danh sách yêu thích', 'Sản phẩm của bạn đã xóa khỏi sách yêu thích thành công.', 3000, 'alert-primary');
            })
            $('body').on('click', '.setWishlist', function(e) {
                e.preventDefault();
                if ($(this).hasClass('active')) {
                    favoriSudes.Wishlist.removeWishlist($(this).attr('data-wish'));
                    theme.alert.new('Xóa khỏi danh sách yêu thích', 'Sản phẩm của bạn đã xóa khỏi sách yêu thích thành công.', 3000, 'alert-primary');
                } else {
                    theme.alert.new('Thêm vào danh sách yêu thích', 'Sản phẩm của bạn đã thêm vào danh sách yêu thích thành công.', 3000, 'alert-success');
                    var phand = [];
                    var handle = $(this).attr('data-wish');
                    if (document.cookie.indexOf('sudes_wishlist_products') !== -1) {
                        var las = Cookies.getJSON('sudes_wishlist_products');
                        if ($.inArray(handle, las) === -1) {
                            phand = [handle];
                            for (var i = 0; i < las.length; i++) {
                                phand.push(las[i]);
                                if (phand.length > 100) {
                                    break;
                                }
                            }
                            Cookies.set('sudes_wishlist_products', phand, {
                                expires: 15,
                                sameSite: 'None',
                                secure: true
                            });
                        }
                    } else {
                        phand = [handle];
                        Cookies.set('sudes_wishlist_products', phand, {
                            expires: 15,
                            sameSite: 'None',
                            secure: true
                        });
                    }
                    favoriSudes.Wishlist.wishlistProduct();
                }
            })
        },
        wishlistProduct: function() {
            if ($('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').length > 0) {
                if (document.cookie.indexOf('sudes_wishlist_products') !== -1) {
                    $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').html('')
                    var last_wishlist_pro_array = Cookies.getJSON('sudes_wishlist_products');
                    favoriSudes.Wishlist.activityWishlist();
                    var recentview_promises = [];
                    for (var i = 0; i < 100; i++) {
                        if (typeof last_wishlist_pro_array[i] == 'string') {
                            var promise = new Promise(function(resolve, reject) {
                                $.ajax({
                                    url: '/products/' + last_wishlist_pro_array[i] + '?view=favorite',
                                    async: false,
                                    success: function(product) {
                                        resolve({
                                            error: false,
                                            data: product
                                        });
                                    },
                                    error: function(err) {
                                        if (err.status === 404) {
                                            try {
                                                var u = ((this.url.split('?'))[0]).replace('products/index.html', '');
                                                resolve({
                                                    error: true,
                                                    handle: u
                                                });
                                            } catch (e) {
                                                resolve({
                                                    error: false,
                                                    data: ''
                                                })
                                            }
                                        } else {
                                            resolve({
                                                error: false,
                                                data: ''
                                            });
                                        }
                                        favoriSudes.Wishlist.removeWishlist(last_wishlist_pro_array[i])
                                    }
                                })
                            });
                            recentview_promises.push(promise);
                        }
                    }
                    Promise.all(recentview_promises).then(function(values) {
                        if (values.length > 0) {
                            var x = [];
                            setTimeout(function() {
                                $('.js-wishlist-count').html(values.length)
                            }, 500)
                            $.each(values, function(i, v) {
                                if (v.error) {
                                    x.push(v.handle);
                                } else {

                                    awe_lazyloadImage();
                                }
                            });
                            if (x.length > 0) {
                                var new_last_viewed_pro_array = [];
                                $.each(last_wishlist_pro_array, function(i, v) {
                                    if ($.inArray(v, x) === -1) {
                                        new_last_viewed_pro_array.push(v);
                                    }
                                })
                                if (new_last_viewed_pro_array.length > 0) {
                                    Cookies.set('last_viewed_products', new_last_viewed_pro_array, {
                                        expires: 180,
                                        sameSite: 'None',
                                        secure: true
                                    });
                                }
                            }
                        } else {
                            $('.js-wishlist-count').html('0')
                            $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').append('<div class="list-favorite-main-top-error col-lg-12 col-md-12 col-sm-12 col-12"><div class="alert alert-warning">Bạn chưa có sản phẩm yêu thích nào!</div></div>')
                        }
                    });
                } else {
                    $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').append('<div class="list-favorite-main-top-error col-lg-12 col-md-12 col-sm-12 col-12"><div class="alert alert-warning">Bạn chưa có sản phẩm yêu thích nào! </div></div>')
                }
            } else {
                $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').append('<div class="list-favorite-right-main-top-error col-lg-12 col-md-12 col-sm-12 col-12"><div class="alert alert-warning">Bạn chưa có sản phẩm yêu thích nào! </div></div>')
            }
        },
        activityWishlist: function() {
            var last_wishlist_pro_array = Cookies.getJSON('sudes_wishlist_products');
            $.each(last_wishlist_pro_array, function(i, v) {
                $('.setWishlist[data-wish="' + v + '"]').html('<img class="img-unlike" width="25" height="25" src="https://bizweb.dktcdn.net/100/506/650/files/heartadd-1.png?v=1704084436307" alt="Bỏ yêu thích">Bỏ yêu thích</div>').addClass('active').attr('title', 'Bỏ yêu thích');
            })
        },
        removeWishlist: function(handle) {
            var phand = [];

            $('a[data-wish="' + handle + '"]').html('<img width="25" height="25" src="https://bizweb.dktcdn.net/100/451/884/themes/857425/assets/heart.png?1650269474235" alt="Thêm vào yêu thích">Thêm vào yêu thích</div>').removeClass('active').attr('title', 'Thêm vào yêu thích');
            if (document.cookie.indexOf('sudes_wishlist_products') !== -1) {
                var las = Cookies.getJSON('sudes_wishlist_products');
                var flagIndex = $.inArray(handle, las);
                las.splice(flagIndex, 1)
                Cookies.set('sudes_wishlist_products', las, {
                    expires: 15,
                    sameSite: 'None',
                    secure: true
                });
            } else {
                phand = [handle];
                Cookies.set('sudes_wishlist_products', phand, {
                    expires: 15,
                    sameSite: 'None',
                    secure: true
                });
            }
            favoriSudes.Wishlist.wishlistProduct(3, 5);
        }
    }
    favoriSudes.Wishlist.init();
</script>
