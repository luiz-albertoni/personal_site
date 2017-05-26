@extends('blog.blog_template')
@section('content')
    <div class="panel panel-default" style="margin-left: 1%; background-color: #caf0fa; color: #838383; width: 98%; min-height: 800px">
        <head>
            <script>
                tinymce.init({
                    selector: '#mytextarea',
                    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
                    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                });
            </script>
        </head>

        <form method="POST"  action="/albertoni/new/post">

            <input style="margin-top: 10px; margin-left: 10px; " type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" style="margin-top: 10px; margin-left: 10px; width: 100%; text-align: center">
                <label  style="margin-top: 10px; margin-left: 10px; width: 50%; ">Write something nice :) </label>
            </div>

            <div class="form-group" style="margin-top: 10px; margin-left: 10px; width: 40%;float:left; ">
                <label>Add title</label>
                <input required="required" name='title' value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
            </div>

            <div class="form-group" style="margin-top: 10px; margin-right: 35px; width: 50%; float:right;text-align: end;">
                <button type="submit" style="text-align: right;" class="btn">Submit</button>
            </div>

            <div class="form-group" style="margin-top: 10px; margin-left: 10px; width: 40%; ">
                <label>Add tag</label>
                <input required="required" name='tag' value="{{ old('title') }}" placeholder="Enter tag here" type="text" class="form-control" />
            </div>

            <div class="form-group" style="margin-top: 10px; margin-left: 10px; width: 40%; ">
                <label>Descrição</label>
                <input required="required" name='description'  placeholder="Enter tag here" type="text" class="form-control" />
            </div>


            <div class="form-group"  class="form-group" style="margin-top: 20px; margin-left: 10px;width: 50%;">
                <label>Add Post!!</label>
                <textarea style="width: 1620px; min-height: 1000px"  name='body' id="mytextarea">Hello, Worlds!</textarea>
            </div>

        </form>


    </div>

@endsection