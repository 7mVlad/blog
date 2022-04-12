  @extends('admin.layouts.main')
  @section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0">Добавление категории</h1>
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
                          <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group w-25" >
                                  <input type="text" class="form-control" name="title" placeholder="Название категории">
                              </div>
                              @error('title')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                              @enderror


                              <div class="form-group w-75">
                                <label>Описание</label>
                                <textarea class="form-control" placeholder="Описание" name="content" style="resize: none; height:150px">{{old('content')}}</textarea>
                              </div>
                              @error('content')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                              @enderror

                              <div class="form-group mt-5">
                                <div class=" d-flex">
                                    <label class="m-5">Главная картинка</label>

                                        <div class="form-element ml-5">
                                            <input type="file" id="img-main" accept="image/*" name="main-image">
                                            <label for="img-main" id="img-main-preview">
                                                <img src="https://bit.ly/3ubuq5o" alt="" style="width: 250px; height: 150px">
                                                <div class="bg-plus">
                                                    <span>+</span>
                                                </div>
                                            </label>
                                            {{-- Delete img --}}
                                            <div class="btn-inner">
                                                <div class="btn-delete btn-image-main" id="submit-main" style="margin-left: 235px;">
                                                    <span>x</span>
                                                </div>
                                            </div>

                                        </div>

                                </div>
                              </div>

                              <div class="form-group mt-5">
                                <div class="d-flex justify-content-between">
                                    <label class="m-5">Галерея картинок <br><br> Размер: 1000 х 190</label>
                                    @for($i = 1; $i < 6; $i++)
                                        <div class="form-element mr-5">
                                            <input type="file" id="img-{{$i}}" accept="image/*" name="image-{{$i}}">
                                            <label for="img-{{$i}}" id="img-{{$i}}-preview">
                                                <img src="https://bit.ly/3ubuq5o" alt="" style="width: 150px; height: 150px">
                                                <div class="bg-plus">
                                                    <span>+</span>
                                                </div>
                                            </label>
                                            {{-- Delete img --}}
                                            <div class="btn-inner">
                                                <div class="btn-delete btn-image" id="submit-{{$i}}">
                                                    <span>x</span>
                                                </div>
                                            </div>


                                        </div>
                                    @endfor
                                </div>
                              </div>


                              <input type="submit" class="btn btn-primary" value="Добавить">
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
