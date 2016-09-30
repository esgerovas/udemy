@extends("layouts.admin_app")
@inject('course', 'App\Course')
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-12"> 
      <h1 class="text-center" style="margin-bottom:50px;">Kursa Bölmə əlavə et</h1>
      <form action="{{url('/admin/section/add')}}" method="post">
      {{csrf_field()}}
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
              <div class="box-header with-border"></div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Bölmənin adı</label>
                  <input type="text" name="name" class="form-control" placeholder="Daxil elə..." required>
                </div>
                 <div class="form-group">
                  <label>Bölmənin sırası</label>
                  <input type="number" name="order" class="form-control" placeholder="Daxil elə..." required>
                </div>
                <div class="form-group">
                  <label>Bölmənin Yerləşdiyi Kurs</label>
                  <select class="form-control" name="course">
                    <option value="0">Seçin..</option>
                      @foreach ($course->all() as $item)
                       <option value="<?=$item['id']?>"><?=$item['title']?></option>
                      @endforeach 
                  </select>  
                </div>
                <button type="submit" class="btn btn-primary pull-right">Təsdiqlə</button>
                <a href="/admin" class="btn btn-default pull-right" style="display:inline-block; margin-right:10px;">Ləğv et</a>
              </div>
              </div>
              </div>
      </form>
    </div>
  </div>
@stop