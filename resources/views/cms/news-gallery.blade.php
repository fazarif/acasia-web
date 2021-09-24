@extends('layouts.cms-app')
<!-- Site wrapper -->

@section('head')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                    <h1>News Page -  Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">News & Updates</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
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
                            <h3 class="card-title">Notes for News page - Gallery contents</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            1)  For Gallery, please ensure that the uploaded image is 1920px * 1153px.<br>
                            2)  The order of the slider image will follow from left to right as shown below.
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="btn-group btn-group-sm mb-3 col-md-10">
                    @foreach($galleryFile as $key => $files)
                        <button  type="button" class="btn col-1 btn-outline-primary {{ $loop->first? 'active' : '' }}" id="{{ $key }}">{{ $key }}</button>
                    @endforeach
                </div>
                <div class="col-2" >
                    <button type="button" style="margin-left: auto; margin-right: 0; display: block;" data-toggle="modal" data-target="#Gallery-Form">Add New Gallery <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" id="galleryTitle"></h3>
                        </div>
                        <div class="card-body" id="image-area">
                            <div class="col-md-12 p-0"><ul id="sortable"></ul></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-4 mb-4">
                    <form method="post" action="{{ route('upload-indexslider') }}" role="form" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group px-0 mb-0">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sliderInput" name="sliderInput" multiple>
                                    <label class="custom-file-label" for="exampleInputFile" id="sliderLabel">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="uploadButton">Upload</span>
                                    <button type="submit" id="indexSubmit"></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="modal custom-modal fade" id="Gallery-Form" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="card-title">News Form</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" role="form" enctype="multipart/form-data" action="{{ route('upload-gallery') }}" >
                @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputTitle">Gallery Name</label>
                      <input type="text" class="form-control" id="inputTitle" placeholder="Enter news title" name="galleryFormTitle">
                    </div>
                    <div class="form-group">
                      <label for="inputDesc">Description</label>
                      <input type="text" class="form-control" id="inputDesc" placeholder="Enter news description" name="galleryFormDesc">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="newsFormFile" name="galleryFormFile[]" multiple>
                          <label class="custom-file-label" for="exampleInputFile" id="galleryFormFileLabel"><p class="text-muted">Choose image</p></label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  <!-- /.card-body -->

                </form>
            </div>
              <!-- /.card -->
        </div>
    </div>
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">

    $(document).ready(function() {
        $('#indexSubmit').hide();

        $('.btn-group').on('click', '.btn',function (e){
            $(this).addClass('active').siblings().removeClass('active');
            checkActive($(this).attr('id'));
            $('#sortable').html('');
        });

        function checkActive(id)
        {
            callFile(id);
        }

        $(function() {
            $("#sortable").sortable();
            $("#sortable").disableSelection();

            $("#draggable").draggable({ containment: "#image-area", scroll: false });
            $("#draggable").sortable("refresh");
        } );

        function callFile(id){
            var start = $.ajax({
                            method: 'GET',
                            url: '/json/gallery',
                            dataType: 'json'
                        }).done(function(data){
                            $.each(data, function(i,file){

                                $.each(file, function(i, eachFile){

                                    var imgSrc = "";

                                    $.each(eachFile, function(i, eachItem){

                                        var str="";
                                        str = eachFile.file_name+"";

                                        if (str.length > 29) {
                                            str = str.substr(0,29);
                                            str = str.concat("...");
                                        }

                                        if(eachItem.linked_folder == id)
                                        {
                                            $('#sortable').append("<li id=\"draggable\"class=\"ui-state-default ui-widget-content col-md-4 px-0\"><img class=\"img-fluid p-0 rounded\" src=\"/upload/gallery/"+eachItem.linked_folder+"/"+eachItem.file_loc+"\"></li>");

                                            $('#galleryTitle').html(eachItem.title);
                                        }

                                    })
          
                                });
                            });
                        });
        }

        $('#uploadButton').click(function() {

            if ($('#sliderInput').get(0).files.length === 0)
            {
                alert("Please attach image.")
            }

            else
            $('#indexSubmit').click();
        });

        $('input:file').change(function(){

            $('#galleryFormFileLabel').html('');

            $.each(this.files, (i, v) => {
                var filename = v.name;
                var lastIndex = filename.lastIndexOf("\\");
                if (lastIndex >= 0) {
                    filename = filename.substring(lastIndex + 1);
                }
                $('#galleryFormFileLabel').append(filename+", ");
            });
        });

        checkActive($('.btn-outline-primary.active').attr('id'));

    });
</script>
@endsection
