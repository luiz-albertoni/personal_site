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