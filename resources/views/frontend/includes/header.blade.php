<div id="header">
    <div class="menu_logo">
        <div class="menu_holder">
            <a id="logotype" class="li_logo" href="{{ url('/') }}" title="Consumer Link"><img
                    src="{{ asset('img/logo.png') }}" alt="Consumer Link" /></a>
            <ul class="header_menu">
                <li id="menu-item-70" class="menu-item menu-item-type-post_type @if (Route::is('home')) current-menu-item @endif menu-item-object-page menu-item-70">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li id="menu-item-411"
                    class="menu-item menu-item-type-post_type menu-item-object-page @if (Route::is('about')) current-menu-item @endif page_item page-item-314 current_page_item menu-item-has-children menu-item-411">
                    <a href="{{ route('about') }}">
                        About Us
                    </a>
                    <ul class="sub-menu">
                        <li id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482">
                            <a href="{{ route('mission') }}">
                                Mission &#038; Vision
                            </a>
                        </li>
                        <li id="menu-item-481" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-481"><a
                                href="{{ route('team') }}">
                                The Team
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="menu-item-418"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-418 @if (Route::is('billboards')) current-menu-item @endif">
                    <a href="{{ route('billboards') }}">Billboards</a>
                </li>
                <li id="menu-item-423" class="menu-item menu-item-type-post_type @if (Route::is('suburban.signs')) current-menu-item @endif menu-item-object-page menu-item-423"><a
                        href="{{ route('suburban.signs') }}">Suburban
                        signs</a></li>
                <li id="menu-item-432" class="menu-item menu-item-type-post_type @if (Route::is('bridge.signs')) current-menu-item @endif menu-item-object-page menu-item-432"><a
                        href="{{ route('bridge.signs') }}">Bridge
                        Signs</a></li>
                <li id="menu-item-525" class="menu-item menu-item-type-post_type menu-item-object-page @if (Route::is('our.clients')) current-menu-item @endif menu-item-525"><a
                        href="{{ route('our.clients') }}">Our
                        Clients</a></li>
                <li id="menu-item-442" class="menu-item menu-item-type-post_type  @if (Route::is('portfolio')) current-menu-item @endif  menu-item-object-page menu-item-442"><a
                        href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li id="menu-item-419" class="menu-item menu-item-type-post_type @if (Route::is('contact.us')) current-menu-item @endif menu-item-object-page menu-item-419"><a
                        href="{{ route('contact.us') }}">Contact
                        Us</a></li>
            </ul>
            <div class="wpb_clear"></div>
            <!-- end of megamenu -->
        </div>
    </div>
    <div id="social_icons">
        <a id="search_ico" class="tooltip" href="#" title="Search">
            <img src="{{ asset('img/search.png') }}" alt="" />
        </a>
    </div>
    <form role="search" method="get" id="searchform" class="searchform" action="#">
        <div>
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" value="" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="Search" />
        </div>
    </form>
</div> <!-- end #header -->
