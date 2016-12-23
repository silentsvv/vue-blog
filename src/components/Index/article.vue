<template>
<div class="wrap">
  <div class="article" v-for="article in articles" >
    <div class="article-title">
      <router-link :to="{ name: 'article', params: {id: article.id}}">{{article.title}}</router-link>
    </div> 
    <div class="article-summary">
      {{article.content}}
    </div>
    <div class="article-date">
      {{article.date}}
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
    methods: {
    }
  }
</script>

<style lang="less" scoped>
  .article{
    position: relative;
    width: 800px;
    height: 200px;
    background: #fff;
    box-shadow: 0px 0px 5px 2px #eee;
    margin: 20px auto;
  } 

  .article-title{
    font-size: 38px;
    padding: 4px 10px;
    font-weight: 700;
    border-bottom: 1px solid #eee;
    a{
      text-decoration: none;
      color: #000;
    }
  }

  .article-summary{
    font-size: 24px;
    padding: 10px 20px;
    height: 90px;
    border-bottom: 1px solid #eee;
  }

  .article-date{
    position: absolute;
    bottom: 5px;
    right: 10px;
    font-size: 14px;
  }
</style>