<footer id="footer" class="footer-wrapper">
    <section class="section" id="section_1249617831">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row row-collapse row-full-width" id="row-1306712625">
                <div id="col-1573686651" class="col small-12 large-12">
                    <div class="col-inner">
                        <div class="banner has-hover" id="banner-523784734">
                            <div class="banner-inner fill">
                                <div class="banner-bg fill">
                                    <div class="bg fill bg-fill "></div>
                                </div>
                                <div class="banner-layers container">
                                    <div class="fill banner-link"></div>
                                    <div id="text-box-107658465" class="text-box banner-layer hide-for-small x5 md-x5 lg-x5 y35 md-y35 lg-y35 res-text">
                                        <div class="text ">
                                            <div class="text-inner text-left">
                                                <div class="row row-small align-middle" id="row-700030296">
                                                    <div id="col-1743079553" class="col medium-7 small-12 large-7">
                                                        <div class="col-inner text-left">
                                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_71729310">
                                                                <div class="img-inner dark">
                                                                    <img style="height: 140px; width: auto" src="/client/images/logo-cao-2.png" class="attachment-large size-large" alt >
                                                                </div>
                                                            </div>
                                                            <div class="searchform-wrapper ux-search-box relative hide-for-small form-flat is-small"><form method="get" class="searchform" action="https://caokidsplay.com/en/" role="search">
                                                                    <div class="flex-row relative">
                                                                        <div class="flex-col flex-grow">
                                                                            <input type="search" class="search-field mb-0" name="s" value id="s" placeholder="Tìm kiếm...">
                                                                        </div>
                                                                        <div class="flex-col">
                                                                            <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                                                <i class="icon-search"></i>				</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="live-search-results text-left z-top"></div>
                                                                </form>
                                                            </div>
                                                            <p>
                                                                <strong>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ BIYOKI</strong>
                                                            </p>
                                                            <p>Địa chỉ: Số 304 Minh Phụng, Phường 2, Quận 11, Thành phố Hồ Chí Minh, Việt Nam</p>
                                                            <p>Điện thoại: <a href="tel:(028) 668 456 28">(028) 668 456 28</a> </p>
                                                            <p>Gmail: <a href="">biyoki.fk@gmail.com </a></p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="text-box-707150535" class="text-box banner-layer chili-footer-element_mobile show-for-small x5 md-x5 lg-x5 y50 md-y50 lg-y50 res-text">
                                        <div class="text ">
                                            <div class="text-inner text-left">
                                                <p>
                                                    <strong>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ BIYOKI</strong>
                                                </p>
                                                <p>Địa chỉ: Số 304 Minh Phụng, Phường 2, Quận 11, Thành phố Hồ Chí Minh, Việt Nam</p>
                                                <p>Điện thoại: <a href="tel:(028) 668 456 28">(028) 668 456 28</a> </p>
                                                <p>Gmail: <a href="">biyoki.fk@gmail.com </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="absolute-footer dark medium-text-center small-text-center">
        <div class="container clearfix">
            <div class="footer-primary pull-left">
                <div class="copyright-footer">
                    Copyright 2022 © <strong>UX Themes</strong>      </div>
            </div>
        </div>
    </div>
    <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up"></i></a>

</footer>


<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase">

            @foreach($categories as $category)
                @if($loop->last)
                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="{{route('book')}}">Đặt lịch</a>
                    </li>
                @endif
                <li class="menu-item menu-item-type-post_type menu-item-object-page @if(count($category->children))  menu-item-has-children @endif">
                    <a  href="{{$category->linkPage()}}" >
                        {{$category->title}}
                    </a>
                    @if(count($category->children))
                        <ul class="sub-menu nav-sidebar-ul">
                            @foreach($category->children as $child)
                                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                    <a href="{{$child->linkPage()}}">{{$child->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>

            @endforeach

            </ul>
    </div>
</div>
