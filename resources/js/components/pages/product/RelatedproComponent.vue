<template>
  <div class="new">
    <h2 class="h1 text-center">منتجات ذات صلة</h2>
    <div class="back-owl d-none d-sm-block">

        <carousel>
          <div class="content">
            <div class="up">
              <img src="assets/images/item/item4.jpg" />
              <div class="fixed-back">
                <span class="state">بيعت!</span>
                <div class="icon">
                  <i class="far fa-heart"></i>
                </div>
                <div class="add">
                  <p>
                    <a href>إضافة إلى السلة</a>
                  </p>
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

          <div class="content">
            <div class="up">
              <img src="assets/images/item/item4.jpg" />
              <div class="fixed-back">
                <span class="state">بيعت!</span>
                <div class="icon">
                  <i class="far fa-heart"></i>
                </div>
                <div class="add">
                  <p>
                    <a href>إضافة إلى السلة</a>
                  </p>
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

         <div class="content">
            <div class="up">
              <img src="assets/images/item/item4.jpg" />
              <div class="fixed-back">
                <span class="state">بيعت!</span>
                <div class="icon">
                  <i class="far fa-heart"></i>
                </div>
                <div class="add">
                  <p>
                    <a href>إضافة إلى السلة</a>
                  </p>
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
                  <div class="content">
            <div class="up">
              <img src="assets/images/item/item4.jpg" />
              <div class="fixed-back">
                <span class="state">بيعت!</span>
                <div class="icon">
                  <i class="far fa-heart"></i>
                </div>
                <div class="add">
                  <p>
                    <a href>إضافة إلى السلة</a>
                  </p>
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

        </carousel>

    </div>
  </div>
</template>

<script>
import carousel from "vue-owl-carousel";
export default {
  name: "owlCarosel",
  components: { carousel },
  mounted() {
    this.$nextTick(() => {
      //start change image in section speical

      function changeImg(selector) {
        $(selector).each(function() {
          $(this).hover(function() {
            $(this)
              .next(".fixed-back")
              .show();
          });
        });
      }
      changeImg(".new .content img");

      $(".new .content .up").on("mouseleave", function() {
        $(".new .content img")
          .next(".fixed-back")
          .hide();
      });
    });
  }
};
</script>

<style >
.new .back-owl .up img {
  display: block;
  max-width: 100%;
  height: 400px !important;
  padding: 0 50px;
  margin-top: 50px
}

.owl-theme .owl-nav,
.owl-theme .owl-dots .owl-dot{
    display: none
}
</style>
