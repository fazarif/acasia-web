@extends('layouts.cms-app')
<!-- Site wrapper -->

@section('head')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<meta name="csrf-token" content="{{ csrf_token() }}">

<style type="text/css">
    #sortable { 
        list-style-type: none; 
        margin: 0; 
        padding: 0; 
        width: 100%; 
    }
    
    #sortable li {
        margin: none;
        float: left; 
        width: 100%; 
        height: auto; 
        font-size: 4em; 
        text-align: center; 
    }
    .ui-widget-content {
        border: none;
    }

    .img-holder {
        display: inline-block;
        width: 100%;
        height: 75%;
        overflow: hidden;
    }

    .img-holder img {
        display: inline-block;
        width: 100%;
        height: 75%;
        margin: -7.5% 0;
    }

    .close {
        z-index: 1;
        right: 10px;
        top: 10px;
        position: absolute;
    }

</style>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection

@section('page-body')

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Index Page -  CMS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Edit</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Notes for Index page contents</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            1)  For Image Sliders, please ensure that the uploaded image is 1920px * 1153px.<br>
                            2)  The order of the slider image will follow from left to right as shown below.<br>
                            3)  For YouTube video links, please click the 'Share' option and copy the link and paste here.
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">Upload</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 mb-3">
                                    <form method="post" action="{{ route('upload-indexslider') }}" role="form" enctype="multipart/form-data" id="formImg">
                                    @csrf
                                        <div class="form-group px-0 mb-0">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sliderInput" name="sliderInput">
                                                    <label class="custom-file-label" for="exampleInputFile" id="sliderLabel">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="uploadButton">Upload</span>
                                                    <button type="submit" id="indexSubmit"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form method="post" action="{{ route('upload-indexvideo') }}" role="form" enctype="multipart/form-data" id="formVid" style="display: none;">
                                    @csrf
                                        <div class="form-group px-0 mb-0">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="text" class="form-control" id="exampleInputText" placeholder="Enter YouTube link" name="linkInput">
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="uploadVidButton">Submit</span>
                                                    <button type="submit" id="vidSubmit"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-4 mb-0">
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio1" name="option" value="image" checked>
                                  <label for="customRadio1" class="custom-control-label">Image</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio2" name="option" value="video">
                                  <label for="customRadio2" class="custom-control-label">Video</label>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Uploaded Items</h3>
                        </div>
                        <div class="card-body" id="image-area">
                            <div class="col-md-12 p-0"><ul id="sortable"></ul></div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-1">
                                    <button class="btn btn-primary" type="submit" id="submitSlider">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">

    $(document).ready(function() {
        $('#indexSubmit').hide();
        $('#vidSubmit').hide();

        $(function() {
            $("#sortable").sortable();
            $("#sortable").disableSelection();

            $(".draggable").draggable({ containment: "#image-area", scroll: false });
            $(".draggable").sortable("refresh");
        });

        function sortArray(a, b)
        {
            // console.log(a[1].position);
            return a[1].position - b[1].position;
        }

        $('body').on('click','.close', function(){
            // console.log($(this).val());
            var id = $(this).attr('value');
            var r = confirm("Press anything?");

            if(r == true)
            {
                // alert("Deleted");
                deleteFile(id);
            }
            // alert(id);
        });

        function deleteFile(data){
            // alert("dlm del func"+data);

            // console.log(JSON.stringify(data));

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/json/index/delete',
                contentType: 'application/json; charset=utf-8',
                data: JSON.stringify(data),
                dataType: 'json',
                success: function(data){
                    alert('Successfully updated!');

                },
                error: function(xhr, status, err) {
                    alert('error');
                    console.log(err);
                }
            })

            $('#sortable').html("");
            callFile();

        }

        function callFile(){
            var start = $.ajax({
                            method: 'GET',
                            url: '/json/index',
                            dataType: 'json'
                        }).done(function(data){
                            $.each(data, function(i,file){

                                var sortable = [];
                                for (var item in file){
                                    sortable.push([item, file[item]]);
                                }

                                var sortA = sortable.sort(sortArray);

                                $.each(sortA, function(i, eachFile){

                                    if(eachFile)
                                    {

                                        var imgSrc = "";

                                        var str="";
                                        str = eachFile[1].file_name+"";

                                        if (str.length > 29) {
                                            str = str.substr(0,29);
                                            str = str.concat("...");
                                        }

                                        if (eachFile[1].youtube_url) {

                                            var str = eachFile[1].youtube_url;
                                            var dtr = str.replace('https://youtu.be/','');

                                            $('#sortable').append("<li id=\"drag"+eachFile[1].id+"\" class=\"draggable ui-state-default ui-widget-content col-md-4 px-0 img-holder\"><i class=\"fa fa-times close\" value="+eachFile[1].id+"></i><img class=\"img-fluid p-0 rounded\" src=\" https://img.youtube.com/vi/"+dtr+"/sddefault.jpg\" alt=\"\"/><div class=\"video-btn video-play-btn-align-center\" style=\"font-size: 16px;\" ><a href=\"https://www.youtube.com/watch?v="+dtr+"\" class=\"video-play-icon popup-youtube v-Center\" target=\"_blank\"><i class=\"fa fa-play\"></i></a></div></div> ");
                                        }

                                        if (eachFile[1].file_path){
                                            $('#sortable').append("<li id=\"drag"+eachFile[1].id+"\"class=\"draggable ui-state-default ui-widget-content col-md-4 px-0\"><i class=\"fa fa-times close\" value="+eachFile[1].id+"></i><img class=\"img-fluid p-0 rounded\" src=\"/upload/index/"+eachFile[1].file_path+"\"></li>");
                                        }
                                    }


                                });
                            });
                        });
        }

        callFile();

        $(function(){
            $('#sortable').sortable({
                update: function (event, ui){
                    console.log('update: '+ (ui.item.index()+1 ))
                },
                start: function(event, ui){
                    console.log('start: '+(ui.item.index()+1))
                }
            });
            $("#sortable").disableSelection();

            $("#submitSlider").click(function(){
                var sorted = $("#sortable").sortable("toArray");

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                        method: 'POST',
                        url: '/json/index/update',
                        contentType: 'application/json; charset=utf-8',
                        data: JSON.stringify(sorted),
                        dataType: 'json',
                        success: function(data){
                            alert('Successfully updated!');
                            // var d = JSON.parse(data);
                            // console.log(data);

                        },
                        error: function(xhr, status, err) {
                            alert('error');
                            console.log(err);
                        }
                })
            });
        });

        $('#uploadButton').click(function() {

            if ($('#sliderInput').get(0).files.length === 0)
            {
                alert("Please attach image.")
            }

            else
            $('#indexSubmit').click();
        // upload youtube link submit
        });

        $('#uploadVidButton').click(function() {

            if ($('#exampleInputText').val().length === 0)
            {
                alert("Please write a link.");
            }

            else
            $('#vidSubmit').click();
        });

        $('#sliderInput').change(function(){
            var filename = $(this).val();
            var lastIndex = filename.lastIndexOf("\\");
            if (lastIndex >= 0) {
                filename = filename.substring(lastIndex + 1);
            }
            $('#sliderLabel').html(filename);
        });

        $('input[type=radio][name=option]').change(function(){
            if (this.value == 'image') {
                $('#formVid').hide();
                $('#formImg').show();
            }
            else if (this.value == 'video') {
                $('#formVid').show();
                $('#formImg').hide();
            }
        });
    });
</script>
@endsection
