<template>
  <div class="sproduct">
    <div class="row">
      <div class="col-xs-12 col-lg-6">
        <img src="assets/images/item/item4.jpg" />
        <img src="assets/images/item/item4.jpg" />
        <img src="assets/images/item/item4.jpg" />
        <img src="assets/images/item/item4.jpg" />
      </div>

      <div class="col-xs-12 col-lg-6 contents">
        <h1>سروال مفصل بالجيوب</h1>
        <span class="price">50 LY</span>
        <p>سروال مفصل بالجيوب سروال مفصل بالجيوب سروال مفصل بالجيوب سروال مفصل بالجيوب سروال مفصل بالجيوب سروال مفصل بالجيوب</p>

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
        <div class="clear">
          <a href>
            <i class="fas fa-trash-alt"></i>إزالة
          </a>
        </div>
        <button class="btn text-center">
          <i class="fas fa-minus"></i>
          <span class="count">2</span>
          <i class="fas fa-plus"></i>
        </button>
        <button class="btn text-center">إضافة إلى السلة</button>

        <div class="groups">
          <span class="fav">
            <a href>
            <span id="addfav"><i class="fas fa-heart"></i> إضافة إلى المفضلة</span><span id="showfav">مشاهدة المفضلة </span>
            </a>
          </span>
          <div class="info-section">
          <span class="left">
            <i class="fas fa-long-arrow-alt-left"></i>المواصفات
          </span>
          <div class="info-f">
          <ul class="list-unstyled">

              <li>
                <span>الوصف :</span>
                كم طويل ، بسيط ، قصير ،  فستان كم مفصل
              </li>
              <li>
                <span>المواد: </span>
                100 ٪ البوليستر
              </li>
              <li>
                <span>نموذج معلومات الحجم: </span>
                <ul class="list-unstyled">
                  <li>الارتفاع: 180 سم</li>
                  <li>الصدر: 85</li>
                  <li>الصدر: 85</li>
                  <li>الصدر: 85</li>
                  <li>الارتفاع: 180 سم</li>
                </ul>
              </li>
            </ul>
          </div>
          </div>
          <div class="rev-section">
          <span class="left">
            <i class="fas fa-long-arrow-alt-left"></i>مراجعات
          </span>
          <div class="reviews">
                <span class="h3">لا توجد مراجعات بعد</span>
                <ul class="list-unstyled">
                    <li class="list-inline-item">كن أول من يقيم هذا العنصر</li>
                    <li class="list-inline-item" style="float:left"> التقييم<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                </ul>
                <div class="form-group">
                  <span class="note">لن يتم نشر بريدك الإلكتروني على الإطلاق.</span>
                  <form class="forms">
                      <ul class="list-unstyled">
                          <li class="list-inline-item mr-auto"><input class="form-control" type="text" name="name" placeholder="الإسم"></li>
                           <li class="list-inline-item ml-auto"><input  class="form-control" type="text" name="email" placeholder="الإيميل"></li>
                      </ul>
                      <textarea class="form-control" rows="9">مراجعتك</textarea>
                       <button class="btn text-center">إرسال</button>
                  </form>
                </div>
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

              $(".groups .left").on("click",function(){
               $(this).next().toggle();

           });

           $(".groups .fav #addfav").on("click",function(event){
               event.preventDefault();
               $(this).hide().next('#showfav').show();

           });

    });
  }
};
</script>
