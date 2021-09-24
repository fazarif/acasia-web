@extends('layouts.cms-app')
<!-- Site wrapper -->


@section('page-body')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News Page - News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">News & Updates</a></li>
              <li class="breadcrumb-item active">News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- News box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">News Page</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-top: auto;">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12" id="post-news">
                  <h4>Recent News</h4>
                  <!-- APPEND HERE NEWS POST -->
                  @foreach($news as $newsItem)
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="/admin/dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">{{ $newsItem->title }}</a>
                        </span>
                        <span class="description">{{ $newsItem->topic }} - @if($newsItem->display_date) {{ date('d F Y', strtotime($newsItem->display_date)) }}  @else {{ date('d F Y', strtotime($newsItem->created_at)) }} @endif</span>
                      </div>
                      <p>{{ $newsItem->description }}</p>
                      <p><a href=" {{ $newsItem->web_link }}" target="_BLANK" class="link-black text-sm">
                        <i class ="fas fa-link mr-1"></i> View link
                      </a></p>
                      <button type="button" class="btn btn-default mr-1" data-toggle="modal" data-target="#modal-photo" data-src="{{ asset('upload/news/'.$newsItem->img_loc) }}">
                        View Image
                      </button>
                      <button type="button" class="btn btn-default mr-1" data-toggle="modal" data-target="#modal-example" data-example-title=" {{ $newsItem->title }}" data-example-topic=" {{ $newsItem->topic }}" data-example-created=" {{ $newsItem->created_at }}"  data-example-desc=" {{ $newsItem->description }}">View Example</button>
                      <button type="button" class="btn btn-default mr-1" data-toggle="modal" data-target="#modal-edit" data-edit-title=" {{ $newsItem->title }}" data-edit-topic=" {{ $newsItem->topic }}" data-edit-created="@if($newsItem->display_date) {{ $newsItem->display_date }} @else {{ $newsItem->created_at }} @endif"  data-edit-desc=" {{ $newsItem->description }}" data-edit-link="{{ $newsItem->topic }}" data-edit-id="{{ $newsItem->id }}">Edit News</button>
                    </div>
                  @endforeach
                  <div class="pagination justify-content-center">{{ $news->links() }}</div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-plus-circle"></i> Add News Form</h3>
              <!-- <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p> -->
              <br>
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">News Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" role="form" enctype="multipart/form-data" action="{{ route('upload-news') }}" >
                @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputTitle">Title</label>
                      <input type="text" class="form-control" id="inputTitle" placeholder="Enter news title" name="newsFormTitle">
                    </div>
                    <div class="form-group">
                      <label for="inputDesc">Description</label>
                      <input type="text" class="form-control" id="inputDesc" placeholder="Enter news description" name="newsFormDesc">
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="inputTopic">Topic</label>
                        <input type="text" class="form-control" id="inputTopic" placeholder="Enter topic" name="newsFormTopic">
                      </div>
                      <div class="col-md-6">   
                        <label for="inputDate">News Date</label>
                        <input type="date" class="form-control" id="inputDate" placeholder="Enter display date" name="dateFormLink">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">   
                        <label for="inputLink">Link</label>
                        <input type="text" class="form-control" id="inputLink" placeholder="Enter news link" name="newsFormLink">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="newsFormFile" name="newsFormFile">
                          <label class="custom-file-label" for="exampleInputFile" id="newsFormFileLabel"><p class="text-muted">Choose image</p></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <br><button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  <!-- /.card-body -->

                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-photo">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Image</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" style="margin-right: auto; margin-left: auto; width: 100%" id="modal-src">
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal fade" id="modal-example">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Example</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="blog-post">
              <a href="#"><img class="rounded mb-lg-1 mb-1" src="{{ asset('img/blog/b3.jpg') }}" alt="card image" style="width: 100%;" /></a>
              <h3 class=""><a href="#" id="example-title">Title</a></h3>
              <div class="meta font-lora">
                  <h5 href="#" id="topic" id="example-topic">Topic</h5>
                  <span class="meta-separator"></span>
                  <h5 href="#" id="example-created">Date</h5>
              </div>
              <p id="example-description">Desc</p>
          </div>

          <!-- <img src="{{ asset('img/portfolio/even/1.jpg') }}" style="margin-right: auto; margin-left: auto; width: 100%"> -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



  <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" role="form" enctype="multipart/form-data" action="{{ route('upload-news') }}" >
        @csrf
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Title:</label>
                <input type="text" class="form-control" id="edit-title" name="edit_title">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Description:</label>
                <textarea class="form-control" id="edit-desc" name="edit_desc" style="height: 8rem;"></textarea>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="message-text" class="col-form-label">Topic:</label>
                  <input type="text" class="form-control" id="edit-topic" name="edit_topic">
                </div>
                <div class="col-md-6">
                  <label for="message-text" class="col-form-label">News Date:</label>
                  <input type="date" class="form-control" id="edit-date" name="edit_date">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="message-text" class="col-form-label">Link:</label>
                  <input type="text" class="form-control" id="edit-link" name="edit_link">
                </div>
                <div class="col-md-6">
                  <!-- <label for="message-text" class="col-form-label">Image input:</label> -->
                  <input type="text" class="form-control" id="edit-id" name="edit_id" hidden>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.6/lib/draggable.bundle.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#indexSubmit').hide();

        // function callFile(){
        //     var start = $.ajax({
        //                     method: 'GET',
        //                     url: '/json/news',
        //                     dataType: 'json'
        //                 }).done(function(data){
        //                     $.each(data, function(i,file){

        //                         $.each(file, function(i, eachFile){

        //                             $('#post-news').append("<div class=\"post\"><div class=\"user-block\"><img class=\"img-circle img-bordered-sm\" src=\"/admin/dist/img/user1-128x128.jpg\" alt=\"user image\"><span class=\"username\"><a href=\"#\">"+eachFile.title+"</a></span><span class=\"description\">"+eachFile.topic+" - 7:45 PM today</span></div><p>"+eachFile.description+"</p><p><a href=\""+eachFile.web_link+"\" target=\"_BLANK\" class=\"link-black text-sm\"><i class =\"fas fa-link mr-1\"></i> View link</a></p><button type=\"button\" class=\"btn btn-default mr-1\" data-toggle=\"modal\" data-target=\"#modal-photo\">View Image</button><button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#modal-example\" data-example-title=\""+eachFile.title+"\" data-example-topic=\""+eachFile.topic+"\" data-example-created=\""+eachFile.created_at+"\"  data-example-desc=\""+eachFile.description+"\">View Example</button></div>") 
        //                         });
        //                     });
        //                 });
        // }

        // callFile();

        $('#uploadButton').click(function() {

            if ($('#sliderInput').get(0).files.length === 0)
            {
                alert("Please attach image.")
            }

            else
            $('#indexSubmit').click();
        });

        $('#newsFormFile').change(function(){
            var filename = $(this).val();
            var lastIndex = filename.lastIndexOf("\\");
            if (lastIndex >= 0) {
                filename = filename.substring(lastIndex + 1);
            }
            $('#newsFormFileLabel').html(filename);
        });

        $(document).on('show.bs.modal','#modal-example', function (e) {
          var exampleTitle = $(e.relatedTarget).data('example-title');
          var exampleDesc = $(e.relatedTarget).data('example-desc');
          var exampleTopic = $(e.relatedTarget).data('example-topic');
          var exampleDate = $(e.relatedTarget).data('example-created');

          $('#example-title').html(exampleTitle);
          $('#example-description').html(exampleDesc);
          $('#example-topic').html(exampleTopic);
          $('#example-created').html(exampleDate);

        });

        $(document).on('show.bs.modal','#modal-edit', function (e) {
          var editTitle = $(e.relatedTarget).data('edit-title');
          var editDesc = $(e.relatedTarget).data('edit-desc');
          var editTopic = $(e.relatedTarget).data('edit-topic');
          var editDate = $(e.relatedTarget).data('edit-created');
          var editLink = $(e.relatedTarget).data('edit-link');
          var editId = $(e.relatedTarget).data('edit-id');

          s = editDate.split(/ (.*)/);

          $('#edit-title').val(editTitle);
          $('#edit-desc').val(editDesc);
          $('#edit-topic').val(editTopic);
          $('#edit-date').val(s[0]);
          $('#edit-link').val(editLink);
          $('#edit-id').val(editId);

          console.log(s[0]);

        });

        $(document).on('show.bs.modal','#modal-photo', function (e) {
          var exampleImg = $(e.relatedTarget).data('src');

          $('#modal-src').attr('src',exampleImg);

        });   

    });
</script>