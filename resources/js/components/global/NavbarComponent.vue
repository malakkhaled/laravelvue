<template>
  <div>
 <!--start section scrolltop-->
   <a href="#" class="scrolltop">
     <i class="fas fa-chevron-up"></i>
   </a>


  <!--end section scrolltop-->
    <nav class="navbar navbar-expand-lg">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="list-unstyled list-inline mr-auto">
          <li class="list-inline-item num-item">
            <i class="fas fa-shopping-cart svg" data-scroll="shop"></i>
            <span class="num">0</span>
          </li>
          <li class="list-inline-item" style="border-left: 1px solid;">
            <i style=" position: relative;
    left: 20px;" class="far fa-user"></i>
          </li>
          <li class="list-inline-item">
            <i class="fas fa-search svg" data-scroll="search"></i>
          </li>
        </ul>
        <a class="navbar-brand mr-1" href="#">
          <img width="100px" src="assets/images/logo/logo1.png" />
          <span>. Shop</span>
        </a>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a  class="nav-link" >

                الرئيسية
                <span class="sr-only">(current)</span>

            </a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >الماركات</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Koton</a>
              <a class="dropdown-item" href="#">Zara</a>
              <a class="dropdown-item" href="#">Defacto</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >نساء</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">حذاء</a>
              <a class="dropdown-item" href="#">قميص</a>
              <a class="dropdown-item" href="#">بنطال</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >رجال</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">حذاء</a>
              <a class="dropdown-item" href="#">قميص</a>
              <a class="dropdown-item" href="#">بنطال</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >أطفال</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">حذاء</a>
              <a class="dropdown-item" href="#">قميص</a>
              <a class="dropdown-item" href="#">بنطال</a>
            </div>
          </li>
                 <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >مستلزمات</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">منزلية</a>
              <a class="dropdown-item" href="#">طبخ</a>
              <a class="dropdown-item" href="#">عناية</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">من نحن</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">اتصل بنا</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="fixed_menu">
        <span> <i class="fas fa-times close"></i></span>
    <div class="content text-center">
        <div class="search" id="search">
            <h1>شاركنا. عن ماذا تبحث ؟ </h1>
            <form>
               <input type="text" class="form-control" placeholder="سعداء لمساعدتك">
            </form>

        </div>


    <div class="shop" id="shop">
        <div class="full-list">
             <ul class="list-unstyled">
              <li class="list-inline-item"> <img src="assets/images/item/item4.jpg" /></li>
              <li class="list-inline-item">
                  <ul class="list-unstyled ulinside">
                      <li>سروال مفصل بالجيوب</li>
                       <li><span>2 <i class="fas fa-times"></i></span></li>
                        <li><span><a href="">حذف</a></span></li>

                  </ul>
              </li>
              <li class="list-inline-item" id="price">75.00 د.ل.</li>
            </ul>

            <div class="total">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h3>الإجمالي :</h3>
                    </div>
                     <div class="col-md-6 col-lg-6">
                        <span id="totalprice">75.00 د.ل.</span>
                    </div>
                </div>
                <div class="btn-group">
          <button class="btn text-center bg" >عرض السلة</button>
        <button class="btn text-center">إتمام الطلب</button>

                </div>


            </div>

        </div>

            <p style="display:none">لا يوجد بضائع في السلة حاليا. </p>
        </div>

    </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return{
        }

    },
  mounted() {
    // start navbar with jq
    this.$nextTick(() => {

      $(window).scroll(function() {

      //navbarbackground
        if ($(window).scrollTop() > 200) {
          $(".navbar-expand-lg").css({
            background: "#fff",
           boxShadow : "0px 1px 5px 0 rgba(0, 0, 0, 0.05)"
          });
        } else if ($(window).scrollTop() == 0) {
          $(".navbar-expand-lg").css({
            background: "none",
            boxShadow : "none"

          });
        }
      });

      //dropdwon
      $(".dropdown a").hover(function() {
        $(this)
          .next(".dropdown-menu")
          .fadeIn();
      });
      $(".dropdown").on("mouseleave", function() {
        $(".dropdown-menu").fadeOut(500);
      });
      // end navbar with jq



//fixed menu

$(".navbar .svg").on("click",function(){
  $(".fixed_menu").animate({
    left:0
  },500);

});
$(".fixed_menu .close").on('click',function(){
  $('.fixed_menu').animate({
      left : "-450px"
  },500);


});

$(".navbar .svg").on("click",function(){
   $("#" + $(this).data("scroll")).show().siblings().hide();
});


//fixed menu

$(document).ready(function(){

//check the scroll top
var scrollButton = $(".scrolltop");

$(window).scroll(function(){

   if($(this).scrollTop() >= 700){

       scrollButton.show();
   }else{
       scrollButton.hide();
   }
});

//when you click on the button the body went to biging
scrollButton.click(function(){

  $("html,body").animate({ scrollTop: 0},600);
});
    });
   });

  }
};
</script>
