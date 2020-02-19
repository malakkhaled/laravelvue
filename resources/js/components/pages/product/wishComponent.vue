<template>
  <div>
    <div class="slider">
      <div class="overlay"></div>
      <img src="assets/images/back/back4.jpg" />
      <h2>قسم المفضلة</h2>
    </div>
<div class="msg">
    <div class="container">
    <p>تم حذف العنصر بنجاح .</p>
    </div>
</div>
    <div class="wishlist">
      <div class="container">
        <div class="row border-bottom">
          <div class="col-md-12 col-lg-5">
            <h3>إسم المنتج</h3>
          </div>
          <div class="col-md-12 col-lg-3">
            <h3>السعر</h3>
          </div>
          <div class="col-md-12 col-lg-4">
            <h3>الحالة</h3>
          </div>
        </div>
        <div class="items-list">
          <div class="row">
            <div class="col-md-12 col-lg-5 mr">
              <ul class="list-unstyled">
                <li class="list-inline-item svg-back">  <i class="fas fa-times"></i></li>
                <li class="list-inline-item">

                  <img src="assets/images/item/item4.jpg" />
                </li>
                <li class="list-inline-item ">سروال مفصل بالجيوب</li>
              </ul>
            </div>
            <div class="col-md-12 col-lg-3 mr">
             <span>75.00 د.ل.</span>
            </div>
            <div class="col-md-12 col-lg-2 mr">

                <span>
                  متوفر
                </span>

            </div>
             <div class="col-md-12 col-lg-2 mr">

                <span>
                  <a href class="btn">إضافة إلى السلة</a>
                </span>

            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</template>

<script>
export default {
     mounted() {
    this.$nextTick(() => {

              $(".wishlist .svg-back i").on("click",function(){
               $('.wishlist').fadeOut();
               $('.msg').fadeIn();

           });



    });
  }
};
</script>
