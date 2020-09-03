require('./bootstrap');
$(document).ready(function () {
    if($(window).scrollTop() > 150){
    
        $(".cart-button-float").addClass("active");
    }else{
        $(".cart-button-float").removeClass("active");

    }

    $(window).scroll(function(){
      
        if($(window).scrollTop() > 150){
    
            $(".cart-button-float").addClass("active");
        }else{
            $(".cart-button-float").removeClass("active");

        }
    })

    //کلید باز و بسته کردن منوی سمت چپ
    $(".navbar-toggler").click(function () {
        $(".slideBar").toggleClass("active");
        $(".main_over").toggleClass("active");

    })

    //بستن منوی سمت چپ
    $(".close-slidebar").click(function () {
        $(".slideBar").removeClass("active");
        $(".main_over").removeClass("active");

    })

    //باز و بسته کردن سبد خرید
    $(".cart-btn").click(function () {
        $(".cart").toggleClass("active");
        $(".main_over").toggleClass("active");

    })

    //کلید بستن سبد خرید
    $(".close-cart").click(function () {
        $(".cart").removeClass("active");
        $(".main_over").removeClass("active");


    })

    $(".main_over").click(function(){
        $(".cart").removeClass("active");
        $(".main_over").removeClass("active");
        $(".slideBar").removeClass("active");

    })
    //مقدار اولیه نمایش تعداد محصول روی آیکون سبد خرید
    var count = 0;
    $(".badge").html(count);



    var item = $(".item");     //آیتم های محصولات درون سبد
    var NOsangak = 0;         //تعداد اولیه سنگک ها
    var NOlavash = 0;        //تعداد اولیه لواش
    var NObarbary = 0;      //تعداد اولیه بربری ها
    var NOkonged = 0;      //تعداد اولیه نا کنجدی ها

    $("[title^='sangak']").val(NOsangak);       //مقدار اولیه درون input سنگک قرار داده میشود
    $("[title^='lavash']").val(NOlavash);      //مقدار اولیه درون input لواش قرار داده میشود
    $("[title^='barbary']").val(NObarbary);   //مقدار اولیه درون input بربری قرار داده میشود
    $("[title^='konged']").val(NOkonged);    //مقدار اولیه درون input نان کنجدی قرار داده میشود




    var inputs = $(".item-counter-input-inner "); //ورودی های هر آیتم

    var price = $(".price b"); //قیمت آیتم ها که از درون سلکتور انتخاب شده برداشته میشود

    var totalprice = 0; // مقدار اولیه قیمت نهایی و هزینه سفارش

    var pricesangak = Number($(price[0]).html());    // قیمت هر دانه سنگک
    var pricelavash = Number($(price[1]).html());   //قیمت هر دانه لواش
    var pricebarbary = Number($(price[2]).html()); //قیمت هر دانه بربری
    var pricekonged = Number($(price[3]).html()); //قیمت هر دانه نان کنجدی

    var totalpricesangak = 0;     //مقدار اولیه قیمت کل سنگک
    var totalpricelavash = 0;    //مقدار اولیه قیمت کل سنگک
    var totalpricebarbary = 0;  //مقدار اولیه قیمت کل سنگک
    var totalpricekonged = 0;  //مقدار اولیه قیمت کل سنگک

    for (i = 0; i < item.length; i++) {
        if (!($(item[i]).hasClass("active"))) {
           totalprice = 0;
           $("#total-cost").html(totalprice)

        } 
    }

    $(".info-3 button").click(function () {    //اگر کلید افزرودن به سبد زده شود این قسمت اجرا میشود

        var idbutton = $(this).attr("id");   //بدست آوردن آیدی کلید زده شده , دارای چهار مقدار sangak,lavash,barbary,konged

        var over = $(".info-3 .over");     //دایو مربوط به اضافه شدن به سبد 

        $(".empty-cart").hide();

        for (i = 0; i < item.length; i++) {

            var itemClassname = $(item[i]).attr('class');

         

            if ($(item[i]).hasClass("active") && itemClassname.indexOf(idbutton) > 2) {

                if (itemClassname.indexOf("sangak") > 2) {
                    NOsangak++;
                    $(inputs[i]).val(NOsangak);
                }

                if (itemClassname.indexOf("lavash") > 2) {
                    NOlavash += 10;

                    $(inputs[i]).val(NOlavash);
                }
                if (itemClassname.indexOf("barbary") > 2) {
                    NObarbary++;

                    $(inputs[i]).val(NObarbary);
                }
                if (itemClassname.indexOf("konged") > 2) {
                    NOkonged++;

                    $(inputs[i]).val(NOkonged);
                }

            }


            if (!($(item[i]).hasClass("active")) && itemClassname.indexOf(idbutton) > 2) {
                $(item[i]).addClass("active");
                if ($(item[i]).hasClass("sangak-item")) {
                    NOsangak++;
                    if (NOsangak > 50) {
                        NOsangak = 50;
                    }
                    count++;
                    $(".badge").html(count);

                    $(inputs[0]).val(NOsangak);
                } else if ($(item[i]).hasClass("lavash-item")) {
                    NOlavash += 10;
                    if (NOlavash > 100) {
                        NOlavash = 100;
                    }
                    count++;
                    $(".badge").html(count);

                    $(inputs[1]).val(NOlavash);

                } else if ($(item[i]).hasClass("barbary-item")) {
                    NObarbary++;
                    if (NObarbary > 50) {
                        NObarbary = 50;
                    }
                    count++;
                    $(".badge").html(count);

                    $(inputs[2]).val(NObarbary);

                } else if ($(item[i]).hasClass("konged-item")) {
                    NOkonged++;
                    if (NOkonged > 50) {
                        NOkonged = 50;
                    }
                    count++;
                    $(".badge").html(count);

                    $(inputs[3]).val(NOkonged);

                }

            }
        }



        for (j = 0; j < over.length; j++) {
            if ($(over[j]).hasClass(idbutton)) {
                $(over[j]).addClass("active");
                setTimeout(function () {
                    $(over).removeClass("active");
                }, 1000);
            }
        }

        totalpricesangak = pricesangak * NOsangak;
        totalpricelavash = pricelavash * NOlavash;
        totalpricebarbary = pricebarbary * NObarbary;
        totalpricekonged = pricekonged * NOkonged;

        totalprice = totalpricesangak + totalpricelavash + totalpricebarbary + totalpricekonged;
        $("#total-cost").html(totalprice);


    });



    $(".item-counter-up-inner").click(function () {
        var upbutton = $(this);
        for (j = 0; j < upbutton.length; j++) {
            var namespan = $(upbutton[j]).prop("class");
            if (namespan.indexOf("sangak") > 2) {
                NOsangak++;
                if (NOsangak > 50) {
                    NOsangak = 50;
                }
                $(inputs[0]).val(NOsangak);
            } else if (namespan.indexOf("lavash") > 2) {
                NOlavash += 10;
                if (NOlavash > 100) {
                    NOlavash = 100;
                }
                $(inputs[1]).val(NOlavash);

            } else if (namespan.indexOf("barbary") > 2) {
                NObarbary++;
                if (NObarbary > 50) {
                    NObarbary = 50;
                }
                $(inputs[2]).val(NObarbary);
            } else if (namespan.indexOf("konged") > 2) {
                NOkonged++;
                if (NOkonged > 50) {
                    NOkonged = 50;
                }

                $(inputs[3]).val(NOkonged);
            }
        }
        totalpricesangak = pricesangak * NOsangak;
        totalpricelavash = pricelavash * NOlavash;
        totalpricebarbary = pricebarbary * NObarbary;
        totalpricekonged = pricekonged * NOkonged;
        totalprice = totalpricesangak + totalpricelavash + totalpricebarbary + totalpricekonged;
        $("#total-cost").html(totalprice);

    })


    $(".item-counter-down-inner").click(function () {
        var upbutton = $(this);
        for (j = 0; j < upbutton.length; j++) {
            var namespan = $(upbutton[j]).prop("class");
            if (namespan.indexOf("sangak") > 2) {
                NOsangak--;
                if (NOsangak < 1) {
                    NOsangak = 0;
                    $(item[0]).removeClass("active");
                    count--;
                    $(".badge").html(count);

                    for (i = 0; i < item.length; i++) {
                        if (!($(item[i]).hasClass("active"))) {
                            $(".empty-cart").show();
                        } else {
                            $(".empty-cart").hide();

                        }
                    }
                }
                var newpricesangak = NOsangak;
                console.log(newpricesangak);
                totalpricesangak = pricesangak * newpricesangak;


                $(inputs[0]).val(NOsangak);
            } else if (namespan.indexOf("lavash") > 2) {
                NOlavash -= 10;
                if (NOlavash < 10) {
                    NOlavash = 0;
                    $(item[1]).removeClass("active");
                    count--;
                    $(".badge").html(count);
                    for (i = 0; i < item.length; i++) {
                        if (!($(item[i]).hasClass("active"))) {
                            $(".empty-cart").show();
                        } else {
                            $(".empty-cart").hide();

                        }
                    }


                }
                var newpricelavash = NOlavash;
                console.log(newpricelavash);
                totalpricelavash = pricelavash * newpricelavash;

                $(inputs[1]).val(NOlavash);
            } else if (namespan.indexOf("barbary") > 2) {
                NObarbary--;
                if (NObarbary < 1) {
                    NObarbary = 0;
                    $(item[2]).removeClass("active");
                    count--;
                    $(".badge").html(count);
                    for (i = 0; i < item.length; i++) {
                        if (!($(item[i]).hasClass("active"))) {
                            $(".empty-cart").show();
                        } else {
                            $(".empty-cart").hide();

                        }
                    }


                }
                var newpricebarbary = NObarbary;
                console.log(newpricebarbary);

                totalpricebarbary = pricebarbary * newpricebarbary;

                $(inputs[2]).val(NObarbary);
            } else if (namespan.indexOf("konged") > 2) {
                NOkonged--;
                if (NOkonged < 1) {
                    NOkonged = 0;
                    $(item[3]).removeClass("active");
                    count--;
                    $(".badge").html(count);
                    for (i = 0; i < item.length; i++) {
                        if (!($(item[i]).hasClass("active"))) {
                            $(".empty-cart").show();
                        } else {
                            $(".empty-cart").hide();

                        }
                    }


                }
                var newpricekonged = NOkonged;
                console.log(newpricekonged);

                totalpricekonged = pricekonged * newpricekonged;

                $(inputs[3]).val(NOkonged);
            }
        }

        totalprice = totalpricesangak + totalpricelavash + totalpricebarbary + totalpricekonged;
        $("#total-cost").html(totalprice);
    })


    $(".sangak-item .trash-icon").click(function () {
        $("[title^='sangak']").val(NOsangak);
        count--;
        if (count < 0) {
            count = 0;
        }
        NOsangak = 0;
        totalpricesangak = 0;
        totalprice = totalpricesangak + totalpricelavash + totalpricebarbary + totalpricekonged;
        $("#total-cost").html(totalprice);
        $(inputs[0]).val(NOsangak);
        $(item[0]).removeClass("active");

        $("#total-cost").html(totalprice)
        $(".badge").html(count);
        for (i = 0; i < item.length; i++) {
            if (!($(item[i]).hasClass("active"))) {
                $(".empty-cart").show();
            } else {
                $(".empty-cart").hide();

            }
        }

    })


    $(".lavash-item .trash-icon").click(function () {
        $("[title^='lavash']").val(NOlavash);
         count--;
        if (count < 0) {
            count = 0;
        }
        NOlavash = 0;
        totalpricelavash= 0;
        totalprice = totalpricesangak + totalpricelavash + totalpricebarbary + totalpricekonged;
        $("#total-cost").html(totalprice);

        $(inputs[1]).val(NOlavash);
        $(item[1]).removeClass("active");
        $("#total-cost").html(totalprice)
        $(".badge").html(count);

        for (i = 0; i < item.length; i++) {
            if (!($(item[i]).hasClass("active"))) {
                $(".empty-cart").show();
            } else {
                $(".empty-cart").hide();

            }
        }

    })


    $(".barbary-item .trash-icon").click(function () {
        $("[title^='barbary']").val(NObarbary);

         count--;
        if (count < 0) {
            count = 0;
        }
        NObarbary = 0;
        totalpricebarbary = 0;
        totalprice = totalpricesangak + totalpricelavash + totalpricebarbary + totalpricekonged;
        $("#total-cost").html(totalprice);

        $(inputs[2]).val(NObarbary);
        $(item[2]).removeClass("active");
        $("#total-cost").html(totalprice)
        $(".badge").html(count);
        for (i = 0; i < item.length; i++) {
            if (!($(item[i]).hasClass("active"))) {
                $(".empty-cart").show();
            } else {
                $(".empty-cart").hide();

            }
        }

    })


    $(".konged-item .trash-icon").click(function () {
        $("[title^='lavash']").val(NOlavash);
         count--;
        if (count < 0) {
            count = 0;
        }
        NOkonged = 0;
        totalpricekonged = 0;
        totalprice = totalpricesangak + totalpricelavash + totalpricebarbary + totalpricekonged;
        $("#total-cost").html(totalprice);

        $(inputs[3]).val(NOkonged);
        $(item[3]).removeClass("active");

        $("#total-cost").html(totalprice)
        $(".badge").html(count);

        for (i = 0; i < item.length; i++) {
            if (!($(item[i]).hasClass("active"))) {
                $(".empty-cart").show();
            } else {
                $(".empty-cart").hide();

            }
        }

    })

})//پایان 