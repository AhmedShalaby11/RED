#!/Python26/python
print "Content-type: text/html"
print
print "<html><head>"
print ""
print "</head><body>"
print "Hello."
print "</body></html>"


<script type="text/javascript">
    $(document).ready(function(){
    

            $.ajax({
                type: 'POST',
                url: 'drop.php',
                success: function(data) {
                  $('body').append(data);


                }
          
   });
});
</script>