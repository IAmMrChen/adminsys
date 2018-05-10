<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="app">
		@{{ full_name }}
		<div v-if="value">@{{ first_name }}</div>
		<div v-else>@{{ last_name }}</div>
		<div>@{{ message }}</div>
		<div>@{{ reverseMessage }}</div>
		<ul>
			<li v-for="item in object">@{{ item }}</li>
		</ul>
		<button type="submit" v-on:click="addValue">添加一个名字</button>
		<my-component></my-component>
	</div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script type="text/javascript">
	// 全局组件
	// Vue.component('my-component', {
	// 	template: "<div>这是一个组件</div>",
	// });
	// 局部组件
	var child = {
		template: "<div>这是一个局部组件</div>",
	};

	var app = new Vue({
		el: "#app",
		data: {
			message: 'Hello Chen!',
			forTemplate: [
				{id: 0, name: '小红'},
				{id: 1, name: '小东'},
				{id: 3, name: '小明'},
			],
			first_name: 'jack',
			last_name: 'ma',
			value: true,
			object: {
				shop: 100,
			}
		},
		methods: {
			addValue: function () {
				// var temp = new Object();
				// temp.id = 4;
				// temp.name = '小文';
				// this.forTemplate.push(temp);
				// this.forTemplate.length = 2;
				// console.log(this.forTemplate);
				// this.forTemplate.splice(2, 1);
				Vue.set(this.object, 'name', 'book');
				console.log(this.object);
			}
		},
		computed: {
			full_name: {
				get: function () {
					return this.first_name + this.last_name;
				},
				set: function (newValue) {
					var names = newValue.split(' ');
					console.log(names);
					console.log(names[0]);
				    this.first_name = names[0];
				    this.last_name = names[names.length - 1]
				}
			},
			reverseMessage: function () {
				return this.message.split('').reverse().join('');
			}
		},
		components: {
			"my-component": child,
		}
	})
</script>