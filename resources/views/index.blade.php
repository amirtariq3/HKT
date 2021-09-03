<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dependent Dropdown Example with demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Select State and get bellow Related City</div>
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="state" class="form-control" style="width:350px" id="country">
                    <option value="">--- Select State ---</option>
                    @foreach ($data as $d)
                        <option value="{{$d->id}}">{{$d->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Select City:</label>
                <select name="city" class="form-control" style="width:350px" id="city">
                </select>
            </div>
      </div>
    </div>
</div>


<script>
    $(document).ready(function() {
   $('#country').on('change', function() {
       var id = $(this).val();
       if(id) {
           $.ajax({
               url: "{{route("savedata","1")}}",
               type: "GET",
               dataType: "json",
               success:function(data) {
                   //console.log(data);
                 if(data){
                   $('#city').empty();
                   $('#city').focus;
                   $('#city').append('<option value="">-- Select City --</option>'); 
                   $.each(data, function(id, name){
                   $('select[name="city"]').append('<option value="'+ id +'">' + name.name+ '</option>');
               });
             }else{
               $('#city').empty();
             }
             }
           });
       }else{
         $('#city').empty();
       }
   });
});
</script>


</body>
</html>