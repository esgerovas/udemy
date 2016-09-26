@extends("layouts.admin_app")
@section('content')
<style type="text/css">
  .icons{
    position: relative;
  }
  .icons:hover .changeIcons{
    display: block;
  }
  .changeIcons{
    position: absolute;
    top: 30px;
    display: none;
    left:-5px;
  }
  .changeIcons:before{
    content: '';
    border-top: 10px solid transparent;
    border-left: 10px solid transparent;
    border-right: 2px solid gray;
    border-bottom: 2px solid gray;
    transform: rotate(225deg);
    position: absolute;
    top:-5px;
    left: 25px;
  }
  .changeIcons input{
    width: 120px;
    border-radius:3px;
    border:1px solid grey;
  }
  th, td{
    text-align:center;
  }
  table{
    font-size:16px;
  }
</style>
  <h1 class="text-center">Menular</h1>
    @foreach($data as $menu)
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="box box-primary">
            <div class="box-header with-border" style="display:block;">
              <table style="width:100%;">
                <tr>
                  <form action="{{url('/admin/menu/'.$menu->id)}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <td class="icons" style="width:40px;">
                      <i class="{{$menu->icon}}"></i>
                      <div class="changeIcons">
                        <input type="text" name="icon" value="{{$menu->icon}}" required>
                      </div>
                    </td>
                    <td ><textarea name="name" rows=1; style="width:100%; resize: none; border:0;font-weight:600; color:#367fa9; font-size:18px;" required>{{$menu->name}}</textarea></td>
                    <td style="width:60px;"> 
                     <input type="submit" name="submit" class="btn-sm btn-success" value="Yenile" style="border:0;">
                    </td>
                  </form>
                  <td style="width:40px;"><a href="{{url('/admin/menu/'.$menu->id)}}" class="btn-sm btn-danger" style=" display:inline-block;">Sil</a></td>
                  <td style="width:10px;">
                    <div class="box-tools">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                    <!-- /.box-tools -->
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table style="width:100%;" class="table table-bordered">
                <tr>
                  <th>Icon</th>
                  <th>Alt Menu adı</th>
                  <th>Yenilə</th>
                  <th>Sil</th>
                </tr>
                @foreach($menu->subcategories as $submenu)
                <tr>
                  <form action="{{url('/admin/submenu/'.$submenu->id)}}" method="post">
                  {{csrf_field()}}
                  {{ method_field('PUT') }}
                  <td class="icons" style="width:40px;">
                    <i class="{{$submenu->icon}}"></i>
                    <div class="changeIcons">
                      <input type="text" name="icon" value="{{$submenu->icon}}" required>
                    </div>
                  </td>
                  <td><textarea name="name" rows=1; style="width:100%; resize: none; border:0;" required>{{$submenu->name}}</textarea></td>
                  <td style="width:40px;"> 
                   <input type="submit" name="submit" class="btn-sm btn-success fa-input" value="&#xf044;" style="border:0; font-family:FontAwesome;">
                  </td>
                  </form>
                  <td style="width:40px;"><a href="{{url('/admin/submenu/'.$submenu->id)}}" class="btn-sm btn-danger" style=" display:inline-block;"><i class="fa fa-trash-o"></i></a></td>
                </tr>
                @endforeach
              </table>
   <!-- =================== Alt MENU ELAVE ELE============================ -->
              <div class="row" style="margin-top:10px">
                <div class="col-md-12">
                  <div class="box  collapsed-box box-solid">
                    <div class="box-header with-border">
                      <h5 class="box-title text-primary" style="font-weight:600; font-size:16px;">Alt Menu əlavə et</h5>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus btn-sm btn-primary"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <form action="{{url('/admin/menu/'.$menu->id.'/submenu')}}" method="post"> 
                        {{csrf_field()}}
                        <div class="form-group">
                          <label>İcon adı</label>
                          <input type="text" name="icon" placeholder="icon" class="form-control" required>
                          <label>Alt Menu adı</label>
                          <input type="text" name="name" placeholder="alt menu" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Təsdiqlə</button>
                        <a href="" class="btn btn-default pull-right" style="display:inline-block; margin-right:10px;">Ləğv et</a>
                      </form> 
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
             </div><!-- .row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
    @endforeach
    <!-- ====================MENU ELAVE ELE============================ -->
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title text-primary" style="font-weight:600;">Menu əlavə et</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus btn-sm btn-primary"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form action="{{url('/admin/menu')}}" method="post"> 
              {{csrf_field()}}
              <div class="form-group">
                <label>İcon adı</label>
                <input type="text" name="icon" placeholder="İcon" class="form-control" required>
                <label>Menu adı</label>
                <input type="text" name="name" placeholder="Menu" class="form-control" required>
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