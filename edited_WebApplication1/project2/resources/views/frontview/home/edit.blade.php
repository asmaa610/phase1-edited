
    <link href="{{asset('frontend')}}/assets/css/bootstrap.css" rel="stylesheet" />
     
    <link href="{{asset('frontend')}}/assets/css/font-awesome.css" rel="stylesheet" />
        
    <link href="{{asset('frontend')}}/assets/css/custom-styles.css" rel="stylesheet" />
    <link href="{{asset('frontend')}}/css2/stylesheet" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="{{asset('frontend')}}/assets/js2/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<style >

  *
{
  border: 0;
  box-sizing: content-box;
  color: inherit;
  font-family: inherit;
  font-size: inherit;
  font-style: inherit;
  font-weight: inherit;
  line-height: inherit;
  list-style: none;
  margin: 0;
  padding: 0;
  text-decoration: none;
  vertical-align: top;
}


h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }


html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }
</style>



    <h1> Update </h1>
    <hr>

    {!! Form::open(['url'=>'/update', 'method'=>'POST' , 'name'=>'editForm'] ) !!}
      <div class="form-group">
        <label for="usname">Change User name:</label>
        <input type="usname" class="form-control" id="usname" name="usname" value="{{ $editbyid->usname }}">
      </div>
      <div class="form-group">
        <label for="pass">Change Password:</label>
        <input type="pass" class="form-control" id="pass" value="{{ $editbyid->pass }}">
      </div>
       <input type="hidden" name="editbyid" value="{{ $editbyid->id }}">


      <button type="submit" class="btn btn-success btn-block">Update</button>
    {!! Form::close() !!}

<script >
  
     document.forms['editForm'].elements['usname'].value={{ $editbyid->usname }}


</script>


