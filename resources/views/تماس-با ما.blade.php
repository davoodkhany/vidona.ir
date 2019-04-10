@extends('includes.header')
    <div class="header-about mb-5">
        <img src="style/images/contact-1.jpg" alt="" class="img-fluid">
        <div class="header-content">
            <span>تماس با ما</span>
            <p>کارشناسان ما در کنار شما هستند </p>
        </div>
    </div>
<div class="section about_address">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h4>تلفن تماس و نشانی:</h4>
               <h1>شرکت طراحی سایت ویدونا</h1>
                <div>
                    <i class="fas fa-phone mb-3"></i><span class="mr-3">تلفن:02833594407</span>
                </div>
                <div class="mb-5">
                    <i class="fas fa-map-marked-alt"></i><span class="mr-3">آدرس:قزوین- ناصرآباد-خبابان ابوترابی شرغی</span>
                </div>
                <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d1462.805993671847!2d49.94628675549264!3d36.304131561296984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!3e6!4m1!2z2LfYsdin2K3bjCDYs9in24zYqiDZiNuM2K_ZiNmG2Kc!4m3!3m2!1d36.304182499999996!2d49.9473267!5e0!3m2!1sen!2s!4v1553716936498" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-lg-6">
                <h4>فرم تماس با ما</h4>
                <p class="text-muted">برای ارتباط با ما و تبادل نظر فرم زیر را تکمیل کنید.</p>
                <form  action="">
                    <div class="form-group ">
                        <label for="">نام و نام خانوادگی :  </label>
                        <input type="text" class="form-control" placeholder="نام و نام خانوادگی را وارد کنید...">

                    </div>
                    <div class="form-group ">
                        <label  class="" for="">   ایمیل :  </label>
                        <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید...">
                    </div>
                    <div class="form-group ">
                        <label  class="" for="">   موضوع پیام :  </label>
                        <input type="email" class="form-control" placeholder="موضوع مورد نظر شما...">
                    </div>
                    <div class="form-group ">
                        <label  class="" for="">   متن پیام :  </label>
                        <textarea  class="form-control text-area_size" placeholder="متن خود را وارد کنید"></textarea>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-center ">
                        <button class="btn btn-danger btn-lg ">ارسال پیام<i class="fab fa-telegram mr-3 font-weight-bold"></i>  </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@extends('includes.footer')