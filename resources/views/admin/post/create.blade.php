  @extends('admin.layouts.main')
  @section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0">Добавление поста</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Dashboard v1</li>
                          </ol>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                      <div class="col-12">
                          <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" class="form-control" name="title" placeholder="Название поста" value="{{old('title')}}">
                              </div>
                              @error('title')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                              @enderror
                              <div class="form-group">
                                <label>Описание</label>
                                <textarea class="form-control" placeholder="Описание" name="content" style="resize: none; height:100px">{{old('content')}}</textarea>
                              </div>
                              @error('content')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                              @enderror
                              <div class="form form-group">
                                <div class="form-inner">
                                    @for($i = 1; $i <= 5; $i++)
                                        <div class="form-element">
                                            <input type="file" id="file-{{$i}}" accept="image/*">
                                            <label for="file-{{$i}}" id="file-{{$i}}-preview">
                                                <img src="https://bit.ly/3ubuq5o" alt="">
                                                <div>
                                                    <span>+</span>
                                                </div>
                                            </label>
                                        </div>
                                    @endfor
                                </div>
                              </div>

                              <script>

                                function previewBeforeUpload(id) {

                                document.querySelector("#"+id).addEventListener("change",function(e){
                                if(e.target.files.length == 0){
                                  return;
                                }
                                let file = e.target.files[0];
                                let url = URL.createObjectURL(file);
                                document.querySelector("#"+id+"-preview div").remove();
                                document.querySelector("#"+id+"-preview img").src = url;
                              });
                             }

                             for (let i = 1; i < 5; i++) {
                                previewBeforeUpload("file-"+i);
                             }

                             </script>

                              <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                              </div>
                          </form>
                      </div>
                  </div>
                  <!-- /.row -->

              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
  @endsection






  <style>

  .form-inner {
   margin-top: 50px;
   display: flex;
   justify-content: space-around;
   flex-wrap: wrap;
   gap: 20px;
  }

  .form-element {
   width: 150px;
   height: 150px;
  }

.form-element input {
   display: none;
  }

  .form-element img {
   width: 100%;
   height: 100%;
   object-fit: cover;
  }

  .form-element div {
   position: relative;
   height: 40px;
   margin-top: -40px;
   background: rgba(0, 0, 0, 0.5);
   text-align: center;
   line-height: 40px;
   font-size: 13px;
   color: #f5f5f5;
   font-weight: 600;
  }

  .form-element span {
   font-size: 40px;
  }

  </style>



