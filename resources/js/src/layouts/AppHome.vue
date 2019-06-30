<template>
    <div>
        <toolbar></toolbar>
        <router-view :key="$route.fullPath"></router-view>
        <Footer></Footer>
    </div>
</template>

<script>
import toolbar from '../components/Toolbar'
import Footer from '../components/Footer'
export default {
    components: {toolbar, Footer}
}
</script>
