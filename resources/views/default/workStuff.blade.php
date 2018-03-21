@extends('main.main')
@section('content')

    <div style="margin: 30px">
        <div >
        <uib-tabset active="active" >


            <uib-tab index="0" >
                <uib-tab-heading>
                    <span> <img src="/images/ionic-icon.png"  alt="Packagist" height="20" width="20"> Ionic Apps </span>
                </uib-tab-heading>

                <div style="background-color: white; ">
                    <br>
                    <li style="margin: 20px">
                        Generator of Baby's Name
                        <ul style="margin: 15px;border:  solid 1px; height: 120px; ">

                            <img style="float: left; margin-right: 30px;    margin-top: 10px;" src="/images/baby-white-background.png">

                            <span style="float: left;  margin-right: 10px; margin-top: 10px; width: 49%;">This is an application to generate names using an special algorithmic which is feed by user data, <br>
                                                                                keep a list and make fun of a close friend. This is my first app using Ionic, so it was made with <br>
                                                                                purpose of study.
                             </span>
                            <a style="float: left; margin-top: 10px;" type="application/vnd.android.package-archive" href="/albertoni/download/app/android/babename.apk">
                                <img  style="margin-top: 5px;" src="/images/download-android.png" height="60" width="200">
                            </a>
                        </ul>
                    </li>
                    <li style="margin: 20px">
                        Generator of Baby's Name
                        <ul style="margin: 15px;border:  solid 1px; height: 120px; ">


                            <span style="float: left;  margin-right: 10px; margin-top: 10px; width: 49%;">Test lottie
                             </span>
                            <a style="float: left; margin-top: 10px;" type="application/vnd.android.package-archive"
                               href="/albertoni/download/app/android/minhas-vacinas.apk">
                                <img  style="margin-top: 5px;" src="/images/download-android.png" height="60" width="200">
                            </a>
                        </ul>
                    </li>

                    <br>
                    <br>
                    <br>

                </div>
            </uib-tab>
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