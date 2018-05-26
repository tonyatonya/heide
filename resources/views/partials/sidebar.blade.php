<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ ($pn=='Slide' ? 'active':'') }}"><a href="{{ url('admin/Slide') }}"><i class='fa fa-link'></i> <span>Slide</span></a></li>
            <li class="{{ ($pn=='Concept' ? 'active':'') }}"><a href="{{ url('admin/Concept') }}"><i class='fa fa-link'></i> <span>Concept</span></a></li>
            <li class="{{ ($pn=='MediaBanner' ? 'active':'') }}"><a href="{{ url('admin/MediaBanner') }}"><i class='fa fa-link'></i> <span>Media</span></a></li>
            <li class="{{ ($pn=='Executive' ? 'active':'') }}"><a href="{{ url('admin/Executive') }}"><i class='fa fa-link'></i> <span>Executive BIO</span></a></li>
            <li class="{{ ($pn=='Media' ? 'active':'') }}"><a href="{{ url('admin/Media') }}"><i class='fa fa-link'></i> <span>Media Coverage</span></a></li>
            <li class="{{ ($pn=='News' ? 'active':'') }}"><a href="{{ url('admin/News') }}"><i class='fa fa-link'></i> <span>News Release</span></a></li>
            <li class="{{ ($pn=='Gallery' ? 'active':'') }}"><a href="{{ url('admin/Gallery') }}"><i class='fa fa-link'></i> <span>Gallery</span></a></li>
            <li class="{{ ($pn=='Contactus' ? 'active':'') }}"><a href="{{ url('admin/Contactus') }}"><i class='fa fa-link'></i> <span>Contactus</span></a></li>
            <li class="{{ ($pn=='FoodType' ? 'active':'') }}"><a href="{{ url('admin/FoodType') }}"><i class='fa fa-link'></i> <span>FoodType</span></a></li>
            <li class="{{ ($pn=='Social' ? 'active':'') }}"><a href="{{ url('admin/Social') }}"><i class='fa fa-link'></i> <span>Social</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
