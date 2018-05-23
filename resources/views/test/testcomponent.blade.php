  @extends('share.layouts')

  @section('content')
	<div id="test_content">
		<!-- <adminsys-select v-model="test">
			
		</adminsys-select> -->
	</div>
  @endsection

  @section('script')
  <script type="text/javascript">
  	var value = {
      test: '',
  	};
  	require(['jQuery' ,'vue' ,'asminsys_component'], function ($, vue, asminsys_component) {
  		(function ($) {
  			var vm = new vue({
  				data: value,
  				el: "#test_content",
  				methods: {
  				},
					created: function () {
					},
					mounted: function () {
            // asminsys_component.init_components();
          },
					components:{
						'adminsys-select': asminsys_component.select,
					},
  			});
  		})(jQuery);
  	})
  </script>
  @endsection