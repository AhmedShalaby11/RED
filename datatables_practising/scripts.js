
<script type="text/javascript">
$(document).ready(function() {
  $('#example tr').click(function(){
    $(this).css("background-color","lightblue");
  })
});

</script>


 <script type="text/javascript">
  $(document).ready(function() {
    $('li').click(function(){



      if ($(this).attr('name')== "data"){

// $('#li_data').one("click",function(){
//
//
//     });
// });


        }
        else if ($(this).attr('name')== "action") {
$('#ul_div_body').append("<h3>this is action</h3>")
        }
        else if ($(this).attr('name')== "messages") {
$('#ul_div_body').append("<h3>this is messages</h3>")
        }

    })

  });

</script>
