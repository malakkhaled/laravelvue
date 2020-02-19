<template>
  <div class="new">
    <div class="row padding">
      <div class="col-lg-6 ml-auto">
        <span>
          <a href>كل المنتجات</a>
        </span>
      </div>
      <div class="col-lg-6 mr-auto">
        <p class="h1">!!جديد منتجاتنا</p>
      </div>
    </div>
    <div class="container text-center">
      <div class="row content">
        <div class="col-xs-12 col-lg-3">
          <div class="up">
            <img src="assets/images/item/item4.jpg" />
            <div class="fixed-back">
              <span class="state">بيعت!</span>
              <div class="icon">
                <i class="far fa-heart"></i>
              </div>
              <div class="add">
                <p><a href="">إضافة إلى السلة</a></p>
              </div>
            </div>
          </div>

          <h5>سروال مفصل بالجيوب</h5>

          <span>75.00 د.ل.</span>
          <ul class="list-unstyled">
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
          </ul>
        </div>
         <div class="col-xs-12 col-lg-3">
           <div class="up">
            <img src="assets/images/item/item4.jpg" />
            <div class="fixed-back">
              <span class="state">بيعت!</span>
              <div class="icon">
                <i class="far fa-heart"></i>
              </div>
              <div class="add">
                <p><a href="">إضافة إلى السلة</a></p>
              </div>
            </div>
          </div>

          <h5>سروال مفصل بالجيوب</h5>

          <span>75.00 د.ل.</span>
          <ul class="list-unstyled">
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$nextTick(() => {
      //start change image in section speical

      function changeImg(selector) {
        $(selector).each(function() {
          $(this).hover(function() {
            $(this).next(".fixed-back").show();

          });
        });
      }
      changeImg(".new .content img");

      $(".new .content .up").on("mouseleave",function(){
         $(".new .content img").next(".fixed-back").hide();
      });
    });
  }
};
</script>
