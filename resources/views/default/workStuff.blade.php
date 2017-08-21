@extends('main.main')
@section('content')

    <div style="margin: 30px">
        <div >
        <uib-tabset active="active" >
            <uib-tab index="1" >
                <uib-tab-heading>
                     <span> <img src="/images/logo-small.png"  alt="Packagist" height="20" width="20"> Laravel packages </span>
                </uib-tab-heading>

                <div style="background-color: white; ">
                    <br>
                    <li style="margin: 20px">
                        <a href="https://github.com/luiz-albertoni/DynamicMysqlDataBaseBackup" target="_blank">
                            Packagist - Dynamic Mysql Database Backup </a>
                        <ul style="margin: 10px;border: solid 1px">
                            <br>
                            @lang('work_stuff.packgist_dynamic_db_dump')
                            <br>
                            <br>
                        </ul>
                    </li>
                    <br>
                    <br>
                    <br>

                </div>
            </uib-tab>
        </uib-tabset>
        </div>
    </div>


@endsection