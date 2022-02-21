<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ url('admin/dashboard') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('admin.Dashboard') }}</span></a>
        </li>

        @if (Auth()->guard('admin')->user()->is_super == 1 or Auth()->guard('admin')->user()->is_super === 'admin_restaurant')

            <li class=" nav-item"><a href="#"><i class="fas fa-utensils"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">{{ __('admin.All Restaurants') }}</span></a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{ route('admin.all_restaurants.show') }}" data-i18n="nav.vertical_nav.vertical_nav_fixed">{{ __('admin.All Restaurants') }}</a>
                  </li>

                  @if (Auth()->guard('admin')->user()->is_super == 1)
                    <li><a class="menu-item" href="{{ url('admin/bg_sections_Restaurant') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.bg_section') }} </a>
                    </li>
                @endif
                </ul>
              </li>
        @endif

        @if (Auth()->guard('admin')->user()->is_super == 1 )
            <li class=" navigation-header">
            <span data-i18n="nav.category.layouts">{{ __('admin.Layouts') }}</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">{{ __('admin.Homepage layouts') }}</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ url('admin/HeaderHome') }}" data-i18n="nav.page_layouts.1_column">{{ __('admin.Header Home') }}</a>
                </li>
                <li><a class="menu-item" href="{{ url('admin/AboutHome') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.About us Home') }}</a>
                </li>

                <li><a class="menu-item" href="{{ url('admin/ServicesHome') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.Home ( Services Amaleed )') }}</a>
                </li>

                <li><a class="menu-item" href="{{ url('admin/DepartmentsHome') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.Home (Amalid departments)') }}</a>
                </li>

                <li><a class="menu-item" href="{{ url('admin/ProposalsAmaleedHome') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.Home ( Proposals Amaleed )') }}</a>
                </li>

                <li><a class="menu-item" href="{{ url('admin/GalleryHome') }}" data-i18n="nav.page_layouts.2_columns"> {{ __('admin.Home ( Gallery  )') }}</a>
                </li>

                <li><a class="menu-item" href="{{ url('admin/PartnersHome') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.Home ( Work Partners )') }} </a>
                </li>

                <li><a class="menu-item" href="{{ url('admin/ContactUsHome') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.Home ( Contact Us )') }} </a>
                </li>

                <li><a class="menu-item" href="{{ url('admin/bg_sections_HomePage') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.bg_section') }} </a>
                </li>


            </ul>
            </li>
        @endif

        @if (Auth()->guard('admin')->user()->is_super == 1 or Auth()->guard('admin')->user()->is_super === 'admin_fitness')
            <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">{{ __('admin.Fitness Room') }}</span></a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{ route('admin.Fitness_Room') }}" data-i18n="nav.vertical_nav.vertical_nav_fixed">{{ __('admin.Fitness Room') }}</a>
                  </li>
                  <li><a class="menu-item" href="{{ url('admin/bg_sections_Fitness_Room') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.bg_section') }} </a>
                  </li>
                </ul>
              </li>
        @endif

        @if (Auth()->guard('admin')->user()->is_super == 1 or Auth()->guard('admin')->user()->is_super === 'admin_parking')
            <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">{{ __('admin.parking') }}</span></a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{ route('admin.Parking') }}" data-i18n="nav.vertical_nav.vertical_nav_fixed">{{ __('admin.parking') }}</a>
                  </li>
                  <li><a class="menu-item" href="{{ url('admin/bg_sections_Parking') }}" data-i18n="nav.page_layouts.2_columns">{{ __('admin.bg_section') }} </a>
                  </li>
                </ul>
              </li>
        @endif

        @if (Auth()->guard('admin')->user()->is_super == 1 )
            <li class=" nav-item">
                <a href="{{ route('admin.all_Admins') }}">
                    <i class="la la-navicon"></i>
                    <span class="menu-title" data-i18n="nav.navbars.main">
                        {{ __('admin.All Admins') }}
                    </span>
                </a>
            </li>
        @endif


        <li class=" nav-item"><a href="#"><i class="la la-eye"></i><span class="menu-title" data-i18n="nav.icons.main">{{ __('admin.Icons') }}</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('admin.icons.Feather_incon') }}" data-i18n="nav.icons.icons_feather">{{ __('admin.Icons') }} Feather</a>
                </li>
                <li><a class="menu-item" href="{{ route('admin.icons.Line_Awesome') }}" data-i18n="nav.icons.icons_line_awesome">{{ __('admin.Icons') }} Line Awesome</a>
                </li>
                <li><a class="menu-item" href="{{ route('admin.icons.Meteocons') }}" data-i18n="nav.icons.icons_meteocons">{{ __('admin.Icons') }} Meteocons</a>
                </li>
                <li><a class="menu-item" href="{{ route('admin.icons.Simple_Line_Icons') }}" data-i18n="nav.icons.icons_linecons">{{ __('admin.Icons') }} Simple Line</a>
                </li>
            </ul>
        </li>

        {{-- <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="vertical-nav-fixed.html" data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</a>
            </li>
            <li><a class="menu-item" href="vertical-nav-static.html" data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</a>
          </ul>
        </li> --}}


      </ul>
    </div>
  </div>
