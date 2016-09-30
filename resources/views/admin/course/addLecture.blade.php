@extends("layouts.admin_app")
@inject('course', 'App\Course')
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-12"> 
      <h1 class="text-center" style="margin-bottom:50px;">Bölməyə mühazirə elavə et</h1>
       <form action="{{url('/admin/lecture/add')}}" method="post" enctype="multipart/form-data"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
              <div class="box-header with-border"></div>
              <!-- /.box-header -->
              <div class="box-body"> 
                <div class="form-group">
                  <label>Lecture adı</label>
                  <input type="text" name="name" class="form-control" placeholder="Daxil edin..." required>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Video yükləmə</label>
                      <input type="file" id="myvideo" name="video_link" class="form-control" placeholder="Daxil edin...">
                      <input type="hidden" name="duration" id="duration" value="">
                      <p id="dur"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Və Ya Video youtube linki</label>
                      <input type="text" name="youtube_link" class="form-control" placeholder="Daxil edin..." >
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Mühazirə haqqında fikirləriniz</label>
                  <textarea name="text" class="form-control" rows="4" placeholder="Daxil edin ..."></textarea>
                </div>
                 <div class="form-group">
                  <label>Mühazirənin sırası</label>
                  <input type="number" name="order" class="form-control" placeholder="Daxil edin..." required>
                </div>
                <div class="form-group">
                  <label>Mühazirənin Yerləşdiyi Kurs</label>
                  <select class="form-control" name="course" id='course'>
                    <option value="0">Seçin..</option>
                    @foreach ($course->all() as $item)
                     <option value="<?=$item['id']?>"><?=$item['title']?></option>
                    @endforeach                
                  </select>
                </div>
                 <div class="form-group">
                  <label>Muhazirenin Yerləşdiyi Bölmə</label>
                  <select class="form-control" name="section" id="section">
                    <option>Seçin..</option>
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
  <script type="text/javascript">
  var fileEl = document.getElementById("myvideo");
    fileEl.onchange = function(e) {
      var file = e.target.files[0],                               // selected file
          mime = file.type,                                       // store mime for later
          rd = new FileReader();                                  // create a FileReader
          rd.onload = function(e) {                                   // when file has read:
        var blob = new Blob([e.target.result], {type: mime}),     // create a blob of buffer
            url = (URL || webkitURL).createObjectURL(blob),       // create o-URL of blob
            video = document.createElement("video");              // create video element

        video.preload = "metadata";                               // preload setting
        video.addEventListener("loadedmetadata", function() { 
          obj=secondsToTime(video.duration);
          document.getElementById('dur')
              .innerHTML = "Duration: " + obj.h+"h : " + obj.m+"m : "+ obj.s+"s";
              document.getElementById('duration')
              .value =obj.h+":" + obj.m+":"+ obj.s;   // show duration
          (URL || webkitURL).revokeObjectURL(url);                // clean up
          // ... continue from here ...
        });
        video.src = url;                                          // start video load
      };
      rd.readAsArrayBuffer(file);                                 // read file object
    };
    function secondsToTime(x){
      secs = Math.round(x);
      var hours = Math.floor(secs / (60 * 60));
      var divisor_for_minutes = secs % (60 * 60);
      var minutes = Math.floor(divisor_for_minutes / 60);
      var divisor_for_seconds = divisor_for_minutes % 60;
      var seconds = Math.ceil(divisor_for_seconds);
      var obj = {
          "h": hours,
          "m": minutes,
          "s": seconds
      };
      return obj;
    }
  </script>

@stop
