$(document).ready(function(){
    $(".profile-design").click(function(){
        var atr_value = $(this).attr("href");
        $.ajax({
            type:"POST",
            url: "http://ajinfo.in/storeDesign.php",
            data:{
              url: atr_value  
            },
            success:function(response)
            {
                alert(response);
            }
        });
        
    });
});