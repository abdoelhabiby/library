
        <!-- Start Footer  -->
        <footer>
              
            @yield('footer')

            <div class="footer-bottom">
                جميع الحقوق محفوظة للتيم القائم علي انشاء الموقع | Copyright ©2020
            </div>
        </footer>
        <!-- End Footer  -->


        <!-- Script files -->
        <script src="{{asset('qeno')}}/js/jquery-3.4.1.min.js"></script>
        <script src="{{asset('qeno')}}/js/popper.min.js"></script>
        <script src="{{asset('qeno')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('qeno')}}/js/vanilla-tilt.min.js"></script>
        <script src="{{asset('qeno')}}/js/main.js"></script>
        @stack('js')
    </body>
</html>