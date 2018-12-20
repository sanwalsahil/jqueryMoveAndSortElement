<html>
    <head>
        <title>jquery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
       
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 bg-primary text-white text-center my-5">
                            <h2>Click Text To Move It To Next Block</h2>
                        </div>
                    <div class="col-md-5 border border-primary rounded bg-light shadow content_div" id="lt_box">
                        <div class="col-md-12 border border-primary rounded bg-success text-white my-3 py-1" onclick="move($(this))">Sahil - ( Click To Move )</div>
                        <div class="col-md-12 border border-primary rounded bg-success text-white my-3 py-1 " onclick="move($(this))">Alok - ( Click To Move )</div>
                        <div class="col-md-12 border border-primary rounded bg-success text-white my-3 py-1" onclick="move($(this))">Abhey - ( Click To Move )</div>
                        <div class="col-md-12 border border-primary rounded bg-success text-white my-3 py-1" onclick="move($(this))">Rafi - ( Click To Move )</div>
                        <div class="col-md-12 border border-primary rounded bg-success text-white my-3 py-1" onclick="move($(this))">Vikas - ( Click To Move )</div>
                        <div class="col-md-12 border border-primary rounded bg-success text-white my-3 py-1" onclick="move($(this))">Prakhar - ( Click To Move )</div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="col-md-12" style="position:relative;top:45%;font-size:36px"><i class="fas fa-exchange-alt"></i></div>
                    </div>
                    <div class="col-md-5 border border-primary rounded bg-light shadow content_div" id="rt_box">
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function(){
                $('#lt_box div').sort(function(a,b){
                    return $(a).text().localeCompare($(b).text());
                }).appendTo('#lt_box');
        });
        function move(elem){
            var id = $(elem).parent().attr('id');
            
            if(id == 'lt_box'){
                $('#rt_box').append($(elem));
            }else{
                $('#lt_box').append($(elem));
            }
            
            $('.content_div').each(function(){
                $(this).children().sort(function(a,b){
                    return $(a).text().localeCompare($(b).text());
                }).appendTo($(this));
            });
            
        }
    </script>
</html>

