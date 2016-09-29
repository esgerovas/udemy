@extends("layouts.admin_app")
@inject('cat', 'App\Category')
@inject('lang', 'App\Language')
@inject('level', 'App\Level')
@inject('author', 'App\Teacher')
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-12"> 
      <h1 class="text-center" style="margin-bottom:50px;">Yeni kurs əlavə et</h1>
      <form action="{{url('/admin/course/add')}}" method="post" enctype="multipart/form-data"> 
      {{csrf_field()}}
        <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border"></div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                      <label for="image">Kursun görünüş şəkil</label>
                      <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                  <label>Kursun adı</label>
                  <input type="text" name="title" class="form-control" placeholder="Daxil elə..." required>
                </div>
                <div class="form-group">
                  <label>Kursun qısa təsviri</label>
                  <textarea name="headline" class="form-control" rows="3" placeholder="Daxil elə ..." required></textarea>
                </div>
              </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border"></div>
              <!-- /.box-header -->
              <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label>Kursun yerləşdiyi Kategoriya</label>
                    <select class="form-control" name="category" id='cat'>
                      <option value="0">Seçin..</option>
                      @foreach ($cat->all() as $item)
                       <option value="<?=$item['id']?>"><?=$item['name']?></option>
                      @endforeach                
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label>Kursun yerləşdiyi Altkategoriya</label>
                    <select class="form-control" name="subcategory" id='sub'>
                      <option>Seçin..</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label>Kursun dili</label>
                    <select class="form-control" name="lang">
                      <option value="0">Seçin..</option>
                      @foreach ($lang->all() as $item)
                       <option value="<?=$item['id']?>"><?=$item['name']?></option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                    <label>Kursun Səviyəsi</label>
                    <select class="form-control" name="level">
                      <option value="0">Seçin..</option>
                      @foreach ($level->all() as $item)
                       <option value="<?=$item['id']?>"><?=$item['name']?></option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label>Kursun Müəllifi</label>
                    <select class="form-control" name="teacher">
                      <option value="0">Seçin..</option>
                      @foreach ($author->all() as $item)
                       <option value="<?=$item['id']?>"><?=$item['name']?></option>
                      @endforeach
                    </select>
                  </div>
                 </div>
                  <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                    <label>Kursun Statusu</label>
                    <select class="form-control" name="status">
                      <option value="0">false</option>
                      <option value="1">true</option>
                      
                    </select>
                  </div>
                </div>
              </div>
              </div>
            </div>
        </div>
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border"></div>
            <!-- /.box-header -->
            <div class="box-body">
            <label>Kursun tesviri</label>
              <textarea class="form-control ckeditor" name="description"  rows='10' placeholder="Daxil elə ..."></textarea> 
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Təsdiqlə</button>
          <a href="" class="btn btn-default pull-right" style="display:inline-block; margin-right:10px;">Ləğv et</a>
        </div>
      </form>
    </div>
  </div>
@stop