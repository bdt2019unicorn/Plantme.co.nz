function LoginAndSignUp(button)
{
    var support_functions= 
    {
        MoveTheCloudAnimation: function()
        {
            var left = Number($("#left_cloud").css("left").replace("px",""));  
            var right = Number($("#right_cloud").css("right").replace("px","")); 
            var moving = 10;
            var moving_time = 50;  
            var windows_width = window.innerWidth; 
            var test_value = -windows_width/1.6; 

            return new Promise 
            (
                (resolve,reject)=>
                {
                    var interval = setInterval
                    (
                        () => 
                        {
                            left-=moving; 
                            right-=moving; 
        
                            $("#left_cloud").css("left",left+"px");
                            $("#right_cloud").css("right",right+"px"); 

                            if(left<test_value && right<test_value)
                            {
                                clearInterval(interval); 
                                $("#left_cloud").css("display","none");
                                $("#right_cloud").css("display","none"); 
                                resolve(); 
                            }
                        }, moving_time
                    );
                }
            );
        }, 
        ShowGreenEarth: function()
        {
            return new Promise
            (
                (resolve,reject)=>
                {
                    var timeout = 2000; 
                    setTimeout
                    (
                        () => 
                        {
                            var img_html = '<div class="col-sm-12 text-center"> <img class="col-sm-6" src="/img/Web1HomePage/Home/green_earth.png"></div>'; 
                            var div_row = $("#content .row"); 
                            $(div_row).html(img_html); 
                            var location_href = $(button).attr("data-location_href"); 
                            resolve(location_href); 
                        }, 
                    timeout
                    );
                }
            ); 
        }, 
        RedirectToPage(location_href)
        {
            return new Promise 
            (
                (resolve,reject)=>
                {
                    var timeout = 6000; 
                    setTimeout
                    (
                        function()
                        {
                            window.location.href = location_href; 
                            resolve(); 
                        }, 
                        timeout
                    ); 
                }
            )

        }
    }; 


    var action = support_functions.MoveTheCloudAnimation(); 
    action
    .then(support_functions.ShowGreenEarth)
    .then(support_functions.RedirectToPage); 
}

