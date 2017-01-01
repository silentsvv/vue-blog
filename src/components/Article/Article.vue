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
  export default {
    data () {
      return{
        article : "",
        show: true
      }
    },
    created () {
      var that = this;
      var xmlHttp = new XMLHttpRequest();
      var url = location.href;
      var id = url.match(/article\/(\d)/)[1];
      var data = "id="+id;
      console.log(data);
      xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
          var data = xmlHttp.responseText;
          data = JSON.parse(data);
          that.article = data;
        }
      }
      xmlHttp.open("POST", "http://localhost/blog/vue-blog/admin/model/ajax.php", true);
      xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xmlHttp.send(data);
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