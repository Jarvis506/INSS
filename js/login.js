$(function() {
    $('div.menus').delegate("a.login","click",function() {
        $(this).toggle();
        $(this).siblings('div').toggle();
    })
    $("div.login form").delegate("input:button","click",function(){
        $('form#loginAccount').ajaxForm({
            success:function(res){
                if(res['estado'] == "valido"){
                    window.location.reload();
                    console.log(res['estado']);
                }
                
            },
            dataType:'json', 
            resetForm: true
        }).submit();
    });

    $("div.form form").delegate("input:button","click",function(){
        $('form#cadastrar').ajaxForm({
            success:function(res){
                if(res['estado'] == "valido"){
                    window.location.reload();
                    console.log(res['estado']);
                } else{
                    // window.location.reload();
                     alert(res['estado']);
                 }
                
            },
            dataType:'json', 
            resetForm: false
        }).submit();
    });
});