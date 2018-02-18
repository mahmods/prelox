<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body>
    @php(do_action('get_header'))
    @include('partials.header')
    <main class="main">
      @yield('content')
    </main>
    @php(do_action('get_footer'))
    @include('partials.footer')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRtGkj_ZAI1LIlw1XqzqBCUuJjQB0RVTk"></script>
    @php(wp_footer())
  </body>
</html>
