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
    <!-- <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css"> -->

</head>

<body>
    <div id="wrapper">
      @include('share.header')
      @include('share.menubar')
      @yield('content')
      <div id='test'>adfasdf</div>
    </div>


<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
<script src="{{ getenv('ASSETS_JS_ROOT') }}/jquery.metisMenu.js"></script>
<script src="{{ getenv('ASSETS_JS_ROOT') }}/easypiechart.js"></script>
<script src="{{ getenv('ASSETS_JS_ROOT') }}/easypiechart-data.js"></script>
<script src="{{ getenv('ASSETS_JS_ROOT') }}/custom-scripts.js"></script>
<script src="{{ getenv('ASSETS_JS_ROOT') }}/morris/raphael-2.1.0.min.js"></script>
<script src="{{ getenv('ASSETS_JS_ROOT') }}/morris/morris.js"></script>



<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->

<!-- <script type="text/javascript" src="{{ getenv('JS_ROOT') }}/require.js"></script>
<script type="text/javascript">
  require.config({
    baseUrl: "{{ getenv('ASSETS_JS_ROOT') }}",
    paths: {
      jQuery: "/assets/js/jquery3.3.1",
      jquery: "/assets/js/jquery3.3.1",
      bootstrap: "http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min",
      jquerym: "/assets/js/jquery.metisMenu",
      easypiechart: "/assets/js/easypiechart",
      'easypiechart-data': "/assets/js/easypiechart-data",
      'custom-scripts': "/assets/js/custom-scripts",
      raphael: "/assets/js/morris/raphael-2.1.0.min",
      morris: "/assets/js/morris/morris",
      vue: "https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue",
      text: "/assets/js/text-master/text",
      adminsys_template: "/component/template.html",
      asminsys_component: "/component/component",
      // ELEMENT: "https://unpkg.com/element-ui/lib/index",
    },
    "shim": {
      bootstrap: ['jQuery'],
      jquerym: ['jQuery'],
      easypiechart: ['jQuery'],
      'easypiechart-data': ['jQuery', 'easypiechart'],
      'custom-scripts': ['jQuery', 'jquerym', 'easypiechart-data', 'morris'],
      raphael: ['easypiechart', 'jQuery', 'bootstrap'],
      morris: ['jQuery', 'raphael'],
      // ELEMENT: ['vue'],
      asminsys_component: ['vue'],
    }
  });
  require(['jQuery', 'easypiechart-data', 'custom-scripts', 'easypiechart', 'bootstrap', 'jquerym', 'vue', 'raphael', 'morris'], function ($, easypiechartd, custom, easypiechart, bootstrap, jquerym, vue, raphael, morris) { 
    (function ($) {

    })(jQuery);
  })
</script>
@yield('script') -->
</body>