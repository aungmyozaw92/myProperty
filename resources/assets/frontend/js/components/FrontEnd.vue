<template>
<div>
     <Header/>
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">   
                    <router-view></router-view>
                </div>
                <Footer/>
               </div>
</template>

<script>
    import Header from './Header.vue';
    import Footer from './Footer.vue';
    export default {
        name: 'front-end',
        computed: {
        },
        components: {
            Header,
            Footer
        }
    }
</script>