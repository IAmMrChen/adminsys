define(["jQuery", "text!adminsys_template" ],function ($, adminsys_template) {
	return (function ($) {
		var selectHtml = $(adminsys_template).find('template#selectHtml').html();

		var component = {
			select: {
				template: selectHtml,
				prop: {
					value: 0
				},
				data () {
					return {
						options: [
							{
			          value: '1',
			          label: '黄金糕'
			        },
			        {
			          value: '2',
			          label: '双皮奶'
			        },
			        {
			          value: '3',
			          label: '蚵仔煎'
			        }
		        ],
					}
				},
				methods: {

				},
				watch: {

				},
				created: {

				},
				mounted: {

				}
			},
			init_components: function () {
				console.log(123);
	    }
		}
		return component;
	})(jQuery);
})