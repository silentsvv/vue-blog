<template>
<div class="wrap">
  <div class="form" ref="form">
    <div class="form-title">
      添加新的文章
    </div>
    <div class="form-tabel">
      <div class="article-input">
        <div class="article-title">
          <span class="title-text">标题</span>
          <input type="text" class="title-input">
        </div>
        <div class="article-tag">
          <span class="tag-text">标签</span>
          <input type="text" class="tag-input">
        </div>
      </div>
      <div class="editor-wrap">
        <div class="editor">
          <script id="editor" type="text/plain"></script>
        </div>
        <div class="upload">
          <span class="get-msg" @click="getMsg()">提交</span>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
require('static/utf8-php/ueditor.config.js');
require('static/utf8-php/ueditor.all.min.js');
require('static/utf8-php/lang/zh-cn/zh-cn.js');
  export default{
    data (){
      return {
        editor : null
      }
    },
    methods:{
      getMsg() {
        console.log(this.editor.getContent())
      }
    },
    mounted() {
      var _this = this
      var a = 1000
      console.log(_this.$refs.form.offsetWidth)
      this.editor = UE.getEditor('editor',{
        toolbars: [
          ['bold', 'italic', 'underline', 'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', 'indent','link','unlink','fontfamily', 'fontsize','simpleupload', 'insertimage','emotion']
        ],
        initialFrameWidth: _this.$refs.form.offsetWidth - 100,
        initialFrameHeight: 350
      })
    },
    destroyed() {
      this.editor.destroy();
    }
  }
</script>

<style lang="less" scoped>
  .wrap{
    width: 950px;
    min-height: 600px;
    background: #fff;
    margin: 0 auto;
    margin-top: 50px;
    box-shadow: 0 0 10px 0 #ccc;
    .form-title{
      height: 80px;
      width: 100%;
      line-height: 80px;
      font-size: 30px;
      text-indent: 20px;
      color: #fff;
      background-color: #944d4d;
    }
    .form-tabel{
      width: 930px;
      padding: 10px;
      .article-input{
        margin-top: 10px;
        margin-bottom: 20px;
      }
      .article-title,.article-tag{
        width: 850px;
        margin: 0 auto;
        .title-text,.tag-text{
          display: inline-block;
          width: 100px;
          height: 50px;
          line-height: 50px;
          font-size: 16px;
        }
        .title-input,.tag-input{
          height: 26px;
          border: 1px solid #cc9a9a;
          border-radius: 5px;
          padding-left: 5px;
          outline: none;
          &:focus{
            border: 1px solid #f3d9d9;
          }
        }
      }
    }
  }

  .editor{
    width: 850px;
    margin: 0 auto;
  }
  .upload{
    width: 850px;
    height: 25px;
    margin: 20px auto;
    .get-msg{
      display: block;
      margin: 0 auto;
      width: 80px;
      height: 25px;
      line-height: 25px;
      text-align: center;
      color: #fff;
      background: #a95252;
    }
  }
</style>