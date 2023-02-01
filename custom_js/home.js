$(document).ready(function(){
    $(".ourflowertaps").click(function(){
        $tabvalue = $(this).attr("data-items");
        // $parent = $(this).parent();
        // console.log($parent);
        $(this).parent().addClass("active").siblings().removeClass("active");
        if($tabvalue === "all"){
            // console.log($(".our-flower-item-container"))
            $(".our-flower-item-container").show("slow").css({
                "transform" : "scale(1)",
                "transform-origin" : "center",
            });
        }else {
            $(".our-flower-item-container").hide();
            $(".our-flower-item-container").not("."+$tabvalue).css({
                "transform" : "scale(0)",
                "transform-origin" : "center",
            });
            $(".our-flower-item-container").filter("."+$tabvalue).show("slow").css({
                "transform" : "scale(1)",
                "transform-origin" : "center",
            });
        }
    })
})