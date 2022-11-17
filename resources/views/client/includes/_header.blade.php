<header id="header" class="header header-full-width has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="top-bar" class="header-top hide-for-medium">
            <div class="flex-row container wp-social">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small">
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav nav-center nav-small">
                    </ul>
                </div>
                <div class="flex-col hide-for-medium flex-right wp-social">
                    <ul class="nav top-bar-nav nav-right nav-small postion-social">
                        <li class="html header-social-icons ml-0">
                            <div class="social-icons follow-icons">
                                <a href="#" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook"><i class="icon-facebook"></i></a>
                                <a href="#" target="_blank" data-label="Google" rel="noopener noreferrer nofollow" class="icon plain vk tooltip" title="Follow on Google Map"><i class="icon-google-plus"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon plain  youtube tooltip" title="Follow on YouTube"><i class="icon-youtube"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram"><i class="icon-instagram"></i></a>
                            </div>
                        </li>

                        @if (Auth::guest())
                            <li id="menu-item-344-vi" class="lang-item lang-item-3 lang-item-vi lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-344-vi">
                                <a href="{{route('login')}}" class="nav-top-link">Đăng nhập</a>
                            </li>
                            <li id="menu-item-344-en" class="lang-item lang-item-6 lang-item-en current-lang menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-344-en">
                                <a href="{{route('register')}}" class="nav-top-link">Đăng ký</a>
                            </li>
                            @else
                            <li id="menu-item-344-vi" class="lang-item lang-item-3 lang-item-vi lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-344-vi">
                                <a href="#" class="nav-top-link">{{auth()->user()->name}}</a>
                            </li>
                            <li id="menu-item-344-en" class="lang-item lang-item-6 lang-item-en current-lang menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-344-en">
                                <a class="nav-top-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="margin: 0">
                                    @csrf
                                </form>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="/" title="Cáo Kidsplay Solutions" rel="home">
                        <img width="133" height="90" src="/client/images/logo-cao-2.png" class="header_logo header-logo" alt="Cáo Kidsplay Solutions">
                        <img width="133" height="90" src="/client/images/logo-cao-2.png" class="header-logo-dark" alt="Cáo Kidsplay Solutions"></a>
                </div>
                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-size-small nav-uppercase">
                        <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
                            <div class="mega-menu-toggle">
                                <div class="mega-toggle-blocks-left"></div>
                                <div class="mega-toggle-blocks-center"></div>
                                <div class="mega-toggle-blocks-right">
                                    <div class="mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0" id="mega-toggle-block-0">
                                        <button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false">
                                          <span class="mega-toggle-animated-box">
                                            <span class="mega-toggle-animated-inner"></span>
                                          </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="768" data-unbind="true" data-mobile-state="collapse_all" data-hover-intent-timeout="300" data-hover-intent-interval="100">

                                @foreach($categories as $category)
                                    @if($loop->last)
                                            <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-237">
                                                <a class="mega-menu-link" href="{{route('book')}}">Đặt lịch</a>
                                            </li>
                                    @endif
                                    <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-44">
                                        <a class="mega-menu-link" href="{{$category->linkPage()}}" aria-haspopup="true" aria-expanded="false" tabindex="0">
                                            {{$category->title}} @if(count($category->children)) <span class="mega-indicator"></span> @endif
                                        </a>
                                        @if(count($category->children))
                                            <ul class="mega-sub-menu">
                                                @foreach($category->children as $child)
                                                    <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-237">
                                                        <a class="mega-menu-link" href="{{$child->linkPage()}}">{{$child->title}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                </li>

                                @endforeach
                            </ul>
                        </div>
                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
{{--                    <ul class="mobile-nav nav nav-right ">--}}
{{--                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">--}}
{{--                            <a href="#" aria-label="Search" class="is-small"><i class="icon-search"></i></a>--}}
{{--                            <ul class="nav-dropdown nav-dropdown-default">--}}
{{--                                <li class="header-search-form search-form html relative has-icon">--}}
{{--                                    <div class="header-search-form-wrapper">--}}
{{--                                        <div class="searchform-wrapper ux-search-box relative is-normal"><form method="get" class="searchform" action="https://caokidsplay.com/en/" role="search">--}}
{{--                                                <div class="flex-row relative">--}}
{{--                                                    <div class="flex-col flex-grow">--}}
{{--                                                        <input type="search" class="search-field mb-0" name="s" value id="s" placeholder="Tìm kiếm...">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-col">--}}
{{--                                                        <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">--}}
{{--                                                            <i class="icon-search"></i>				</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="live-search-results text-left z-top"></div>--}}
{{--                                            </form>--}}
{{--                                        </div>	</div>--}}
{{--                                </li>	</ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </div>

            </div>

        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
