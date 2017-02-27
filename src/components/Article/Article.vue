<template>
  <div class="wrap fade">
      <div class="article" v-if="show">
        <div class="title">
          {{article.title}}
        </div>
        <div class="content">
          {{article.content}}
        </div>
      </div> 
  </div>
</template>

<script>
  import mock from '../../data/data.js'

  export default {
    data () {
      return{
        article : mock.article[0],
        show: true
      }
    },
    created () {
      var url = location.href;
      var id = url.match(/article\/(\d*)/)[1];
      this.$http.post('http://localhost:80/vue-blog/admin/model/articleList.php', {"id":id},{emulateJSON:true}).then(response => {
        this.article = response.body;  
      }, response => {
        // error callback
      })
    }
  }
</script>

<style lang="less" scoped>
  .wrap {
    width: 1000px;
    height: auto;
    margin: 50px auto;
    animation: fade 0.35s;
    .article{
      background: #fff;
      box-shadow: 0px 0px 15px 1px #ccc;
      .title{
        width: 100%;
        height: 150px;
        text-align: center;
        line-height: 100px;
        font-size: 34px;
        // border-bottom: 1px solid #eee;
      }
      .content{
        width: 100%;
        padding: 40px;
        font-size: 16px;
      }
    }
  }

  @keyframes fade{
    0%{opacity: 0};
    50%{opacity: 0};
    100%{opacity: 1};
  }
</style>