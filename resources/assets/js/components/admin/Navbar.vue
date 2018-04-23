<template>
    <nav class="navbar navbar-light bg-light navbar-expand-lg shadow-sm justify-content-between">
        <a class="navbar-brand" href="/admin">
            <img :src="brand" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav">
                <li v-for="route in $router.options.routes" class="nav-item" :class="route.color">
                    <router-link :to="route" class="nav-link" active-class="active" :data-target="route.path">
                        <i class="fas" :class="'fa-'+route.icon"></i> {{route.title}}
                    </router-link>
                </li>
            </ul>
        </div>


    </nav>
</template>

<script>
    export default {
        name: "navbar",
        props:["brand"]
    }
</script>

<style lang="scss" scoped>
    @import "../../../sass/admin";
    nav.navbar{
        border-top: 6px solid   map_get($theme-colors, 'color1');
        .navbar-brand{
        }
    }

</style>