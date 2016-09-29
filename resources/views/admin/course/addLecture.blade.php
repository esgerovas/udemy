@extends("layouts.admin_app")
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-12"> 
      <h1 class="text-center" style="margin-bottom:50px;">Bölməyə mühazirə elavə et</h1>
      <form>
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
              <div class="box-header with-border"></div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Mühazirənin adı</label>
                  <input type="text" name="name" class="form-control" placeholder="Daxil elə..." required>
                </div>
                <div class="form-group">
                  <label>Mühazirə haqqında fikirləriniz</label>
                  <textarea name="headline" class="form-control" rows="4" placeholder="Daxil elə ..."></textarea>
                </div>
                 <div class="form-group">
                  <label>Mühazirənin sırası</label>
                  <input type="number" name="order" class="form-control" placeholder="Daxil elə..." required>
                </div>
                <div class="form-group">
                  <label>Muhazirenin Yerləşdiyi Kurs</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>  
                </div>
                 <div class="form-group">
                  <label>Muhazirenin Yerləşdiyi Bölmə</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>  
                </div>
                <button type="submit" class="btn btn-primary pull-right">Təsdiqlə</button>
                <a href="" class="btn btn-default pull-right" style="display:inline-block; margin-right:10px;">Ləğv et</a>
              </div>
      </form>
    </div>
  </div>
@stop