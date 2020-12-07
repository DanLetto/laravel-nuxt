<template>
  <div class="container">
    <div>
      index page
      <NuxtLink to="/test"> - test -</NuxtLink>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$axios.$post('http://lanu/api/test-api').then(({data}) => {
      console.log(data);
    })
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
