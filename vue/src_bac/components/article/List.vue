<template>
  <div class="ttt">
    这是文章的列表页面
    <ul>
  		<li v-for="article in articles">
    		{{article.title}}
  		</li>
		</ul>
  <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'alist',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      seen: 'niubi',
      articles: [],
      bbb: function (){
      	return  "11111";
      }
    }    
  },
	mounted: function() {
			//alert(this.bbb);
			this.$http.jsonp('https://api.douban.com/v2/movie/top250?count=20', {}, {
	        headers: {
	 
	        },
	        emulateJSON: true
	    }).then(function(response) { //链式调用执行
	      // 这里是处理正确的回调
	 
	        this.articles = response.data.subjects
	        // this.articles = response.data["subjects"] 也可以
	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });
	    aaa();
	    
	},
 method: function (){
 	
 	function aaa(){
 		alert("aaa");
 	}
 }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
