<template>
<div class="wrap">
  <div class="search" v-bind:class="{searched:isSearch}">
    <input type="text" class="search-input" placeholder="请输入相关文章名"><i class="fa fa-search" @click="search"></i>
  </div>
  <div class="article" v-for="article in articles" >
    <div class="article-title">
      <router-link :to="{ name: 'article', params: {id: article.id}}">{{article.title}}</router-link>
    </div> 
    <div class="article-summary" v-html="article.content">
    </div>
    <div class="article-view"> 
      <div class="more">
        <router-link :to="{name : 'article', params: {id: article.id}}" on:click='getDate' class="index">阅读全文</router-link>
      </div>
    </div>
    <div class="article-date">
      {{article.time}}
    </div>
    <div class="article-type">
      #{{article.type}}
    </div>
  </div>
</div>
</template>

<script>
  import mock from '../../data/data.js'
  export default{
    data () {
      return {
        articles : mock.article,
        isSearch : false
      }
    },
    methods:{
      search(){
        this.isSearch = !this.isSearch;
      }
    },
    mounted() {
      this.$http.get( global.url + '/admin/model/articleList.php').then(response => {
        this.articles = response.body;
        for(let i = 0; i < this.articles.length; i++){
          this.articles[i].content = this.articles[i].content.replace(/<[^>]*>/gi,'').replace(/&nbsp;/gi,' ').substring(0,30)+'......';
        }
      })

      let search = document.getElementsByClassName('search-input')[0];
      let inputText;
      let _this = this;
      search.onkeydown = function(event){
        if(event.keyCode == "13"){
          console.log("你按了回车")
          inputText = search.value;
          _this.$http.get( global.url + '/admin/model/articleSearch.php?s='+inputText).then(response => {
            _this.articles=response.body;
            for(let i = 0; i < _this.articles.length; i++){
              _this.articles[i].content = _this.articles[i].content.replace(/<[^>]*>/gi,'').replace(/&nbsp;/gi,' ').substring(0,30)+'......';
            }
          })
        }
      }
    }
  }
</script>

<style lang="less" scoped>
  .article{
    position: relative;
    width: 950px;
    min-height: 150px;
    background: #fff;
    box-shadow: 0px 0px 7px 0px #ccc;
    margin: 40px auto;
    transition: box-shadow 0.35s;
    animation: fade 0.35s;
    &:hover{
      box-shadow: 0px 0px 14px 0px #ececec;
    }
    &:first-child{
      margin-top: 0px;
    }
  } 

  .article-title{
    font-size: 24px;
    text-align: center;
    padding: 25px 10px;
    transition: all 0.75s;
    a{
      text-decoration: none;
      color: #333;
    }
    &:hover{
      // transform:scale(1.01);
    }
  }

  .article-summary{
    font-size: 16px;
    padding: 5px 20px;
    height: 100px;
    color: #313131;
  }

  .article-view{
    width: 100%;
    height: 60px;
    .more{
      width: 100px;
      height: 26px;
      font-size: 14px;
      text-align: center;
      line-height: 26px;
      color: #d89572;
      margin: 8px auto;
      margin-bottom: 16px;
      box-shadow: 0px 0px 8px 5px transparent;
      transition: box-shadow 0.25s ease-out;
      border: 1px solid #d89572;
      cursor: pointer;
      border-radius: 5px;
      &:hover{
        box-shadow: 0px 0px 2px 0px #d89572;
      }
      a{
        color: #d89572;
        text-decoration: none;
      }
    }
  }

  .article-type{
    position: absolute;
    top: 0px;
    padding: 10px;
    left: 0px;
    background-color: #d89572;
    color: #fff;
    font-size: 14px;
  }

  .article-date{
    position: absolute;
    top: 10px;
    right: 10px;
    color: #929090;
    font-size: 14px;
  }


  //搜索条
  .search{
    position: absolute;
    right: 40px;
    top: -80px;
    .search-input{
      margin-right: -20px;
      padding-left: 10px;
      padding-right: 50px;
      height: 36px;
      width: 50px;
      color: #f5f5f5;
      border: 1px solid #a9a5a5; 
      border-radius: 10px;
      outline: none;
      background-color: transparent;
      transition: all 0.25s;
      transition-delay: 0.10s;
      opacity: 0;
      &::-webkit-input-placeholder{
        color: #ccc;
      }
    }
    .fa-search{
      position: absolute;
      top: 5px;
      right: -10px;
      height: 26px;
      transform: scale(0.8);
      transition: all 0.25s;
      font-size: 26px;
      color: #a9a5a5;
      cursor: pointer;
    }
  }

  .searched{
    .search-input{
      margin-right: 0px;
      width: 300px;
      opacity: 1;
    }
    .fa-search{
      top: 5px;
      right: 8px;
      height: 26px;
      font-size: 26px;
      transform: scale(1);
      color: #a9a5a5;
    }
  }

  @keyframes fade{
    0%{opacity: 0};
    50%{opacity: 0};
    100%{opacity: 1};
  }
</style>