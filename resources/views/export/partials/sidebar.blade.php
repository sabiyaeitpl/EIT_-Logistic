
<style>
.navbar .navbar-nav li.menu-item-has-children .sub-menu{padding-left:0;}
</style>

@if(Session('admin')->user_type=='user')
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">

        <?php $menus = array();
            foreach ($Roledata as $roleaccess) {
                $menus[] = $roleaccess->menu;

            }
            $menuslist = array_unique($menus);
        ?>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                </ul>
            </div>
        </nav>
    </aside>
 @else
 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('dashboard') }}"><img src="{{ asset('images/dashboard-icon.png') }}" alt="" />Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/financial-profit.png') }}" alt="" /> Export</a>
                        <ul class="sub-menu children dropdown-menu">
                            {{-- <li><a href="{{ url('export/list') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" /> Export List</a></li> --}}
                            <li><a href="{{ url('export/export-master') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" /> Exporter Master</a></li>
                            <li><a href="{{ url('export/importer-master') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" /> Importer Master</a></li>
                            <li><a href="{{ url('export/bank-master') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" /> Bank Master</a></li>
                            <li><a href="{{ url('export/good-master') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" /> Product Master</a></li>
                            <li><a href="{{ url('export/create-pdf') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" /> Exporter CoO</a></li>
                            <li><a href="{{ url('export/indent') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" />Indent Invoice</a></li>
                            <li><a href="{{ url('export/invoice') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" />Package List Invoice</a></li>
                            <li><a href="{{ url('export/invoice') }}"><img src="{{ asset('images/lv-rule.png') }}" alt="" />Confirm Package & Invoice</a></li>
                            {{-- <li><a href="{{ url('export/pdf') }}" target="_blank"><img src="{{ asset('images/lv-rule.png') }}" alt="" /> Export PDF</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
</aside>

@endif
