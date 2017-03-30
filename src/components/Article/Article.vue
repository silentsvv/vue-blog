<template>
  <div class="wrap fade">
      <div class="article" v-if="show">
        <div class="title">
          {{article.title}}
        </div>
        <div class="content" v-html="article.content">
        </div>
        <div class="time">{{article.time}}</div>
      </div> 
      <Comment></Comment>
      <AddComment :articleId="article.id"></AddComment>
  </div>
</template>

<script>
  import mock from '../../data/data.js'
  import Comment from '../common/comment'
  import AddComment from '../common/addComment'
  import Bus from '../../bus.js'  

  export default {
    data () {
      return{
        article : mock.article[0],
        show: true
      }
    },
    components:{
      Comment,
      AddComment
    },
    created () {
      var url = location.href;
      var id = url.match(/article\/(\d*)/)[1];
      this.$http.post( global.url + '/admin/model/articleList.php', {"id":id},{emulateJSON:true}).then(response => {
        this.article = response.body;  
      })

    }
  }
</script>

<style lang="less" scoped>
  .wrap {
    height: auto;
    animation: fade 0.35s;
    .article{
      margin: 0 auto;
      min-height: 500px;
      max-width: 1000px;
      background: #fff;
      box-shadow: 0px 0px 15px 1px #ccc;
      .title{
        position: relative;        
        width: 100%;
        height: 150px;
        text-align: center;
        line-height: 100px;
        font-size: 34px;
      }
      .content{
        width: 100%;
        box-sizing: border-box;
        padding: 40px 100px;
        margin-bottom: 100px;
        font-size: 16px;
        img{
          display: block;
          max-width: 80%;
          margin: 10px auto;
        }
      }
      .time{
        margin-right: 20px;
        text-align: right;
        font-size: 14px;
        line-height: 50px;
        color: #8a8a8a;
      }
    }
  }

  .wrap{
    p{
      font-size: 16px;
      line-height: 30px;
    }
  }

  @keyframes fade{
    0%{opacity: 0};
    50%{opacity: 0};
    100%{opacity: 1};
  }
</style>