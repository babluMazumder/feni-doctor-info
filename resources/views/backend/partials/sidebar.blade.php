<div class="quixnav j-custom-style">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">

            @if( hasPermission('dashboard_read'))
            <li> <a href="{{route('dashboard')}}" aria-expanded="true"> <i class="icon-chart"></i> <span class="nav-text">{{___('menus.dashboard') }}</span> </a> </li>
            @endif

            <li class="{{ (request()->is('*user*','*role*')) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="true"> <i class="icon-people"></i> <span class="nav-text">{{___('menus.user_roles')}}</span> </a>
                <ul aria-expanded="false">
                    <li> <a href="{{ route('user.index') }}" class="{{ (request()->is('*user*')) ? 'mm-active' : '' }}">{{___('menus.users')}}</a> </li>
                    <li> <a href="{{ route('role.index') }}" class="{{ (request()->is('*role*')) ? 'mm-active' : '' }}">{{___('menus.roles')}}</a> </li>
                </ul>
            </li>


             <li class="{{ (request()->is('*website-setup*')) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-wrench"></i><span class="nav-text">{{ ___('menus.website_setup') }}</span></a>
                <ul aria-expanded="false">

                    @if (hasPermission('blog_read'))
                        <li> <a href="{{ route('blog.index') }}" class="{{ (request()->is('*website-setup/blogs*')) ? 'mm-active' : '' }}" >{{ ___('label.blogs') }}</a> </li>
                        @endif
                        @if (hasPermission('testimonial_read'))
                        <li> <a href="{{ route('testimonial.index') }}"  class="{{ (request()->is('*website-setup/testimonial*')) ? 'mm-active' : '' }}"  >{{ ___('label.testimonial') }}</a> </li>
                        @endif

                        @if (hasPermission('social_link_read'))
                        <li> <a href="{{ route('socialLink.index') }}"  class="{{ (request()->is('*website-setup/social-link*')) ? 'mm-active' : '' }}"> {{ ___('label.social_link') }} </a> </li>
                        @endif

                        @if (hasPermission('faq_read'))
                        <li> <a href="{{ route('faq.index') }}"  class="{{ (request()->is('*website-setup/faq*')) ? 'mm-active' : '' }}" >{{ ___('label.faqs') }}</a> </li>
                        @endif
                         {{-- @if (hasPermission('section_read')) --}}
                        <li> <a href="{{ route('section.index') }}" class="{{ request()->is('*website-setup/section*') ? 'active' : '' }}">{{ ___('label.sections') }}</a> </li>
                       {{-- @endif --}}

                </ul>
            </li>
             <li class="{{ (request()->is('*hospital*','*bloodbank*','*blooddonor*','*ambulance*')) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-wrench"></i><span class="nav-text">{{ ___('menus.Hospital_info') }}</span></a>
                <ul aria-expanded="false">

                        @if (hasPermission('hospital_read'))
                        <li> <a href="{{ route('hospital.index') }}" class={{ (request()->is('*hospital*')) ? 'mm-active' : '' }}>{{ ___('label.hospitals') }}</a> </li>
                        @endif
                        @if (hasPermission('bloodbank_read'))
                        <li> <a href="{{ route('bloodbank.index') }}" class={{ (request()->is('*bloodbank*')) ? 'mm-active' : '' }} >{{ ___('label.blood_bank') }}</a> </li>
                        @endif

                        @if (hasPermission('blooddonor_read'))
                        <li> <a href="{{ route('blooddonor.index') }}" class={{ (request()->is('*blooddonor*')) ? 'mm-active' : '' }} > {{ ___('label.blood_donor') }} </a> </li>
                        @endif

                        @if (hasPermission('ambulance_read'))
                        <li> <a href="{{ route('ambulance.index') }}" class={{ (request()->is('*ambulance*')) ? 'mm-active' : '' }} >{{ ___('label.ambulance') }}</a> </li>
                        @endif
                        @if (hasPermission('category_read'))
                        <li> <a href="{{ route('category.index') }}" class={{ (request()->is('*category*')) ? 'mm-active' : '' }} >{{ ___('label.category') }}</a> </li>
                        @endif
                        @if (hasPermission('doctor_read'))
                        <li> <a href="{{ route('doctor.index') }}" class={{ (request()->is('*doctor*')) ? 'mm-active' : '' }} >{{ ___('label.doctors') }}</a> </li>
                        @endif

                </ul>
            </li>
             @if (hasPermission('contact_us_read'))
            <li >
                <a class="{{ request()->is('admin/contact-us/*') ? 'active' : '' }}" href="{{ route('contactUs.index') }}" ><i class="icon-envelope"></i><span class="nav-text">{{ ___('menus.contact_us_messages') }}</span></a>
            </li>
            @endif

            <li>
                 <a class="{{ request()->is('admin/appointment/*') ? 'active' : '' }}" href="{{ route('appointments.index') }}" ><i class="icon-envelope"></i><span class="nav-text">{{ ___('menus.Appointments') }}</span></a>

            </li>


            @if(hasPermission('todo_read'))
            <li> <a href="{{ route('todo.index') }}" aria-expanded="true"> <i class="icon-notebook"></i> <span class="nav-text">{{___('menus.todo_list')}}</span> </a> </li>
            @endif

            @if(hasPermission('activity_logs_read'))
            <li> <a href="{{route('activity.logs.index')}}" aria-expanded="true"> <i class="icon-list"></i> <span class="nav-text">{{___('menus.activity_logs')}}</span> </a> </li>
            @endif

            @if(hasPermission('login_activity_read'))
            <li> <a href="{{route('login.activity.index')}}" aria-expanded="false"> <i class="icon-list"></i> <span class="nav-text">{{ ___('menus.login_activity') }}</span> </a> </li>
            @endif

            @if(hasPermission('language_read'))
            <li> <a href="{{route('language.index')}}" aria-expanded="true"> <i class="icon-flag"></i> <span class="nav-text">{{___('menus.language')}}</span> </a> </li>
            @endif

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-wrench"></i><span class="nav-text">{{ ___('menus.settings') }}</span></a>
                <ul aria-expanded="false">

                    @if(hasPermission('general_settings_read'))
                    <li> <a href="{{route('settings.general.index')}}">{{ ___('menus.general_settings') }}</a> </li>
                    @endif

                    @if(hasPermission('mail_settings_read'))
                    <li> <a href="{{route('settings.mail')}}">{{ ___('menus.mail_setting') }}</a> </li>
                    @endif

                    @if(hasPermission('recaptcha_settings_read'))
                    <li> <a href="{{route('settings.recaptcha.index')}}">{{ ___('menus.recaptcha') }}</a> </li>
                    @endif

                    @if(hasPermission('social_login_settings_update')== true)
                    <li> <a href="{{route('social.login.settings.index')}}">{{ ___('menus.social_login_settings') }}</a> </li>
                    @endif

                    @if(hasPermission('payout_setup_settings_read')== true)
                    <li> <a href="{{route('payout.setup.settings.index')}}">{{ ___('menus.payout_setup') }}</a> </li>
                    @endif

                    @if(hasPermission('database_backup_read'))
                    <li> <a href="{{route('database.backup.index')}}">{{ ___('menus.database_backup') }}</a> </li>
                    @endif

                </ul>
            </li>

        </ul>
    </div>
</div>
