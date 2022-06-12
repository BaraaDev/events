@extends('layouts.website.master')
@section('title')
   - @lang('admin/home.faq')
@endsection
@section('content')
    <div class="content-wrapper">

        <!-- start FAQ -->
        <div class="card-header" style="text-align: center; width: 79%; padding:0.25%; background-color:rgb(232, 232, 232); color:snow; border-radius:10px; margin-bottom:3%; margin-top:5%; margin-left:auto; margin-right:auto;">
            <h1>{{__('admin/home.faq')}}</h1>
        </div>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h4 class="faq-page">What is an FAQ Page?</h4>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h4 class="faq-page">Why do you need an FAQ page?</h4>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h4 class="faq-page">Does it improves the user experience of a website?</h4>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
        </section>

        <style>
            .faq-heading{
    border-bottom: #777;
    padding: 20px 60px;
}
.faq-container{
display: flex;
justify-content: center;
flex-direction: column;
}
.hr-line{
  width: 90%;
  margin: auto;
  
}
/* Style the buttons that are used to open and close the faq-page body */
.faq-page {
    /* background-color: #eee; */
    color: #444;
    cursor: pointer;
    padding: 30px 20px;
    width: 90%;
    border: none;
    outline: none;
    transition: 0.4s;
    margin: auto;
}
.faq-body{
    margin: auto;
    /* text-align: center; */
   width: 50%; 
   padding: auto;
   
}
/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active,
.faq-page:hover {
    background-color: #F9F9F9;
}
/* Style the faq-page panel. Note: hidden by default */
.faq-body {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
}
.faq-page:after {
    content: '\02795';
    /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}
.active:after {
    content: "\2796";
}
        </style>

        <script>
            var faq = document.querySelector(".faq-page");
    var i;
    for (i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");
            /* Toggle between hiding and showing the active panel */
            var body = this.nextElementSibling;
            if (body.style.display === "block") {
                body.style.display = "none";
            } else {
                body.style.display = "block";
            }
        });
    }
        </script>
        <!-- end FAQ -->

    </div>
@endsection
{{-- @section('scripts')
    <script src="{{asset('website/js/js-plugins/leaflet.js')}}"></script>
    <script src="{{asset('website/js/js-plugins/MarkerClusterGroup.js')}}"></script>
    <script src="{{asset('website/js/js-plugins/leaflet-init.js')}}"></script>
@endsection --}}
