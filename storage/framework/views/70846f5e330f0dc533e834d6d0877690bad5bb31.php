
<?php $__env->startSection('title'); ?>
   - <?php echo app('translator')->get('admin/home.faq'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <!-- start FAQ -->

        <div class="card-header" style="text-align: center; width: 79%; padding:0.25%; background-color:rgb(232, 232, 232); color:snow; border-radius:10px; margin-bottom:3%; margin-top:5%; margin-left:auto; margin-right:auto;">
            <h1><?php echo e(__('admin/home.faq')); ?></h1>
        </div>
  
        <div class="faq-container">

            <div class="faq" style="border-radius: 35px;">
                <h5 class="faq-title">How GDP works in general? (<u>Guidelines by steps</u>)</h5>
                <p class="faq-text">
                    <ul class="faq-text" style="list-style-type: upper-latin; padding-left: 2%;">
                        <li>
                            You won't be allowed to purchase any service in the website unless, you 
                            <a href="<?php echo e(route('register')); ?>" style="color: rgb(17, 17, 187); font-weight: bold;">Sign Up</a> first (as a Customer).
                        </li>
                        <hr>
                        <li>
                            After Signing Up, the website will automatically login you in to your account. 
                            Then you have to make an event request with the event details you need then submit the request.
                        </li>
                        <hr>
                        <li>
                            Wait until any Supplier(s) contact you in the requested event that you made already. Each Supplier
                            will enter your requested event, and will provide an offer with a suitable price for them and also
                            based on your input budget (when you entered event details including the budget), then 
                            you will be able to purchase the service based on the Supplier's provided offer/budget <b><u>or</u></b> 
                            you can still negotiate with the Supplier before accepting the budget in order to change the 
                            price to meet your availabe budget too as well until both of you and the supplier are okay with 
                            the deal then you are ready to pay (with PayPal). 
                        </li>
                    </ul>
                </p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="faq" style="border-radius: 35px;">
                <h5 class="faq-title">How do i pay the services (from the requested event) that i need?</h5>
                <p class="faq-text">
                    You need to have a "PayPal" account to pay through the website.
                </p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
    
            <div class="faq" style="border-radius: 35px;">
                <h5 class="faq-title">What benefits do you get from GDP?</h5>
                <p class="faq-text">
                    Depends on who are your asking
                </p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>

        </div>
        <!-- end FAQ -->

        <style>
            @import  url('https://fonts.googleapis.com//css?family=Muli&display=swap');

* {
    box-sizing: border-box;
}

h1 {
    margin: 50px 0 30px;
    text-align: center;
}

.faq-container {
    max-width: 70%;
    margin: 0 auto;
}

.faq {
    background-color: rgb(202, 202, 203);
    border: 1px solid #c1c4c7;
    margin: 20px 0;
    padding: 30px;
    position: relative;
    overflow: hidden;
    transition: 0.3s ease;
}

.faq.active {
    background-color: rgb(232, 230, 234);
    box-shadow: 0 3px 6px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.1);
}

.faq.active::before,
.faq.active::after {
  content: '\f075';
  font-family: 'Font Awesome 5 Free';
  color: #2ecc71;
  font-size: 7rem;
  position: absolute;
  opacity: 0.2;
  top: 20px;
  left: 20px;
  z-index: 0;
}

.faq.active::before {
    color: #3498db;
    top: -10px;
    left: -30px;
    transform: rotateY(180deg);
}

.faq-title {
    margin: 0 35px 0 0;
}

.faq-text {
    display: none;
    margin: 30px 0 0 ;
}

.faq.active .faq-text {
    display: block;
}

.faq-toggle {
    background-color: transparent;
    border: 0;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    padding: 0;
    position: absolute;
    top: 30px;
    right: 30px;
    height: 30px;
    width: 30px;
}

.faq-toggle:focus {
    outline: 0;
}

.faq-toggle .fa-times {
    display: none;
}

.faq.active .faq-toggle .fa-times {
    color: #222;
    display: block;
}

.faq.active .faq-toggle .fa-chevron-down {
    display: none;
}
        </style>

<script>
    const toggles = document.querySelectorAll('.faq-toggle');

toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        toggle.parentNode.classList.toggle('active');
    });
});
</script>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/website/faq.blade.php ENDPATH**/ ?>