<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- Bootstrap Styles-->
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- FontAwesome Styles-->
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <!-- Morris Chart Styles-->
    <link href="{{ getenv('ASSETS_JS_ROOT') }}/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ getenv('ASSETS_CSS_ROOT') }}/custom-styles.css" rel="stylesheet" />

</head>

<body>
    <div id="wrapper">
      @include('share.header')
      @include('share.menubar')
      @yield('content')
      <div id='test'>adfasdf</div>
    </div>
</body>

<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<!-- <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script> -->
<!-- Bootstrap Js -->
<!-- <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script> -->
<!-- Metis Menu Js -->
<!-- <script src="{{ getenv('ASSETS_JS_ROOT') }}/jquery.metisMenu.js"></script> -->
<!-- Morris Chart Js -->
<script src="{{ getenv('ASSETS_JS_ROOT') }}/morris/raphael-2.1.0.min.js"></script>
<!-- <script src="{{ getenv('ASSETS_JS_ROOT') }}/morris/morris.js"></script> -->
<!-- <script src="{{ getenv('ASSETS_JS_ROOT') }}/easypiechart.js"></script> -->
<!-- <script src="{{ getenv('ASSETS_JS_ROOT') }}/easypiechart-data.js"></script> -->
<!-- Custom Js -->
<!-- <script src="{{ getenv('ASSETS_JS_ROOT') }}/custom-scripts.js"></script> -->

<script type="text/javascript" src="{{ getenv('JS_ROOT') }}/require.js"></script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script type="text/javascript">
  require.config({
    baseUrl: "{{ getenv('ASSETS_JS_ROOT') }}",
    paths: {
      jQuery: "/assets/js/jquery-1.10.2",
      jquery: "/assets/js/jquery-1.10.2",
      jquerym: "/assets/js/jquery.metisMenu",
      easypiechart: "/assets/js/easypiechart",
      morris: "/assets/js/morris/morris",
      'custom-scripts': "/assets/js/custom-scripts",
      'easypiechart-data': "/assets/js/easypiechart-data",
      bootstrap: "http://www.jq22.com/jquery/bootstrap-3.3.4",
      vue: "https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue",
      raphael: "/assets/js/morris/raphael-2.1.0.min",
      text: "/assets/js/text-master/text",
      adminsys_template: "/component/template.html",
      asminsys_component: "/component/component",
    },
    "shim": {
      easypiechart: ['jQuery'],
      jquerym: ['jQuery'],
      bootstrap: ['jQuery'],
      morris: ['jQuery'],
      'easypiechart-data': ['jQuery', 'easypiechart'],
      'custom-scripts': ['jQuery', 'morris'],
      raphael: ['morris', 'jQuery']
    }
  });
  require(['jQuery', 'easypiechart-data', 'morris', 'custom-scripts', 'easypiechart', 'bootstrap', 'jquerym', 'vue', 'raphael'], function ($, easypiechartd, morris, custom, easypiechart, bootstrap, jquerym, vue, raphael) { 
    (function ($) {
     
    })(jQuery);
  })
</script>
@yield('script')