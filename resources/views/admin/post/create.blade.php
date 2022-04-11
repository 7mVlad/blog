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
                          <form action="{{route('admin.post.store')}}" method="POST" class="w-50" enctype="multipart/form-data">
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
