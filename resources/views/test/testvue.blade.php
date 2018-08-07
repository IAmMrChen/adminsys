<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="app">
		@{{ full_name }}
		<div>
			@{{ test_value }}
		</div>
		<div v-if="value">@{{ first_name }}</div>
		<div v-else>@{{ last_name }}</div>
		<div>@{{ message }}</div>
		<div>@{{ reverseMessage }}</div>
		<ul>
			<li v-for="(item, key, index) in test(object)">@{{ item }}:@{{ key }}@{{ index }}</li>
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
			object: [
				{id: 1, name: 'jack'},
				{id: 2, name: 'lala'},
				{id: 3, name: 'luck'},
			],
			test_value: 0,
		},
		beforeCreate: function () {
			// console.log(this.$el);
			// console.log(this.$data);
			// console.log(1000);
		},
		created: function () {
			// console.log(this.$data);
			// console.log(this.$el);
			// console.log(2000);
		},
		beforeMount: function () {
			console.log(this.$el);
			console.log(3000);
		},
		mounted: function () {
			console.log(4000);
		},
		beforeUpdate: function () {
			// 赋给的初始值为0
			console.log(this.test_value);
			console.log(5000);
		},
		updated: function () {
			console.log(6000);
		},
		destroy:function () {

		},
		beforeDestory: function () {
			console.log(7000);
		},
		methods: {
			addValue: function () {

				// Vue.set(this.object, 'name', 'book');

				this.object = Object.assign({}, this.object, {
				  favoriteColor: 'Vue Green'
				})

				console.log(this.object);

			},
			test: function (object) {
				return object.filter(function (number) {
		      return number.id == 1 || number.id == 2;
		    })
			}
		},
		computed: {
			full_name: {
				get: function () {
					return this.first_name + this.last_name;
				},
				set: function (newValue) {
					console.log(newValue);
					var names = newValue.split(' ');

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