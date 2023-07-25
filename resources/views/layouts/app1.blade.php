@include('include.header')
    <!-- END nav -->
       {{--start content --}}
    @yield('content')

       {{--end content --}}
    @include('include.footer')
@yield('script')
    </body>
  </html>