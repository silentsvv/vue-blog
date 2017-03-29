<template>
  <div class="add-comment">
    <div class="add-comment-post">
      <div class="add-comment-name">
        <span>姓名:</span>
        <input type="text" id="comment-name">
      </div> 
      <div class="add-comment-text">
        <textarea name="" id="add-comment-textarea"></textarea>
      </div>
      <div class="add-comment-btn">
        <span class="btn-add" @click="addComment">提交</span>
      </div>
    </div>      
  </div>
</template>

<script>
  export default{
    props: ['articleId'],
    methods:{
      addComment () {
        let username = document.getElementById('comment-name').value;
        let content = document.getElementById('add-comment-textarea').value;
        let article_id = this.articleId;

        this.$http.post( global.url + '/admin/model/commentAdd.php',{'article_id':article_id,'username':username,"content":content},{emulateJSON:true}).then(response => {
          console.log(response);
        })
      }
    }
  }
</script>

<style lang="less">
  .add-comment{
    margin: 10px auto;
    max-width: 1000px;
    // background: #eee;
    border: 1px solid #ccc;
    .add-comment-post{
      padding: 10px;
      min-height: 100px;
      background: #fff; 
      .add-comment-name{
        padding: 10px;
        font-size: 14px;
      }
      .add-comment-text{
        padding: 20px;
        background: #bbb;
        #add-comment-textarea{
          height: 150px;
          width: 100%;
          padding: 10px 20px;
        }
      }
      .add-comment-btn{
        text-align: center;
        padding-top: 10px;
        .btn-add{
          display: inline-block;
          width: 80px;
          height: 30px;
          line-height: 30px;
          background: #bbb;
        } 
      }
    }
  }
</style>