<template>
  <div class="comment-list">
    <div class="comment" v-for="(comment,index) in comments">
      <div class="comment-num">{{index+1}}楼</div>
      <div class="comment-name"><span>用户：</span>{{comment.username}}</div> 
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
    border: 1px solid #ccc;
    .comment{
      padding: 10px;
      min-height: 100px;
      background: #fff; 
      .comment-name{
        padding: 10px;
        font-size: 14px;
      }
      .comment-text{
        padding: 20px;
        background: #eee;
      }
      .comment-date{
        text-align: right;
        color: #888;
        padding-top: 10px;
        font-size: 14px;
      }
    }
  }
</style>