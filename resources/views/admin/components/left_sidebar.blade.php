<aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header" style="font-size:14px !important; color: #333 !important;">Administrator <br>
                        <label style="font-weight:700; color: #000080;">
                            Russel Vincent Cuevas <br>
                            russelcuevas0@gmail.com
                        </label>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard.page')}}">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.admin.management.page') }}">
                            <i class="material-icons">admin_panel_settings</i>
                            <span>Admin</span>
                        </a>
                    </li>
                    <li
                        class="">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">groups</i>
                            <span>Examinees</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <a href="{{ route('admin.examiners.page') }}">Add Examiners</a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.examinees.list.page') }}">Examinees List</a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">description</i>
                            <span>Assesstment</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <a href="{{ route('admin.course.page') }}">Course</a>
                            </li>
                            <li class="">
                                <a href="">Riasec</a>
                            </li>
                            <li class="">
                                <a href="">Questionnaire</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="material-icons">done_all</i>
                            <span>Exam Results</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!-- #Footer -->
        </aside>