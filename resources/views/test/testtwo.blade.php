<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<div id="app">
	  @{{ message }}
		<select v-on:change="changeProvince" v-model="current_province">
		  <option :value="item.name" v-for="item in province">@{{ item.name }}</option>
		</select>
		<select>
		  <option :value="item.name" v-for="item in city[0]">@{{ item.name }}</option>
		</select>
	</div>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script type="text/javascript">
	var app = new Vue({
	  el: '#app',
	  data: {
	    message: 'Hello Vue!',
	    province: [
	    	{
	    		name: '福建省',
	    		city: [
	    			{name: '泉州市'},
	    			{name: '漳州市'},
	    		]
	    	},
	    	{
	    		name: '广东省',
	    		city: [
	    			{name: '广州市'},
	    			{name: '深圳市'},
	    		]
	    	}
	    ],
	    city: [],
	    current_province: '',
	  },
	  methods: {
	  	changeProvince: function () {
	  		for (var i = 0; i < this.province.length; i++ ) {
	  			if (this.current_province == this.province[i].name) {

	  				this.city = [];

	  				this.city.push(this.province[i].city);
	  			}
	  		}

	  		console.log(this.city);
	  	}
	  }
	})
</script>