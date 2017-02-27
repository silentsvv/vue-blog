<template>
<div class="wrap">
  <div class="article" v-for="article in articles" >
    <div class="article-title">
      <router-link :to="{ name: 'article', params: {id: article.id}}">{{article.title}}</router-link>
    </div> 
    <div class="article-summary">
      {{article.content}}
    </div>
    <div class="article-view"> 
      <div class="more">
        <router-link :to="{name : 'article', params: {id: article.id}}" on:click='getDate' class="index">阅读全文</router-link>
      </div>
    </div>
    <div class="article-date">
      {{article.date}}
    </div>
    <div class="article-type">
      #闲情日志
    </div>
  </div>
</div>
</template>

<script>
  import mock from '../../data/data.js'
  export default{
    data () {
      return {
        articles : mock.article
      }
    },
    methods:{
    },
    mounted() {
      this.$http.get('http://localhost:80/vue-blog/admin/model/articleList.php').then(response => {
        console.log(response.body);
      }, response => {
        // error callback
      })
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
    animation: fade 0.35s;
  } 

  .article-title{
    font-size: 35px;
    text-align: center;
    padding: 25px 10px;
    a{
      text-decoration: none;
      color: #000;
    }
  }

  .article-summary{
    font-size: 20px;
    padding: 5px 20px;
    height: 90px;
  }

  .article-view{
    width: 100%;
    height: 36px;
    .more{
      width: 100px;
      height: 26px;
      font-size: 14px;
      text-align: center;
      line-height: 26px;
      color: #d89572;
      margin: 8px auto;
      border: 1px solid #d89572;
      cursor: pointer;
      border-radius: 5px;
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
    border-bottom: 1px solid #929090;
  }

  @keyframes fade{
    0%{opacity: 0};
    50%{opacity: 0};
    100%{opacity: 1};
  }
</style>