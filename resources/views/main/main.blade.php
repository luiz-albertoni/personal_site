<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Albertoni</title>

        <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
        <script src="{{ elixir('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/MainRestService.js') }}"></script>
    </head>

    <body ng-app="app" style="background-color: #eee">
        <div id="wrapper" ng-controller="ApiControllerUserShow as vm">
            <div>
                @include('default.left_side_bar')
            </div>

            @if (session('message'))
                <div class="alert alert-success" style="width: 98%">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger" style="width: 98%">
                    {{ session('error') }}
                </div>
            @endif

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>

            <div id="disqus_thread"></div>
            <script>

                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                 var disqus_config = function () {
                 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                 };
                 */
                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = '//http-albertoni-app.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript><a href="https://disqus.com/?ref_noscript"></a></noscript>
            <script id="dsq-count-scr" src="//http-albertoni-app.disqus.com/count.js" async></script>

            @include('default.footer')

            <div class="img-responsive img-circle" style="width: 65px; margin-right: 2%; height: 65px; position: fixed; font-size: -webkit-xxx-large;
                text-align: center; bottom: 40px; z-index: 300; background-color: #fbfbfb; right: 0;">


                <a href="#" id="popover">
                    <img src="/images/mail.jpeg" class="img-responsive img-circle" alt="Cinque Terre">
                </a>
                <div id="popover-head" class="hide" style="top:0;position: absolute;right:0;left: 80% !important;">
                    Send me an email!
                </div>
                <div id="popover-content" class="hide"style="top:0;position: absolute;right:0;left: 80% !important;">
                    <form action="/albertoni/sendMail" id="mail_form" name="mail_form" method="POST" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Your email</label>
                            <input class="form-control" type="email" name="mail" required>
                        </div>
                        <div class="form-group">
                            <label>Header</label>
                            <input class="form-control" type="text" name="header" >
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" name="body" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit"  onclick="if(mail_form.$valid){$('.popover').remove();}" style="width: 200px" class="btn btn-default">Send email</button>
                    </form>
                </div>

                <script>
                    $('#popover').popover({
                        html : true,
                        title: function() {
                            return $("#popover-head").html();
                        },
                        content: function() {
                            return $("#popover-content").html();
                        },
                        placement: 'auto left'
                    });
                </script>
        </div>
    </body>

</html>
