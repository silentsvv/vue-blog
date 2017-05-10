<template>
  <div class="comment-list">
    <div class="comment" v-for="(comment,index) in comments">
      <div class="comment-num">#{{index+1}}</div>
      <div class="comment-name"><span></span><span class="name-style">{{comment.username}}:</span></div> 
      <div class="comment-text">
        {{comment.content}}
      </div>
      <div class="comment-date">
        {{comment.time}}
      </div>
    </div>      
  </div>
</template>

<script>
  import Bus from '../../bus.js'  

  export default{
    data() {
      return{
        comments : []
      }
    },
    created (){
      var url = location.href;
      var id = url.match(/article\/(\d*)/)[1];
      var _this = this;
      Bus.$on('change', function(comment){
        _this.comments.push(comment);
      }.bind(_this))
      this.$http.post( global.url + '/admin/model/commentList.php', {"id":id},{emulateJSON:true}).then(response => {
        this.comments = response.body;
      })
    }
  }
</script>

<style lang="less">
  .comment-list{
    margin: 10px auto;
    max-width: 1000px;
    // background: #eee;
    .comment{
      margin-top: 10px;
      padding: 10px;
      min-height: 100px;
      background: #fff;
      .comment-num {
        position: relative;
        padding-left: 10px;
        width: 100px;
        height: 30px;
        line-height: 30px;
        color: #fff;
        background: #f1cd8c;
        border-right: 1px solid #f1cd8c;
        &:after {
          content: '';
          position: absolute;
          right: 0;
          width: 0px;
          height: 0px; 
          border-top: 15px solid #f1cd8c;
          border-bottom: 15px solid #f1cd8c;
          border-right: 15px solid transparent;
          background: #fff;
        }
      }
      .comment-name{
        padding: 20px;
        font-size: 16px;
        position: relative;
        // &:before {
        //   content: '';
        //   position: absolute;
        //   left: -10px;
        //   width: 30px;
        //   height: 30px;
        //   background: #000;
        // }
        .name-style {
          font-weight: 700;
        }
      }
      .comment-text{
        padding: 20px 20px 40px 20px;
        font-size: 14px;
        color: #666;
      }
      .comment-date{
        text-align: right;
        color: #666;
        padding-top: 10px;
        font-size: 14px;
      }
    }
  }
</style>