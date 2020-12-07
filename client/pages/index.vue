<template>
  <div class="container">
    <div>
      index page 111
      <NuxtLink to="/test"> - test -</NuxtLink>
      <p>{{posts}}</p>
    </div>
  </div>
</template>

<script>
export default {
  async asyncData(context) {
    let response = await context.app.$axios.$post(`http://lanu/api/test-api`)
    return { posts: response }
  },
  mounted() {
    // this.$axios.$post('http://lanu/api/test-api').then(({data}) => {
    //   console.log(data);
    // })
  }
}
</script>

<style>
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
</style>
