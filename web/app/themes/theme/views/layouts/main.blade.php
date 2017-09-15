<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    <div class="sidebar">
      @include('partials/sidebar')
    </div>
    <div class="main">
      @yield('content')
    </div>
    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
