<template>
<div class="wrap">
  <div class="form">
    <div class="form-title">
      添加新的文章
    </div>
    <div class="form-tabel">
      <div class="article-title">
        <span class="title-text">标题</span>
        <input type="text" class="title-input">
      </div>
    </div>
  </div>
</div>
</template>

<script>
  export default{
    methods:{
    },
    created() {
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
      width: 100%;
      padding: 10px;
      .article-title{
        width: 80%;
        margin: 0 auto;
        margin-top: 50px;
        .title-text{
          display: inline-block;
          width: 100px;
          height: 80px;
          line-height: 80px;
          font-size: 20px;
        }
        .title-input{
          height: 40px;
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
</style>