@extends('frontend.layouts.main')
@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>
                الاسئلة الشائعة
            </h2>

            <ul>
                <li>
                    <a href="index.html">
                        الرئيسية
                    </a>
                </li>
                <li>
                    الاسئلة الشائعة
                </li>
            </ul>
        </div>
    </div>

    <div class="page-banner-shape-1" data-speed="0.05" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-1.png') }}" alt="image">
    </div>
    <div class="page-banner-shape-2" data-speed="0.07" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-2.png') }}" alt="image">
    </div>
    <div class="page-banner-shape-3" data-speed="0.06" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-3.png') }}" alt="image">
    </div>
    <div class="page-banner-shape-4" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/page-banner/shape-4.png') }}" alt="image">
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start FAQ Area -->
<div class="faq-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>
                <i class="ri-question-line"></i>
                الاسئلة الشائعة
            </span>
            <h2>
                يمكنك معرفة المزيد من خلال الأسئلة المطروحة لدينا
            </h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="faq-accordion">
                    <div class="accordion" id="FaqAccordion">
                        <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ما يجب على القيام به قبل التقديم على تأشيرة عمالة منزلية؟
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        يجب أن يكون المتقدم مسجلا في نظام أبشر. لمزيد من المعلومات عن التسجيل في
                                        أبشر

                                        دفع رسوم إصدار تأشيرة عمالة منزلية (2000 ريال) قبل رفع الطلب عبر سداد او
                                        الصراف الآلي

                                        التأكد من دفع المخالفات المرورية قبل رفع الطلب
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                كيف يتم دفع رسوم اصدار التأشيرة؟

                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        يتم الدفع قبل رفع الطلب وذلك من خلال أجهزة الصراف الالي أو عبر خدمة سداد
                                        الالكترونية
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ما هي المستندات المطلوبة لرفع طلب إصدار تأشيرة؟

                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        إرفاق ما يثبت القدرة المالية وذلك إما عبر الشهادة البنكية أو تعريف بالراتب

                                        يجب أن تكون جميع المستندات المرفقة باسم مقدم الطلب
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                كيف يتم التقديم عبر خدمة إصدار التأشيرة؟

                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        زيارة الموقع https://visa.musaned.gov.sa

                                        الضغط على زر ' تسجيل مستخدم جديد'

                                        تعبئة النموذج

                                        رقم الهوية

                                        الاسم الأول

                                        لقب العائلة

                                        تاريخ الميلاد

                                        كلمة المرور: أختر كلمة مرور تحتوي على حروف وأرقام ورموز (مثال: (Az%123456789

                                        تأكيد كلمة المرور: اعد كتابة كلمة المرور المختارة

                                        الجوال: رقم الجوال المسجل في نظام أبشر

                                        البريد الالكتروني

                                        بعد التسجيل ستصلك رسالة نصية على جوالك تحتوي رمز التفعيل

                                        أدخل رمز التفعيل

                                        سيتم تسجيل دخولك في نظام اصدار تأشيرات العمالة المنزلية الالكتروني

                                        أضغط على زر 'خدمات تأشيرة العمالة المنزلية'

                                        أضغط على زر 'طلب إصدار تأشيرة'

                                        تعبئة النموذج

                                        المهنة

                                        الجنسية

                                        جهة القدوم

                                        إثبات القدرة المالية (تعريف بالراتب أو كشف حساب)

                                        تحميل المرفقات
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="faq-accordion">
                    <div class="accordion" id="FaqAccordionTwo">
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                هل يدعم نظام مساند لإصدار التأشيرات للأفراد ذوي الاحتياجات الخاصة؟

                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>بهدف مساندة هذه الفئة الغالية على المجتمع تقوم وزارة العمل ووزارة الشؤون
                                        الاجتماعية بإسقاط شرط رسوم التأشيرة (2000 ريال) عن ذوي الاحتياجات الخاصة،
                                        ولكن للآسف الشديد حتى الأن لا يدعم النظام هذه الخاصية وجاري العمل على
                                        إضافتها في القريب العاجل بإذن الله،

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                ما هي الخطوة التالية بعد إصدار التأشيرة؟

                            </button>
                            <div id="collapseSix" class="accordion-collapse collapse show"
                                data-bs-parent="#FaqAccordionTwo">
                                <div class="accordion-body">
                                    <p>
                                        زيارة موقع مساند والبحث عن مقدمي الخدمة والتواصل معهم عبر الهاتف او زيارة
                                        المكتب https://goo.gl/tET6Xv

                                        توقيع عقد التوسط ودفع مبلغ 25% مقدما من رسوم الاستقدام المتفق عليها بين
                                        الطرفين
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                ما هي مدة تجربة عامل الخدمة المنزلية؟

                            </button>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#FaqAccordionTwo">
                                <div class="accordion-body">
                                    <p>
                                        يجوز أن يتفق الطرفان على وضع عامل الخدمة المنزلية تحت التجربة لمدة لا تزيد
                                        عن (تسعين) يوما، يكون لصاحب العمل خلالها أن يتحقق من الكفاءة المهنية لعامل
                                        الخدمة المنزلية، وسلامة سلوكه الشخصي.


                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                ما هي الحالات التي يتلزم بها مكتب / شركة الاستقدام بتأمين عامل بديل بالشروط المتفق
                                عليها في عقد "خدمات التوسط"؟

                            </button>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#FaqAccordionTwo">
                                <div class="accordion-body">
                                    <p>
                                        1. امتناع العامل عن العمل لأسباب لا تعود لصاحب العمل.
                                        2. عدم التزام العامل بتنفيذ مهماته وفقا لعقد العمل المبرم معه.
                                        3. عدم توافر الخبرة المطلوبة لديه وفقا لما حدده صاحب العمل في عقد "خدمات
                                        التوسط".
                                        4. اصابة العامل بمرض لا يمكنه من اداء عمله، أو ثبوت عدم صحة تقارير الفحوصات
                                        الطبية التي أجريت له.
                                        5. ترك العامل العمل لأسباب لا تعود لصاحب العمل.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/faq-shape-1.png') }}" alt="image">
    </div>
</div>
<!-- End FAQ Area -->

<!-- Start Contact Form Area -->
<div class="contact-form-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form-content">
                    <span>
                        اسألنا
                    </span>
                    <h3>
                        لا يزال لديك أي مشكلة أو سؤال؟ اسأل بحرية

                    </h3>

                    <ul class="action-list">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-line"></i></a>
                        </li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                    class="ri-instagram-fill"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-form-wrap">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-user-3-line"></i></label>
                                    <input type="text" class="form-control" required data-error="من فضلك أدخل إسمك"
                                        placeholder="الاسم">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-mail-line"></i></label>
                                    <input type="text" class="form-control" required
                                        data-error="رجاءا أدخل بريدك الإلكتروني" placeholder="البريد">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-phone-line"></i></label>
                                    <input type="text" class="form-control" required
                                        data-error="يرجى إدخال رقم الهاتف الخاص بك" placeholder="رقم الهاتف">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label><i class="ri-pencil-line"></i></label>
                                    <textarea class="form-control" cols="30" rows="6" required
                                        data-error="اكتب رسالتك" placeholder="رسالتك"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class="ri-arrow-right-line"></i>
                                    أرسل رسالتك
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form Area -->

<!-- Start Newsletter Area -->
<div class="newsletter-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>
                تواصل معنا للحصول علي اخر العروض والخدمات
            </h2>
        </div>

        <div class="d-flex justify-content-center align-items-center">

            <a href="contact.html" class="default-btn text-center mx-auto ">
                تواصل معنا عبر الواتساب
            </a>
        </div>

    </div>

    <div class="newsletter-shape-1" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-1.png') }}" alt="image">
    </div>
    <div class="newsletter-shape-2" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-2.png') }}" alt="image">
    </div>
    <div class="newsletter-shape-3" data-speed="0.09" data-revert="true">
        <img src="{{ asset('layouts/frontend/assets/images/newsletter/shape-3.png') }}" alt="image">
    </div>
</div>
<!-- End Newsletter Area -->
@endsection
