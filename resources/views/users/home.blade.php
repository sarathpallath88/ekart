<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Ekart | The complete onlinestore</title>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <div class="super_container">

        <!-- Header -->
        @include('users.template.header')
        <!-- Header -->



        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="row p-2 bg-white border rounded">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/QpjAiHq.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant olap shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to Cart</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/JvPeqEF.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$14.99</h4><span class="strike-text">$20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to Cart</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/Bf4dIaN.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant ruybi shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>123</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to Cart</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/HO8e9b8.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant tinor shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>110</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">$15.99</h4><span class="strike-text">$21.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to Cart</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid"> <output class="bg-white shadow-sm">
                <footer class="section-footer border-top">
                    <div class="container-fluid">
                        <section class="footer-top padding-y">
                            <div class="row">
                                <aside class="col-md-4">
                                    <article class="mr-3"> <img src="https://i.imgur.com/S5Zdt8L.png" class="logo-footer">
                                        <p class="mt-3 description">Some short text about company like You might remember the Dell computer commercials in which a youth reports this exciting news to his friends.</p>
                                        <div> <a class="btn btn-icon btn-light" title="Facebook" target="_blank" href="#" data-abc="true"><i class="fab fa-facebook-f"></i></a> <a class="btn btn-icon btn-light" title="Instagram" target="_blank" href="#" data-abc="true"><i class="fab fa-instagram"></i></a> <a class="btn btn-icon btn-light" title="Youtube" target="_blank" href="#" data-abc="true"><i class="fab fa-youtube"></i></a> <a class="btn btn-icon btn-light" title="Twitter" target="_blank" href="#" data-abc="true"><i class="fab fa-twitter"></i></a> </div>
                                    </article>
                                </aside>
                                <aside class="col-sm-3 col-md-2">
                                    <h6 class="title">About</h6>
                                    <ul class="list-unstyled">
                                        <li> <a href="#" data-abc="true">About us</a></li>
                                        <li> <a href="#" data-abc="true">Services</a></li>
                                        <li> <a href="#" data-abc="true">Terms & Condition</a></li>
                                        <li> <a href="#" data-abc="true">Our Blogs</a></li>
                                    </ul>
                                </aside>
                                <aside class="col-sm-3 col-md-2">
                                    <h6 class="title">Services</h6>
                                    <ul class="list-unstyled">
                                        <li> <a href="#" data-abc="true">Help center</a></li>
                                        <li> <a href="#" data-abc="true">Money refund</a></li>
                                        <li> <a href="#" data-abc="true">Terms and Policy</a></li>
                                        <li> <a href="#" data-abc="true">Open dispute</a></li>
                                    </ul>
                                </aside>
                                <aside class="col-sm-3 col-md-2">
                                    <h6 class="title">For users</h6>
                                    <ul class="list-unstyled">
                                        <li> <a href="#" data-abc="true"> User Login </a></li>
                                        <li> <a href="#" data-abc="true"> User register </a></li>
                                        <li> <a href="#" data-abc="true"> Account Setting </a></li>
                                        <li> <a href="#" data-abc="true"> My Orders </a></li>
                                    </ul>
                                </aside>
                                <aside class="col-sm-2 col-md-2">
                                    <h6 class="title">Our app</h6> <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://i.imgur.com/nkZP7fe.png" height="40"></a> <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://i.imgur.com/47q2YGt.png" height="40" width="123"></a>
                                </aside>
                            </div>
                        </section>
                        <section class="footer-copyright border-top">
                            <p class="float-left text-muted"> &copy; 2019 Talkdesk All rights resetved </p>
                            <p target="_blank" class="float-right text-muted"> <a href="#" data-abc="true">Privacy &amp; Cookies</a> &nbsp; &nbsp; <a href="#" data-abc="true">Accessibility</a> </p>
                        </section>
                    </div>
                </footer>
            </output> </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            "use strict";

            var menuActive = false;
            var header = $('.header');
            setHeader();
            initCustomDropdown();
            initPageMenu();

            function setHeader() {

                if (window.innerWidth > 991 && menuActive) {
                    closeMenu();
                }
            }

            function initCustomDropdown() {
                if ($('.custom_dropdown_placeholder').length && $('.custom_list').length) {
                    var placeholder = $('.custom_dropdown_placeholder');
                    var list = $('.custom_list');
                }

                placeholder.on('click', function(ev) {
                    if (list.hasClass('active')) {
                        list.removeClass('active');
                    } else {
                        list.addClass('active');
                    }

                    $(document).one('click', function closeForm(e) {
                        if ($(e.target).hasClass('clc')) {
                            $(document).one('click', closeForm);
                        } else {
                            list.removeClass('active');
                        }
                    });

                });

                $('.custom_list a').on('click', function(ev) {
                    ev.preventDefault();
                    var index = $(this).parent().index();

                    placeholder.text($(this).text()).css('opacity', '1');

                    if (list.hasClass('active')) {
                        list.removeClass('active');
                    } else {
                        list.addClass('active');
                    }
                });


                $('select').on('change', function(e) {
                    placeholder.text(this.value);

                    $(this).animate({
                        width: placeholder.width() + 'px'
                    });
                });
            }

            /*

            4. Init Page Menu

            */

            function initPageMenu() {
                if ($('.page_menu').length && $('.page_menu_content').length) {
                    var menu = $('.page_menu');
                    var menuContent = $('.page_menu_content');
                    var menuTrigger = $('.menu_trigger');

                    //Open / close page menu
                    menuTrigger.on('click', function() {
                        if (!menuActive) {
                            openMenu();
                        } else {
                            closeMenu();
                        }
                    });

                    //Handle page menu
                    if ($('.page_menu_item').length) {
                        var items = $('.page_menu_item');
                        items.each(function() {
                            var item = $(this);
                            if (item.hasClass("has-children")) {
                                item.on('click', function(evt) {
                                    evt.preventDefault();
                                    evt.stopPropagation();
                                    var subItem = item.find('> ul');
                                    if (subItem.hasClass('active')) {
                                        subItem.toggleClass('active');
                                        TweenMax.to(subItem, 0.3, {
                                            height: 0
                                        });
                                    } else {
                                        subItem.toggleClass('active');
                                        TweenMax.set(subItem, {
                                            height: "auto"
                                        });
                                        TweenMax.from(subItem, 0.3, {
                                            height: 0
                                        });
                                    }
                                });
                            }
                        });
                    }
                }
            }

            function openMenu() {
                var menu = $('.page_menu');
                var menuContent = $('.page_menu_content');
                TweenMax.set(menuContent, {
                    height: "auto"
                });
                TweenMax.from(menuContent, 0.3, {
                    height: 0
                });
                menuActive = true;
            }

            function closeMenu() {
                var menu = $('.page_menu');
                var menuContent = $('.page_menu_content');
                TweenMax.to(menuContent, 0.3, {
                    height: 0
                });
                menuActive = false;
            }


        });
    </script>
</body>

</html>
