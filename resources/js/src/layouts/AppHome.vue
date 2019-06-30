<template>
    <div>
        <toolbar></toolbar>
        <router-view :key="$route.fullPath"></router-view>
        <!-- <app-footer></app-footer> -->
    </div>
</template>

<script>
import toolbar from '../components/Toolbar'
// import AppFooter from '../components/AppFooter'
export default {
    components: {toolbar}
}
</script>
