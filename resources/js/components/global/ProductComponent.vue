<template>
  <div>
    <div class="product new">
      <div class="row">
        <div class="col-xs-12 col-lg-10">
          <div class="row content">
            <div class="col-xs-12 col-lg-4">
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
            <div class="col-xs-12 col-lg-4">
              <div class="up">
                <img src="assets/images/item/item4.jpg" />
                <div class="fixed-back">
                  <span class="state">!بيعت</span>
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
            <div class="col-xs-12 col-lg-4">
              <div class="up">
                <img src="assets/images/item/item4.jpg" />
                <div class="fixed-back">
                  <span class="state">!بيعت</span>
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

        <div class="col-xs-12 col-lg-2 right">
          <h4>ملابس نسائية</h4>
          <ul class="list-unstyled elemnts">
            <li class="eleup">
              <h5>فساتين</h5>
              <ul class="list-unstyled">
                <li>قصيرة</li>
                <li>طويلة</li>
              </ul>
            </li>
            <li class="eleup">
              <h5>فساتين</h5>
              <ul class="list-unstyled">
                <li>قصيرة</li>
                <li>طويلة</li>
              </ul>
            </li>
          </ul>

          <h4>الألوان</h4>
          <ul class="list-unstyled colors">
            <li class="color"></li>
            <li class="color"></li>
          </ul>

          <h4>الأحجام</h4>
          <ul class="list-unstyled size">
            <li>
             <span>m</span>
            </li>
            <li>
              <span>L</span>
            </li>
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
