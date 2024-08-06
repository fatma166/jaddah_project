@extends('layouts.teacher.master')
@section('title')
    {{__("index")}}
@endsection

@section('content')


        <div class="statistics__ w-100 mb-5">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="./books/books.html">
                        <div class="statistics_item mb-3 p-4 bg-[#0052CC] flex justify-between items-center flex-row rounded-[8px] w-100 h-[120px]">
                            <div class="flex justify-start items-start flex-col gap-1">
                                <span class="text-[#fff] font-semibold text-[17px]"> الكتب </span>
                                <span class="text-[#fff] font-semibold text-[14px]"> 150 </span>
                            </div>
                            <img src="./assets/images/college admission-amico (1).svg" alt="" height="80" width="80">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./students/students.html">
                        <div class="statistics_item mb-3 p-4 bg-[#C72854] flex justify-between items-center flex-row rounded-[8px] w-100 h-[120px]">
                            <div class="flex justify-start items-start flex-col gap-1">
                                <span class="text-[#fff] font-semibold text-[17px]"> الطلاب </span>
                                <span class="text-[#fff] font-semibold text-[14px]"> 150 </span>
                            </div>
                            <img src="./assets/images/college class-bro.svg" alt="" height="80" width="80">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./exams/exams.html">
                        <div class="statistics_item mb-3 p-4 bg-[#FF9920] flex justify-between items-center flex-row rounded-[8px] w-100 h-[120px]">
                            <div class="flex justify-start items-start flex-col gap-1">
                                <span class="text-[#fff] font-semibold text-[17px]"> الأختبارات </span>
                                <span class="text-[#fff] font-semibold text-[14px]"> 150 </span>
                            </div>
                            <img src="./assets/images/college students-amico.svg" alt="" height="80" width="80">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="./question-bank/bank.html">
                        <div class="statistics_item mb-3 p-4 bg-[#331B64] flex justify-between items-center flex-row rounded-[8px] w-100 h-[120px]">
                            <div class="flex justify-start items-start flex-col gap-1">
                                <span class="text-[#fff] font-semibold text-[17px]"> بنك الأسئلة </span>
                                <span class="text-[#fff] font-semibold text-[14px]"> 150 </span>
                            </div>
                            <img src="./assets/images/college project-rafiki.svg" alt="" height="80" width="80">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="charts w-100">
            <div class="row mt-5 w-100">
                <div class="col-md-6">
                    <span class="chart_title"> المواد التفاعلية </span>
                    <canvas id="lineChart"  style="height: 100%"></canvas>
                </div>
                <div class="col-md-6">
                    <span class="chart_title"> الطلاب </span>
                    <canvas id="lineChartStudent"  style="height: 100%"></canvas>
                </div>
            </div>
        </div>
        <form action="" class="w-100 mb-5">
            <div class="flex justify-between items-center flex-row flex-wrap w-100">
                <div class="filter_items flex justify-start gap-4 items-center">
                    <div class="d-flex justify-content-start align-items-start flex-column gap-1">
                        <label for="" class="text-third-color font-semibold text-[14px] mb-2"> الجامعة </label>
                        <select
                            name="class"
                            id="class"
                            class="form-select form-control !w-[200px]"
                            aria-label="Default select example"
                            aria-placeholder="Segmentation*"
                        >
                            <option selected disabled>الجامعة </option>
                            <option value="">الجامعة 1</option>
                            <option value="">الجامعة 2</option>
                            <option value="">الجامعة 3</option>
                            <option value="">الجامعة 4</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-start align-items-start flex-column gap-1">
                        <label for="" class="text-third-color font-semibold text-[14px] mb-2"> الكلية</label>
                        <select
                            name="class"
                            id="class"
                            class="form-select form-control !w-[200px]"
                        >
                            <option selected disabled>الكلية</option>
                            <option value="test">الكلية 1</option>
                            <option value="">الكلية 2</option>
                            <option value="">الكلية 3</option>
                            <option value="">الكلية 4</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-start align-items-start flex-column gap-1">
                        <label for="" class="text-third-color font-semibold text-[14px] mb-2"> القسم </label>
                        <select
                            name="category1"
                            id="category1"
                            class="form-select form-control !w-[200px]"
                        >
                            <option selected disabled>القسم</option>
                            <option value="test">القسم 1</option>
                            <option value="">القسم 2</option>
                            <option value="">القسم 3</option>
                            <option value="">القسم 4</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-start align-items-start flex-column gap-1">
                        <label for="" class="text-third-color font-semibold text-[14px] mb-2"> الشعبة </label>
                        <select
                            name="category1"
                            id="category1"
                            class="form-select form-control !w-[200px]"
                        >
                            <option selected disabled>الشعبة</option>
                            <option value="test">شعبة 1</option>
                            <option value="">شعبة 2</option>
                            <option value="">شعبة 3</option>
                            <option value="">شعبة 4</option>
                        </select>
                    </div>
                </div>
                <div class="filter_button">
                    <button class="bg-second-color text-primary-color py-[8px] px-[15px] rounded-[8px] w-[100px]"> فلتر </button>
                </div>
            </div>
        </form>
        <div class="table_layout w-100">
            <div class="row">
                <div class="col-md-6">
                    <h6> احدث الكتب </h6>
                    <div class="w-100 mt-5">
                        <table id="lastBook" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>الصورة</th>
                                <th>القسم</th>
                                <th>access code</th>
                                <th>السعر</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>كتاب 1</td>
                                <td>
                                    <img src="./assets/images/novel9.jpg" alt="book" width="50" height="50">
                                </td>
                                <td>أدب</td>
                                <td>hgDyt56Dx</td>
                                <td>150 ر.س</td>
                            </tr>
                            <tr>
                                <td>كتاب 1</td>
                                <td>
                                    <img src="./assets/images/novel9.jpg" alt="book" width="50" height="50">
                                </td>
                                <td>أدب</td>
                                <td>hgDyt56Dx</td>
                                <td>150 ر.س</td>
                            </tr>
                            <tr>
                                <td>كتاب 1</td>
                                <td>
                                    <img src="./assets/images/novel9.jpg" alt="book" width="50" height="50">
                                </td>
                                <td>أدب</td>
                                <td>hgDyt56Dx</td>
                                <td>150 ر.س</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6> اخر الطلاب المنضمين </h6>
                    <div class="w-100 mt-5">
                        <table id="lastStudent" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>الصورة</th>
                                <th>الكتاب</th>
                                <th>تاريخ الأنضمام</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>أحمد يسري</td>
                                <td>
                                    <img src="./assets/images/avatar.png" alt="avatar" width="50" height="50">
                                </td>
                                <td>كتاب يحكي عن الأدب العلمي</td>
                                <td>27 - 11 - 2020</td>
                            </tr>
                            <tr>
                                <td>أحمد يسري</td>
                                <td>
                                    <img src="./assets/images/avatar.png" alt="avatar" width="50" height="50">
                                </td>
                                <td>كتاب يحكي عن الأدب العلمي</td>
                                <td>27 - 11 - 2020</td>
                            </tr>
                            <tr>
                                <td>أحمد يسري</td>
                                <td>
                                    <img src="./assets/images/avatar.png" alt="avatar" width="50" height="50">
                                </td>
                                <td>كتاب يحكي عن الأدب العلمي</td>
                                <td>27 - 11 - 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection
