<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div id="cdlist">

</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function(){

            $.getJSON('cdsapi',function (data) {
                var result ="<ul>";
                $.each(data, function(index,cd){
                    result += "<li>" + cd.titel + " : " + cd.interpret + "</li>";
                });
                result += "</ul>";

                $('#cdlist').html(result);
            });

    });
</script>
</body>
</html>