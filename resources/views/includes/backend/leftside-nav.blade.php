<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo" style="margin-bottom:10px;padding-inline-start:0px;">
        <a href="{{ route('home') }}">
            <img src="{{ asset('/backend/assets/images/logo/logo.png') }}" alt="logo" />
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : null }}">
                <a href="{{ route('dashboard') }}">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22">
                            <path
                                d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                        </svg>
                    </span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            {{-- <li class="nav-item nav-item-has-children">
                <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                    aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                        </svg>
                    </span>
                    <span class="text">Pages</span>
                </a>
                <ul id="ddmenu_2" class="collapse dropdown-nav">
                    <li>
                        <a href="settings.html"> Settings </a>
                    </li>
                    <li>
                        <a href="blank-page.html"> Blank Page </a>
                    </li>
                </ul>
            </li> --}}
            @can('course.access')
                <li
                    class="nav-item {{ request()->is('admin/course') || request()->is('admin/course/*') ? 'active' : null }}">
                    <a href="{{ route('course.index') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M24 30H8a2.002 2.002 0 0 1-2-2V4a2.002 2.002 0 0 1 2-2h16a2.002 2.002 0 0 1 2 2v16.618l-5-2.5l-5 2.5V4H8v24h16v-4h2v4a2.003 2.003 0 0 1-2 2Zm-3-14.118l3 1.5V4h-6v13.382Z" />
                            </svg>
                        </span>
                        <span class="text">Course</span>
                    </a>
                </li>
            @endcan
            @can('event.access')
                <li class="nav-item {{ request()->is('admin/event') || request()->is('admin/event/*') ? 'active' : null }}">
                    <a href="{{ route('event.index') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                <path fill="currentColor"
                                    d="M19 22h-3q-.425 0-.713-.288T15 21q0-.425.288-.713T16 20h3V10H5v3q0 .425-.288.713T4 14q-.425 0-.713-.288T3 13V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22Zm-9.825-2H2q-.425 0-.713-.288T1 19q0-.425.288-.713T2 18h7.175L7.3 16.1q-.275-.275-.287-.688T7.3 14.7q.275-.275.7-.275t.7.275l3.6 3.6q.3.3.3.7t-.3.7l-3.6 3.6q-.275.275-.687.288T7.3 23.3q-.275-.275-.275-.7t.275-.7L9.175 20ZM5 8h14V6H5v2Zm0 0V6v2Z" />
                            </svg>
                        </span>
                        <span class="text">Event</span>
                    </a>
                </li>
            @endcan
            @can('job.access')
                <li class="nav-item {{ request()->is('admin/job') || request()->is('admin/job/*') ? 'active' : null }}">
                    <a href="{{ route('job.index') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 450 450">
                                <path fill="currentColor"
                                    d="m305.975 298.814l22.704 2.383V486l-62.712-66.965V312.499l18.214 8.895zm-99.95 0l-22.716 2.383V486l62.711-66.965V312.499l-18.213 8.895zm171.98-115.78l7.347 25.574l-22.055 14.87l-1.847 26.571l-25.81 6.425l-10.803 24.314l-26.46-2.795l-18.475 19.087L256 285.403l-23.902 11.677l-18.475-19.15l-26.46 2.795l-10.803-24.313l-25.81-6.363l-1.847-26.534l-22.118-14.92l7.348-25.573l-15.594-21.544l15.644-21.52l-7.398-25.523l22.068-14.87L150.5 73.03l25.86-6.362l10.803-24.313l26.46 2.794L232.098 26L256 37.677L279.902 26l18.475 19.149l26.46-2.794l10.803 24.313l25.81 6.425l1.847 26.534l22.055 14.87l-7.347 25.574l15.656 21.407zm-49.214-21.556a72.242 72.242 0 1 0-72.242 72.242a72.355 72.355 0 0 0 72.242-72.242zm-72.242-52.283a52.282 52.282 0 1 0 52.282 52.283a52.395 52.395 0 0 0-52.282-52.245z" />
                            </svg>
                        </span>
                        <span class="text">Placement</span>
                    </a>
                </li>
            @endcan
            @can('latest-tech.access')
                <li
                    class="nav-item {{ request()->is('admin/latest-tech') || request()->is('admin/latest-tech/*') ? 'active' : null }}">
                    <a href="{{ route('latest-tech.index') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M10.419 4.014A6.08 6.08 0 0 0 10 4a6 6 0 1 0 .427.015l-.003-.004l-.005.003ZM7.554 8.94c-.026.21-.045.423-.056.64h-2.48a5.003 5.003 0 0 1 3.86-4.452c-.607 1.028-1.14 2.33-1.324 3.812Zm-2.52 1.64h2.47c.086 1.36.497 2.815 1.397 4.3a5.004 5.004 0 0 1-3.868-4.3Zm4.997 4.21c.992-1.472 1.43-2.898 1.524-4.21H8.506c.093 1.312.532 2.738 1.525 4.21ZM8.547 9.063a7.958 7.958 0 0 0-.047.516h3.061a7.987 7.987 0 0 0-.047-.516c-.192-1.557-.821-2.905-1.483-3.892c-.663.987-1.292 2.335-1.484 3.892Zm2.623 5.8c.893-1.478 1.302-2.928 1.387-4.284h2.41a5.004 5.004 0 0 1-3.797 4.284Zm1.393-5.284h2.42a5.004 5.004 0 0 0-3.789-4.435c.602 1.026 1.13 2.322 1.313 3.796c.026.21.045.423.056.64Z"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M3.07 6C2.39 7.18 2 8.54 2 10s.39 2.82 1.07 4h1.18A6.955 6.955 0 0 1 3 10c0-1.49.46-2.87 1.25-4H3.07Zm12.68 0h1.18C17.61 7.18 18 8.54 18 10s-.39 2.82-1.07 4h-1.18A6.955 6.955 0 0 0 17 10c0-1.49-.46-2.87-1.25-4Zm2.74 7h1.05c.3-.95.46-1.95.46-3s-.16-2.05-.46-3h-1.05c.33.94.51 1.95.51 3s-.18 2.06-.51 3ZM.46 13h1.05c-.33-.94-.51-1.95-.51-3s.18-2.06.51-3H.46C.16 7.95 0 8.95 0 10s.16 2.05.46 3Z" />
                            </svg>
                        </span>
                        <span class="text">Latest Technews</span>
                    </a>
                </li>
            @endcan
            @can('book.access')
                <li class="nav-item {{ request()->is('admin/book') || request()->is('admin/book/*') ? 'active' : null }}">
                    <a href="{{ route('book.index') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                <path fill="currentColor"
                                    d="M14 9.9V8.2q.825-.35 1.688-.525T17.5 7.5q.65 0 1.275.1T20 7.85v1.6q-.6-.225-1.213-.338T17.5 9q-.95 0-1.825.238T14 9.9Zm0 5.5v-1.7q.825-.35 1.688-.525T17.5 13q.65 0 1.275.1t1.225.25v1.6q-.6-.225-1.213-.338T17.5 14.5q-.95 0-1.825.225T14 15.4Zm0-2.75v-1.7q.825-.35 1.688-.525t1.812-.175q.65 0 1.275.1T20 10.6v1.6q-.6-.225-1.213-.338T17.5 11.75q-.95 0-1.825.238T14 12.65ZM6.5 16q1.175 0 2.288.263T11 17.05V7.2q-1.025-.6-2.175-.9T6.5 6q-.9 0-1.788.175T3 6.7v9.9q.875-.3 1.738-.45T6.5 16Zm6.5 1.05q1.1-.525 2.212-.788T17.5 16q.9 0 1.763.15T21 16.6V6.7q-.825-.35-1.713-.525T17.5 6q-1.175 0-2.325.3T13 7.2v9.85ZM12 20q-1.2-.95-2.6-1.475T6.5 18q-1.05 0-2.063.275T2.5 19.05q-.525.275-1.012-.025T1 18.15V6.1q0-.275.138-.525T1.55 5.2q1.15-.6 2.4-.9T6.5 4q1.45 0 2.838.375T12 5.5q1.275-.75 2.663-1.125T17.5 4q1.3 0 2.55.3t2.4.9q.275.125.413.375T23 6.1v12.05q0 .575-.487.875t-1.013.025q-.925-.5-1.937-.775T17.5 18q-1.5 0-2.9.525T12 20Zm-5-8.35Z" />
                            </svg>
                        </span>
                        <span class="text">Books</span>
                    </a>
                </li>
            @endcan
            @can('gallery.access')
                <li
                    class="nav-item {{ request()->is('admin/gallery') || request()->is('admin/gallery/*') ? 'active' : null }}">
                    <a href="{{ route('gallery.index') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                <path fill="currentColor"
                                    d="M3 19q-.825 0-1.413-.588T1 17V7q0-.825.588-1.413T3 5h10q.825 0 1.413.588T15 7v10q0 .825-.588 1.413T13 19H3Zm15-8q-.425 0-.713-.288T17 10V6q0-.425.288-.713T18 5h4q.425 0 .713.288T23 6v4q0 .425-.288.713T22 11h-4Zm1-2h2V7h-2v2ZM3 17h10V7H3v10Zm1-2h8l-2.625-3.5L7.5 14l-1.375-1.825L4 15Zm14 4q-.425 0-.713-.288T17 18v-4q0-.425.288-.713T18 13h4q.425 0 .713.288T23 14v4q0 .425-.288.713T22 19h-4Zm1-2h2v-2h-2v2ZM3 17V7v10Zm16-8V7v2Zm0 8v-2v2Z" />
                            </svg>
                        </span>
                        <span class="text">Gallery</span>
                    </a>
                </li>
            @endcan
            @can('certification.access')
                <li
                    class="nav-item {{ request()->is('admin/certification') || request()->is('admin/certification/*') ? 'active' : null }}">
                    <a href="{{ route('certification.index') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                <path fill="currentColor"
                                    d="m13 21l2-1l2 1v-7h-4m4-5V7l-2 1l-2-1v2l-2 1l2 1v2l2-1l2 1v-2l2-1m1-7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7v-2H4V5h16v10h-1v2h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-9 5H5V6h6m-2 5H5V9h4m2 5H5v-2h6Z" />
                            </svg>
                        </span>
                        <span class="text">Certification</span>
                    </a>
                </li>
            @endcan
            {{-- <li class="nav-item nav-item-has-children">
                <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3"
                    aria-controls="ddmenu_3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z" />
                        </svg>
                    </span>
                    <span class="text">Auth</span>
                </a>
                <ul id="ddmenu_3" class="collapse dropdown-nav">
                    <li>
                        <a href="signin.html"> Sign In </a>
                    </li>
                    <li>
                        <a href="signup.html"> Sign Up </a>
                    </li>
                </ul>
            </li> --}}
            @can('setting.access')
                <span class="divider">
                    <hr />
                </span>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_4"
                        aria-controls="ddmenu_4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <path
                                    d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
                            </svg>
                        </span>
                        <span class="text">Setting </span>
                    </a>
                    <ul id="ddmenu_4"
                        class="collapse dropdown-nav {{ request()->is('admin/settings/company-setting') || request()->is('admin/role') || request()->is('admin/role/*') ? 'show' : null }}">
                        @can('role.access')
                            <li>
                                <a href="{{ route('role.index') }}"
                                    class="{{ request()->is('admin/role/create') || request()->is('admin/role') ? 'active' : null }}">
                                    Role
                                </a>
                            </li>
                        @endcan
                        @can('role_permission.assign')
                            <li>
                                <a href="{{ route('role.assign') }}"
                                    class="{{ request()->is('admin/role/assign') ? 'active' : null }}"> Role Assign </a>
                            </li>
                        @endcan
                        @can('permission.access')
                            <li>
                                <a href="buttons.html"> Permissions </a>
                            </li>
                        @endcan
                        @can('settings.access')
                            <li>
                                <a href="{{ route('company-setting.edit') }}"
                                    class="{{ request()->is('admin/settings/company-setting') ? 'active' : null }}"> Company
                                    Setting
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            {{-- <span class="divider">
                <hr />
            </span>

            <li class="nav-item mb-0">
                <a href="{{ route('company-setting.edit') }}">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <path
                                d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
                        </svg>
                    </span>
                    <span class="text">Settings</span>
                </a>
            </li> --}}
        </ul>
    </nav>
</aside>
