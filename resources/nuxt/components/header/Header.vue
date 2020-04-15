<template>
    <div class="header">
        <h4 class="logo-text">
            Luja Recipe
        </h4>
        <ul class="nav-list">
            <li><nuxt-link to="/">Home</nuxt-link></li>
            <li><nuxt-link to="/recipies">Recipes</nuxt-link></li>
        </ul>
    </div>
</template>
<script>
export default {};
</script>
<style scoped>
.header {
    z-index: 99;
    display: flex;
    padding: 20px;
    justify-content: space-between;
    position: fixed;
    width: 100%;
    box-shadow: 0px 1px 5px #ccc;
    top: 0;
    background-color: #fff;
    height: 59px;
}
.nav-list {
}
.nav-list li {
    display: inline-block;
    margin: 0px 5px;
}
.nav-list li a {
    text-transform: uppercase;
    padding: 10px;
    color: #000;
    text-decoration: none;
}
</style>
