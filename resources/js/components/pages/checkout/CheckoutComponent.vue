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
                <h5 class="card-title">طلبك</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <span>المجموع</span>المنتج:
                </li>
                <li class="list-group-item">
                  <span>80.00 د.ل.</span>سروال مفصل بالجيوب
                  <br />ضيقة -
                  <br />Grey, XXL
                  <br />× 1
                  <br />
                </li>
                <li class="list-group-item">
                  <a href="#" style="    font-weight: bold;">
                      الشحن:
                    <span>لا توجد طرق شحن متاحة. يرجى التأكد من إدخال عنوانك بطريقة صحيحة، أو الاتصال بنا إذا كنت بحاجة إلى الحصول على أي مساعدة.</span>
                  </a>
                </li>
                <li class="list-group-item">
                  <a href="#" style="    font-weight: bold;">
                    <span>0.00 د.ل.</span>الدفع نقدًا عند الإستلام:
                  </a>
                </li>

                <li class="list-group-item">
                  <a href="#" style="    font-weight: bold;">
                    <span>80.00 د.ل.</span>الإجمالي:
                  </a>
                </li>

                <li class="list-group-item">
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 20px;">الدفع نقدًا عند الإستلام</label>
                    <p class="lead">سيتم استخدام بياناتك الشخصية لمعالجة طلبك ودعم تجربتك عبر هذا الموقع الإلكتروني ، ولأغراض أخرى موضحة في سياسة الخصوصية.</p>
                  </div>
                </li>

                <li class="list-group-item">
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                    <label
                      class="form-check-label"
                      for="exampleCheck2"
                      style="margin-right: 20px;"
                    >لقد قرأتُ الشروط والأحكام وأوافق عليها لهذا الموقع</label>

                  </div>
                </li>
              </ul>
              <div class="card-body text-center">
                <button type="submit" class="btn"> تأكيد الطلب</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-7">
            <h2>تفاصيل الفاتورة</h2>
       <form class="forms-checkout">
           <div class="row">
               <div class="col-md-6 col-lg-6">
                    <input type="email"  class="form-control" placeholder="الإسم الأول" />

               </div>
                <div class="col-md-6 col-lg-6">
                    <input type="email"  class="form-control" placeholder="الإسم الأخير" />

               </div>
           </div>
           <h6>الدولة </h6>
           <span>ليبيا</span>
            <h6>عنوان الشارع </h6>
            <input type="email" class="form-control" placeholder="++" />
             <input type="email" class="form-control" placeholder="رقم الشقة ,الجناج " />
                 <h6>الولاية/ المنطقة </h6>
                    <select class="form-control">
                      <option>المنطقة الغربية</option>
                    </select>
                       <h6>المدينة </h6>
                    <select class="form-control">
                      <option>طرابلس</option>
                    </select>
                       <h6>الهاتف </h6>
                    <input type="password" class="form-control" placeholder="الهاتف" />
                       <h6>البريد الإلكتروني </h6>
                    <input type="email" class="form-control" placeholder=" البريد الإلكتروني" />


                <h6>ملاحظات الطلب (اختياري)</h6>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">ملاحظات حول الطلب</textarea>
                  </form>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$nextTick(() => {
      $(".cartitems #calc").on("click", function(event) {
        event.preventDefault();
        $(this)
          .next(".forms")
          .slideToggle();
      });
    });
  }
};
</script>
