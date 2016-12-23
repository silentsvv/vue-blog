<template>
  <MyArticle></MyArticle>
</template>

<script>
  import MyArticle from './article'
  import mock from '../../data/data.js'
  export default{
    components: {
      MyArticle
    },
    created () {
      console.log(mock);
    }
  }
</script>

<style>
</style>