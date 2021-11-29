<footer>
    <div class="footer-area text-center">
        <p>© Copyright 2021. All right reserved Webclass.0809</p>
    </div>
</footer>

<!-- jquery latest version -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script>
    const show = document.querySelector('#show');
    const pass = document.querySelector('#pass');
    const show1 = document.querySelector('#show1');
    const pass1 = document.querySelector('#pass1');

    show.addEventListener('click', ()=>{
        show.classList.toggle('fa-eye-slash');
        if (pass.type == 'password') {
            pass.type = 'text';
        }else{
            pass.type = 'password';
        }
    });

    show1.addEventListener('click', ()=>{
        show1.classList.toggle('fa-eye-slash');
        if (pass1.type == 'password') {
            pass1.type = 'text';
        }else{
            pass1.type = 'password';
        }
    })
</script>