<template>
  <div class="add-comment">
    <div class="add-comment-post">
      <div class="add-comment-name">
        <span>用户名：</span>
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
  import Bus from '../../bus.js' 

  export default{
    props: ['articleId'],
    methods:{
      addComment () {
        var url = location.href;
        var id = url.match(/article\/(\d*)/)[1];
        let username = document.getElementById('comment-name').value;
        let content = document.getElementById('add-comment-textarea').value;
        let article_id = this.articleId;

        this.$http.post( global.url + '/admin/model/commentAdd.php',{'article_id':article_id,'username':username,"content":content},{emulateJSON:true}).then(response => {
          let comment = {};
          comment.username = username;
          comment.content = content;
          Date.prototype.Format = function(fmt)   
          { //author: meizz   
            var o = {   
              "M+" : this.getMonth()+1,                 //月份   
              "d+" : this.getDate(),                    //日   
              "h+" : this.getHours(),                   //小时   
              "m+" : this.getMinutes(),                 //分   
              "s+" : this.getSeconds(),                 //秒   
              "q+" : Math.floor((this.getMonth()+3)/3), //季度   
              "S"  : this.getMilliseconds()             //毫秒   
            };   
            if(/(y+)/.test(fmt))   
              fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));   
            for(var k in o)   
              if(new RegExp("("+ k +")").test(fmt))   
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));   
            return fmt;   
          }  
          comment.time = new Date().Format("yyyy-MM-dd hh:mm:ss");
          Bus.$emit('change', comment);
          Bus.$emit('showTip');
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
    #comment-name {
      border: 1px solid #eee;
      height: 30px;
      padding-left: 5px;
    }
    border: 1px solid #ccc;
    .add-comment-post{
      padding: 10px;
      min-height: 100px;
      background: #fff; 
      .add-comment-name{
        padding: 10px;
        padding-left: 10%;
        font-size: 14px;
      }
      .add-comment-text{
        text-align: center;
        #add-comment-textarea{
          margin: 0 auto;
          padding: 10px 20px;
          height: 150px;
          width: 80%;
          border: 1px solid #eee;
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
          color: #fff;
          background: #f1cd8c;
          cursor: pointer;
        } 
      }
    }
  }
</style>