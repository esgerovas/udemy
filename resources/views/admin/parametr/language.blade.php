@extends("layouts.admin_app")
@section('content')
      <div class="row" style="margin-top: 30px">
        <div class="col-md-6 col-md-offset-3">
          <div class="box">
            <div class="box-header with-border">
              <h3>Dərsin Dilləri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>{{-- 
                  <th style="width: 10px">#</th> --}}
                  <th>Dillərin adı</th>
                  <th style="width: 30px">Yenilə</th>
                  <th style="width: 30px">Sil</th>
                </tr>
                 @foreach($data as $lang)
                    <tr>
                        <form action="{{url('/admin/language/'.$lang->id)}}" method="post">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                          <td><textarea name="name" rows=1; style="width:100%; resize: none; border:0;" required>{{$lang->name}}</textarea></td>
                          <td> 
                            <input type="submit" name="submit" class="btn-sm btn-success" value="Yenile" style="border:0;">
                          </td>
                        </form>
                        <td>
                          <a href="{{url('/admin/language/'.$lang->id)}}" class="btn-sm btn-danger" style=" display:inline-block;">Sil</a>
                        </td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title text-primary" style="font-weight:600;">Elavə et</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus btn-sm btn-primary"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{url('/admin/language')}}" method="post"> 
                {{csrf_field()}}
                <div class="form-group">
                  <label>Dilin adı</label>
                  <input type="text" name="name" placeholder="Adı" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Təsdiqlə</button>
                <a href="" class="btn btn-default pull-right" style="display:inline-block; margin-right:10px;">Ləğv et</a>
              </form> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
@stop