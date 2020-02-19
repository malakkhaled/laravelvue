<template>
  <div class="cartitems">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-5">
          <div class="input-back">
            <button type="submit" class="btn">إستخدام القسيمة</button>
            <input type="email" placeholder="رقم القسيمة" />
          </div>
          <div class="carttotals">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">إجمالي سلة المشتريات</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><span> 80.00 د.ل.</span>المجموع:</li>
                <li class="list-group-item">

                  <span>  أدخل عنوانك لعرض خيارات الشحن.</span>الشحن:
                  <a href id="calc">حساب تكلفة الشحن</a>
                  <form class="forms">
                    <select class="form-control">
                      <option>ليبيا</option>
                    </select>
                    <select class="form-control">
                      <option>المنطقة الغربية</option>
                    </select>
                    <input type="email" class="form-control" placeholder="المدينة" />
                    <input type="email" class="form-control" placeholder="الرمز البريدي" />


                  <a href>تحديث</a>

                  </form>
                </li>
                <li class="list-group-item">
                  <a href="#" style="    font-weight: bold;"> <span> 80.00 د.ل.</span>الإجمالي:</a>
                </li>

              </ul>
              <div class="card-body text-center">
                <button type="submit" class="btn">التقدم لإتمام الطلب</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-7">
          <div class="wishlist">
            <div class="row border-bottom flex-row-reverse">
              <div class="col-md-12 col-lg-3">
                <h3>إسم المنتج</h3>
              </div>
              <div class="col-md-12 col-lg-3">
                <h3>السعر</h3>
              </div>
              <div class="col-md-12 col-lg-3">
                <h3>الكمية</h3>
              </div>
              <div class="col-md-12 col-lg-3">
                <h3>المجموع</h3>
              </div>
            </div>
            <div class="items-list border-bottom">
              <div class="row flex-row-reverse">
                <div class="col-md-12 col-lg-4 mr">
                  <ul class="list-unstyled">
                    <li class="list-inline-item svg-back">
                      <i class="fas fa-times"></i>
                    </li>
                    <li class="list-inline-item">
                      <img src="assets/images/item/item4.jpg" />
                    </li>
                    <li class="list-inline-item">سروال مفصل بالجيوب</li>
                  </ul>
                </div>
                <div class="col-md-12 col-lg-2 mr">
                  <span>75.00د.ل.</span>
                </div>
                <div class="col-md-12 col-lg-3">
                  <button class="btn only text-center">
                    <i class="fas fa-minus"></i>
                    <span class="count">2</span>
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div class="col-md-12 col-lg-3 mr">
                  <span>75.00 د.ل.</span>
                </div>
              </div>
              <div class="btn-groups" style="float:right;margin-top:50px">
                <button class="btn">تفريغ السلة</button>
                <button class="btn" style="margin-left:50px">تحديث السلة</button>
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

              $(".cartitems #calc").on("click",function(event){
                event.preventDefault();
               $(this).next('.forms').slideToggle();

           });

    });
  }
};
</script>
