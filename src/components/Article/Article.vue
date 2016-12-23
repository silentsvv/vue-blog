<template>
  <div class="wrap">
    <div class="article">
      <div class="title">
        {{title}}
      </div>
      <div class="content">
        {{content}}
      </div>
    </div>
    <div class="comments">
      <div class="comment" v-for="comment in comments">
        <div class="comment-user">
          {{comment.username}}
        </div>
        <div class="comment-content">
          {{comment.content}}
        </div>
        <div class="comment-date">
          {{comment.date}}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import mock from '../../data/data.js'

  export default {
    data () {
      return{
        title: '',
        content: '',
        comments: mock.comments
      }
    },
    created () {
      var article = mock.article[this.$route.params.id-1];
      this.title = article.title;
      this.content = article.content;
    }
  }
</script>

<style lang="less" scoped>
  .wrap {
    width: 1000px;
    height: auto;
    margin: 50px auto;
    .article{
      background: #fff;
      box-shadow: 0px 0px 5px 2px #eee;
      .title{
        width: 100%;
        height: 150px;
        text-align: center;
        line-height: 100px;
        font-size: 38px;
        font-weight: 700;
        border-bottom: 1px solid #eee;
      }
      .content{
        width: 100%;
        padding: 40px;
      }
    }
    .comments{
      width: 800px;
      height: auto;
      margin:0 auto;
      margin-top: 40px;
      .comment{
        width: 100%;
        height: auto;
        margin-top: 20px;
        min-height: 80px;
        background-color: #fff;
        box-shadow: 0px 0px 5px 2px #eee;
        .comment-user{
          font-size: 14px;
          height: 20px;
          border-bottom: 1px solid #eee;
          padding: 5px 10px;
        }
        .comment-content{
          font-size: 16px;
          min-height: 40px;
          padding: 4px 10px;
          border-bottom: 1px solid #eee;
        }
        .comment-date{
          font-size: 12px;
          padding: 4px 10px;
          text-align: right;
        }
      }
    }
  }
</style>